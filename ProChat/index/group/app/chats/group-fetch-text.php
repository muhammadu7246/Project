<?php
session_start();
error_reporting('0');
// error_reporting(0);
include '../../connection/connection.php';
$topic_id = $_POST["topic_id"];
$sess_sender_id = $_SESSION["user_code"];
?>

<?php
$fetchData = "SELECT * FROM chats WHERE receiver_id = '$topic_id'";
$fetchDataResult = mysqli_query($conn, $fetchData);
if (mysqli_num_rows($fetchDataResult) > 0) {
  while ($row = mysqli_fetch_assoc($fetchDataResult)) {

    $text_id = $row["text_id"];
    $txt = $row["txt"];
    $sender_id = $row["sender_id"];
    ?>

    <?php
    if ($sender_id == $sess_sender_id) {
      ?>
      <div class="sender1" style="">

      </div>
      <div class="message-item message-self">
        <div class="message-user">
          <div class="avatar">
            <!-- <img src="assets/img/account/08.jpg" alt /> -->
          </div>
        </div>
        <div class="message-wrap">
          <div class="message-content">
            <div class="message-info">
              <div class="message-text">
                <div class="message-time">
                </div>
                <p>
                  <?php echo $txt; ?>
                </p>
              </div>
              <div class="message-action">
                <div class="dropdown">
                  <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="feather-more-vertical"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#"><i class="feather-copy"></i>Copy</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><i class="feather-corner-up-right"></i>Forward</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"><i class="feather-trash-2"></i>Remove</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
    } else {
      ?>

      <div class="receiver1" style="">
        <div class="message-item">
          <div class="message-user">
            <div class="avatar">
              <!-- <img src="assets/img/account/02.jpg" alt /> -->
            </div>
          </div>
          <div class="message-wrap">
            <div class="message-content">
              <div class="message-info">
                <div class="message-text">
                  <div class="message-time">
                    <!-- <i class="far fa-check-d ouble success"></i> -->

                  </div>
                  <p>
                    <?php echo $txt; ?>
                  </p>
                </div>
                <div class="message-action">
                  <div class="dropdown">
                    <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="feather-more-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#"><i class="feather-copy"></i>Copy</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="feather-corner-up-right"></i>Forward</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider" />
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"><i class="feather-trash-2"></i>Remove</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
    }
    ?>

    <?php
  }
} else {
}
?>