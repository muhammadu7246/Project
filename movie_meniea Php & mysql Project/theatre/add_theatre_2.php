<?php
// session_start(); // Ensure session is started
include('header.php');
include('slidebar.php');
include('conn.php');

// Fetch theatre information using prepared statements
$theatre_id = $_SESSION['theatre'];
$stmt = $con->prepare("SELECT * FROM tbl_theatre WHERE id = ?");
$stmt->bind_param('i', $theatre_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $theatre = $result->fetch_assoc();
} else {
    $theatre = null; // Set to null if no data found
}
$stmt->close();
?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2><?php echo htmlspecialchars($theatre['name'] ?? 'Theatre Not Found'); ?></h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="#" method="POST" class="form">
                    <input type="hidden" name="add_theater" value="1">
                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label
                                            for="form__img-upload"><?php echo htmlspecialchars($theatre['name'] ?? 'No Name'); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="name"
                                            value="<?php echo htmlspecialchars($theatre['address'] ?? 'No Address'); ?>"
                                            readonly required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="email"
                                            value="<?php echo htmlspecialchars($theatre['place'] ?? 'No Place'); ?>"
                                            readonly required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="pass"
                                            value="<?php echo htmlspecialchars($theatre['state'] ?? 'No State'); ?>"
                                            readonly required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__group">
                                        <input id="text" name="address" class="form__textarea"
                                            value="<?php echo htmlspecialchars($theatre['pin'] ?? 'No Pin'); ?>"
                                            readonly required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->

            <!-- screens table -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th class="col-md-1">Slno</th>
                                <th class="col-md-3">Screen Name</th>
                                <th class="col-md-1">Seats</th>
                                <th class="col-md-1">Charge</th>
                                <th class="col-md-3">Show Time</th>
                                <th class="text-right col-md-3">
                                    <button data-toggle="modal" data-target="#view-modal" id="getUser"
                                        class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add Screen</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetch screens using prepared statements
                            $stmt = $con->prepare("SELECT * FROM tbl_screens WHERE t_id = ?");
                            $stmt->bind_param('i', $theatre_id);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if ($result->num_rows > 0) {
                                $sl = 1;
                                while ($screen = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="main__table-text"><?php echo $sl; ?></div>
                                        </td>
                                        <td>
                                            <div class="main__table-text">
                                                <?php echo htmlspecialchars($screen['screen_name']); ?></div>
                                        </td>
                                        <td>
                                            <div class="main__table-text"><?php echo htmlspecialchars($screen['seats']); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="main__table-text"><?php echo htmlspecialchars($screen['charge']); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <?php
                                            // Fetch show times using prepared statements
                                            $stmt2 = $con->prepare("SELECT * FROM tbl_show_time WHERE screen_id = ?");
                                            $stmt2->bind_param('i', $screen['screen_id']);
                                            $stmt2->execute();
                                            $result2 = $stmt2->get_result();
                                            if ($result2->num_rows > 0) {
                                                while ($stm = $result2->fetch_assoc()) {
                                                    echo date('h:i a', strtotime($stm['start_time'])) . " ,";
                                                }
                                            } else {
                                                echo "No Show Time Added";
                                            }
                                            $stmt2->close();
                                            ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="main__table-text">
                                                <a class="main__table-btn main__table-btn--delete open-modal"
                                                    data-toggle="modal" data-id="<?php echo $screen['screen_id']; ?>"
                                                    data-target="#view-modal2" id="getUser2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $sl++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <button data-toggle="modal" data-target="#view-modal" id="getUser"
                                            class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add Screen</button>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Add Screen Modal -->
            <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">
                                <i class="fa fa-plus"></i> Add Screen
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div id="modal-loader" style="display: none; text-align: center;">
                                <img src="ajax-loader.gif" alt="Loading">
                            </div>
                            <div id="dynamic-content"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Show Time Modal -->
            <div id="view-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">
                                <i class="fa fa-plus"></i> Add Show Time
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="s_name" style="color: #fff;">Select Show</label>
                                <select name="s_name" id="s_name" class="form-control form__input">
                                    <option value="0">Select Show</option>
                                    <option>Noon</option>
                                    <option>Matinee</option>
                                    <option>First</option>
                                    <option>Second</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="s_time" style="color: #fff;">Show Starting Time</label>
                                <input type="time" id="s_time" class="form-control form__input" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" id="savetime">Save</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<!-- end main content -->

<?php
include('footer.php');
?>

<script type="text/javascript">
    $(document).ready(function () {
        // Load add screen form into the modal
        $(document).on('click', '#getUser', function (e) {
            e.preventDefault();
            $('#dynamic-content').html(''); // Clear content
            $('#modal-loader').show(); // Show loader

            $.ajax({
                url: 'add_screen_form.php',
                type: 'POST',
                data: { id: <?php echo $_SESSION['theatre']; ?> },
                dataType: 'html'
            })
                .done(function (data) {
                    $('#dynamic-content').html(data); // Load response
                    $('#modal-loader').hide(); // Hide loader
                })
                .fail(function () {
                    $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader').hide();
                });
        });

        // Save screen data
        $(document).on('click', '#savescreen', function () {
            var name = $('#sname').val();
            var seats = $('#sseats').val();
            var charge = $('#scharge').val();

            if (name === "" || seats === "" || charge === "") {
                alert("Enter Correct Details");
            } else {
                $.ajax({
                    url: 'save_screen.php',
                    type: 'POST',
                    data: {
                        theatre: <?php echo $_SESSION['theatre']; ?>,
                        name: name,
                        charge: charge,
                        seats: seats
                    },
                    dataType: 'html'
                })
                    .done(function (data) {
                        loadScreendtls();
                        $('#view-modal').modal('toggle');
                    })
                    .fail(function () {
                        loadScreendtls();
                        $('#view-modal').modal('toggle');
                    });
            }
        });

        // Set screen ID for adding show time
        $(document).on('click', '#getUser2', function (e) {
            screenid = $(this).data("id"); // Get screen ID
        });

        // Save show time data
        $('#savetime').click(function () {
            var s_time = $('#s_time').val();
            var s_name = $('#s_name').val();

            if (s_time === "" || s_name === "0") {
                alert("Enter valid details");
            } else {
                $.ajax({
                    url: 'save_time.php',
                    type: 'POST',
                    data: {
                        screen: screenid,
                        time: s_time,
                        sname: s_name
                    },
                    dataType: 'html'
                })
                    .done(function (data) {
                        loadScreendtls();
                        $('#s_time').val('');
                        $('#s_name').val('0');
                        $('#view-modal2').modal('toggle');
                    })
                    .fail(function () {
                        loadScreendtls();
                        $('#view-modal2').modal('toggle');
                    });
            }
        });

        // Load screen details
        function loadScreendtls() {
            $.ajax({
                url: 'get_screen_dtls.php',
                type: 'POST',
                data: { id: <?php echo $_SESSION['theatre']; ?> },
                dataType: 'html'
            })
                .done(function (data) {
                    $('#screendtls').html(data);
                })
                .fail(function () {
                    $('#screendtls').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                });
        }
    });
</script>   