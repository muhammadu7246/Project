<?php
error_reporting('0');
session_start();
include '../connection/connection.php';
// include'';
$fetch = $_GET["fetch"];
// include('../../');
?>


<?php
$fetchData = "SELECT * FROM groups WHERE group_id = '$fetch' LIMIT 1";
$fetchDataResult = mysqli_query($conn, $fetchData);
if (mysqli_num_rows($fetchDataResult) > 0) {
    while ($row = mysqli_fetch_assoc($fetchDataResult)) {
        $group_name = $row["group_name"];
        $group_id = $row["group_id"];
    }
} else {
    // Handle case where no data is fetched
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Group: Group Messaging</title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo/favicon.png" />

    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="../../assets/css/feather.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style type="text/css">
         Desktop Responsive 
        @media only screen and (min-width: 940px) {
            .con-div-1 {
                height: 100vh;
                width: 100%;
                 background-color: #3f51b5; 
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .con-div-1-1-1-2 {
                 overflow: hidde  n; 
                margin: 0;
                padding: 0;
                 overflow : hidden; 
            }

            .con-div-1-1 {
                height: 100vh;
                width: 60%;
                 background-color: #ffffff; 
                 border-radius: 10px; 
                scrollbar: hidden;
            }

            .con-div-1-1-1 {
                height: 100vh;
                width: 75%;
                 background-color: ; 
                float: left;
            }

            .con-div-1-1-1-1 {
                height: 10vh;
                width: 100%;
                 background-color: ; 
                 border-bottom: 1px solid #dbdbdb; 
            }

            .con-div-1-1-1-2 {
                height: 10vh;
                width: 100%;
                 background-color: #f2f2f2; 
                 border-right: 1px solid #dbdbdb; 
                overflow-x: scroll;
            }

            .con-div-1-1-1-3 {
                height: 10vh;
                width: 100%;
                 background-color: #ffffff; 
                bottom: 0;
                display;
                flex;
                align-items: center;
                justify-content: center;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }

            .con-div-1-1-2 {
                height: 10vh;
                width: 25%;
                 background-color: #ffffff; 
                float: right;
                border-top-right-radius: 8px;
            }

            .con-div-1-1-2-1 {
                height: 10vh;
                width: 100%;
                background-color: ;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .topicName {
                padding: 25px 75px;
                 color: grey; 
            }

            .onlineUser_p {
                 color: grey; 
            }

            .inputContainer {
                margin-left: 60px;
            }

            input[type=text] {
                padding: 7.5px;
                height: 30px;
                width: 80%;
                margin: 10px auto;
                border-radius: 20px;
                 border: 1px solid #bbbbbb; 
            }
        }

         Mobile Responsive 
        @media only screen and (max-width: 940px) {
            .con-div-1 {
                height: 0vh;
                 width: 100%; 
                 background-color: #3f51b5; 
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .con-div-1-1 {
                height: 0vh;
                width: 100%;
                 background-color: #e3e8ff; 
                text-align: center;
            }

            .con-div-1-1-1 {
                height: 100vh;
                width: 100%;
                 background-color: ; 
                float: left;
            }

            .con-div-1-1-1-1 {
                height: 10vh;
                width: 100%;
                 background-color: ; 
                 border-bottom: 1px solid #dbdbdb; 
                text-align: left;
                 border-bottom-left-radius: 8px; 
                 border-bottom-right-radius: 8px; 
            }

            .con-div-1-1-1-2 {
                height: 80vh;
                width: 100%; 
                 background-color: #f2f2f2; 
                 border-right: 1px solid #dbdbdb; 
                overflow-x: scroll; 
            }

            .con-div-1-1-1-3 {
                height: 10vh;
                width: 100%;
                 background-color: #ffffff; 
                bottom: 0;
                display;
                flex;
                align-items: center;
                justify-content: center;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }

            .con-div-1-1-2 {
                height: 100vh;
                width: 0%;
                 background-color: #ffffff; 
                float: right;
                border-top-right-radius: 8px;
            }

            .con-div-1-1-2-1 {
                height: 10vh;
                width: 100%;
                background-color: ;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .topicName {
                padding: 25px 10px;
                 color: grey; 
            }

            .onlineUser_p {
                display: none;
            }

            .inputContainer {
                margin-left: 10px;
            }

            input[type=text] {
                padding: 7.5px;
                height: 30px;
                width: 280px;
                margin: 10px auto;
                border-radius: 20px;
                 border: 1px solid #bbbbbb; 
            }
        }

         Mobile Styles 
        @media (max-width: 768px) {
            .side-menu {
                display: none;
            }

            .mobile-menu {
                background-color: #fff;
                padding: 10px;
                box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1);
                z-index: 10;
            }

            .layout-content {
                padding: 15px;
            }

            .chat-header .avatar {
                margin-right: 10px;
            }

            .chat-header .info h6 {
                font-size: 16px;
            }

            .chat-action {
                display: none;
            }
        }

         Desktop Styles 
        @media (min-width: 769px) {
            .mobile-menu {
                display: none;
            }

            .layout-content {
                padding: 30px;
            }

            .chat-action {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="container">

    </div>
    <main class="main-layout">
        <div class="layout-wrapper">

            <div class="side-menu">
                <div class="nav-brand">
                    <a class="logo" href="../../home.php">

                        <img src="../../assets/img/logo/favicon.png" alt="logo" /></a>
                </div>

                <ul class="nav flex-column nav-pills mb-3" role="tablist">
                    <div id="usama">
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Chat">
                            <a href="../../home.php" class="nav-link active" id="pills-sm-tab1" data-bs-toggle="pill"
                                data-bs-target="#pills-sm1" role="tab" aria-controls="pills-sm1" aria-selected="true">
                                <i class="feather-message-circle icon"></i><span class="nav-active-shape"></span>
                            </a>
                        </li>

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Friends">
                            <a href="../../home.php" class="nav-link" id="pills-sm-tab3" data-bs-toggle="pill"
                                data-bs-target="#pills-sm3" role="tab" aria-controls="pills-sm3" aria-selected="false">
                                <i class="feather-users icon"></i><span class="nav-active-shape"></span>
                            </a>
                        </li>

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="group">
                            <a href="../../home.php" class="nav-link" id="pills-sm-tab4" data-bs-toggle="pill"
                                data-bs-target="#pills-sm4" role="tab" aria-controls="pills-sm4" aria-selected="false">
                                <i class="feather-users icon"></i><span class="nav-active-shape"></span>
                            </a>
                        </li>

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                            <a href="../../home.php" class="nav-link" id="pills-sm-tab5" data-bs-toggle="pill"
                                data-bs-target="#pills-sm5" role="tab" aria-controls="pills-sm5" aria-selected="false">
                                <i class="feather-user icon"></i><span class="nav-active-shape"></span>
                            </a>
                        </li>

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Help">
                            <a href="../../home.php" class="nav-link" id="pills-sm-tab7" data-bs-toggle="pill"
                                data-bs-target="#pills-sm7" role="tab" aria-controls="pills-sm7" aria-selected="false">
                                <i class="feather-help-circle icon"></i><span class="nav-active-shape"></span>
                            </a>
                        </li>
                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Login">
                            <a href="login.html" class="nav-link"><i class="feather-lock icon"></i></a>
                        </li>
                        <script>
                            // Assuming you have a button with the id "myButton"
                            const myButton = document.getElementById('usama');

                            myButton.addEventListener('click', () => {
                                // Replace 'newPage.html' with the actual path to your new page
                                window.location.href = '../../home.php';
                            });

                        </script>
                    </div>
                </ul>

                <div class="account">
                    <div class="color-mode theme-mode-control">
                        <a href="#" class="light-btn" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Light"><i class="feather-sun"></i></a>
                        <a href="#" class="dark-btn" data-bs-toggle="tooltip" data-bs-placement="right" title="Dark"><i
                                class="feather-moon"></i></a>
                    </div>

                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar">
                                <img src="<?php echo $folder; ?>" alt />
                                <span class="status online"></span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="login.html"><i class="feather-log-in"></i>Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="register.html"><i
                                        class="feather-user-plus"></i>Register</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="forgot-password.html"><i class="feather-key"></i>Forgot
                                    Password</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="lock-screen.html"><i class="feather-lock"></i>Lock
                                    Screen</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="feather-log-out"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="layout-content active">
                <div class="chat-box">
                    <div class="container">
                        <div class="chat-wrap">
                            <div class="chat-header">
                                <div class="layout-content-btn">
                                    <button type="button"><i class="far fa-xmark"></i></button>
                                </div>
                                <a href="#" class="chat-user" data-bs-toggle="offcanvas" data-bs-target="#chatUserMore"
                                    aria-controls="chatUserMore">
                                    <div class="avatar">
                                        <!-- <img src="assets/img/account/02.jpg" alt /> -->
                                        <span class="status online"></span>
                                    </div>
                                    <div class="info">
                                        <h6><?php echo $group_name; ?></h6>
                                        <span>Avalible</span>
                                    </div>
                                </a>
                                <div class="chat-action">
                                    <ul class="list">
                                        <li>
                                            <div class="dropdown">
                                                <button type="button" class="action-btn" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="feather-more-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">

                                                    <li>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="feather-trash-2"></i>Delete Chat</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider" />
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="scrollbar-wrap  bottom-scroll">
                                <div class="chat-content">
                                    <div class="message-list">

                                        <div class="con-div-1-1-1-1">
                                        </div>
                                        <div class="con-div-1-1-1-2">
                                            <span class="loadText"></span>
                                        </div>
                                        <div class="con-div-1-1-1-3">
                                            <span class="inputContainer">

                                        </div>
                                        <div class="form-group">

                                            <input id="chat" type="text" required name="chat" class="form-control"
                                                placeholder="Type your message..." />

                                        </div>
                                        <div class="send-btn">
                                            <button id="sendChat" type="submit" style="background-colur: transperent;"
                                                name="submit">
                                                <i class="feather-send"></i>
                                            </button>
                                        </div>


                                        </span>
                                        <input id="topic_id" type="hidden" name="" value="<?php echo $group_id; ?>">
                                        <input id="null1" type="hidden" name="" value="1">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
        </div>
        </div>
        </div>

        </div>
    </main>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>

<audio id="buzzer" src="../assets/sent.mp3" type="audio/ogg"></audio>

</html>
<script type="text/javascript">
    $('document').ready(function () {

        $('#sendChat').click(function () {

            var chat = $("#chat").val();
            var topic_id = $("#topic_id").val();

            if (chat == "") {
                $('#chat').css({
                    // "border-color": "#fa4d4d",
                    // "border-width": "1px",
                    // "border-style": "solid"
                });

                setTimeout(function () {
                    $('#chat').css({
                        // "border-color": "#bbbbbb",
                        // "border-width": "1px",
                        // "border-style": "solid"
                    });
                }, 2000);

                return false;
            } else {
                var dataString1 = 'chat=' + chat + '&topic_id=' + topic_id;
                $.ajax({
                    type: 'POST',
                    data: dataString1,
                    url: '../admin/chats/serv-chats.php',
                    success: function (data) {
                        $('#textStatus_msg').append(data);
                        $('#chat').val('');
                        $('#buzzer').get(0).play();
                    }
                });
            }
        });

        $('#chat').keypress(function (e) {
            if (e.which == 13) { // Enter key pressed
                $('#sendChat').click(); // Trigger search button click event
            }
        });

        (function loadText() {
            var topic_id = $("#topic_id").val();
            var dataString2 = 'topic_id=' + topic_id + '&null1=' + null1;
            $.ajax({
                type: 'POST',
                data: dataString2,
                url: '../app/chats/group-fetch-text.php',
                success: function (data) {
                    $('.loadText').html(data);
                },
                complete: function () {
                    setTimeout(loadText, 1000);
                }
            });
        })();

    });
</script>