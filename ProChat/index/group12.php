<audio id="buzzer" src="../assets/sent.mp3" type="audio/ogg"></audio>    

    <?php 
        $fetchData = "SELECT * FROM groups WHERE group_id = '$fetch' LIMIT 1";
        $fetchDataResult = mysqli_query($conn, $fetchData);
        if (mysqli_num_rows($fetchDataResult) > 0) {
            while($row = mysqli_fetch_assoc($fetchDataResult)) {
                $group_name = $row["group_name"];
                $group_id = $row["group_id"];
            }
        } else {
            // Handle case where no data is fetched
        }
    ?>

    <div class="con-div-1">
        <div class="con-div-1-1">
            <div class="con-div-1-1-1">
                <div class="con-div-1-1-1-1">
                    <h3 class="topicName"><?php echo $group_name; ?></h3>
                </div>
                <div class="con-div-1-1-1-2">
                    <span class="loadText"></span>
                </div>
                <div class="con-div-1-1-1-3">
                    <span class="inputContainer">
                        <input id="chat" type="text" name="chat" placeholder="Send...">
                        <button id="sendChat" style="border: none; background-color: #ffffff; cursor: pointer;">
                            <i style="font-size: 22px; color: #ff5722;" class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </span>
                    <input id="topic_id" type="hidden" name="" value="<?php echo $group_id; ?>">
                    <input id="null1" type="hidden" name="" value="1">
                </div>
            </div>
            <div class="con-div-1-1-2">
                <span id="textStatus_msg"></span>
                <div class="con-div-1-1-2-1">
                    <p class="onlineUser_p">Online users</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $('document').ready(function(){

        $('#sendChat').click(function(){

            var chat = $("#chat").val(); 
            var topic_id = $("#topic_id").val(); 

            if (chat == "") {
                $('#chat').css({
                    "border-color": "#fa4d4d", 
                    "border-width": "1px", 
                    "border-style": "solid"
                });

                setTimeout(function() {
                    $('#chat').css({
                        "border-color": "#bbbbbb", 
                        "border-width": "1px", 
                        "border-style": "solid"
                    });
                }, 2000);

                return false;
            } else {
                var dataString1 = 'chat=' + chat + '&topic_id=' + topic_id;
                $.ajax({
                    type: 'POST',
                    data: dataString1,
                    url: '../admin/chats/serv-chats.php',
                    success: function(data) {
                        $('#textStatus_msg').append(data);
                        $('#chat').val('');
                        $('#buzzer').get(0).play();
                    }
                });
            }
        });

        $('#chat').keypress(function(e){
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
                success: function(data) {
                    $('.loadText').html(data);
                },
                complete: function() {
                    setTimeout(loadText, 2000);
                }
            });
        })();

    });
</script>
