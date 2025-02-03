<?php include ('conn.php') ?>
<div class="side-menu-content">
    <div class="side-menu-header">
        <h2 class="title">Groups</h2>
        <div class="contact-invite">
            <a href="#" class="theme-btn" data-bs-toggle="modal" data-bs-target="#contactInvite"><span
                    class="feather-user-plus"></span>Create
                Group</a>
        </div>
    </div>

    <div class="side-menu-search">
        <form action="#">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search contacts" />
                <span class="input-group-text"><i class="feather-search"></i></span>
            </div>
        </form>
    </div>

    <div class="contact-list scrollbar-wrap">
        <div class="contact-list-wrap">
            <?php
            $queryData = "SELECT * FROM groups LIMIT 10";
            $queryDataResult = mysqli_query($conn, $queryData);

            if (mysqli_num_rows($queryDataResult) > 0) {
                while ($row = mysqli_fetch_assoc($queryDataResult)) {
                    $topic_id = $row["group_id"];
                    $topic_name = $row["group_name"];
                    $created_by = $row["created_by"];
                    $userData = "SELECT * FROM users WHERE user_code = '$created_by' LIMIT 1";
                    $userDataResult = mysqli_query($conn, $userData);

                    if (mysqli_num_rows($userDataResult) > 0) {
                        while ($row = mysqli_fetch_assoc($userDataResult)) {
                            $userDataUsername = $row["username"];
                            $userDataAvatar = $row["avatar"];
                        }
                    }
                    ?>
                    <div class='item'>
                        <a href='app/group.php?fetch=<?php echo $topic_id; ?>' class='avatar'>
                            <img src='$folder' alt />
                            <span class='status away'></span>
                        </a>
                        <div class='info'>
                            <h6 class='title'>
                                <a href='app/group.php?fetch=<?php echo $topic_id; ?>'><?php echo $topic_name; ?></a>
                            </h6>
                        </div>
                        <div class='action'>
                            <div class='dropdown'>
                                <button type='button' class='icon' data-bs-toggle='dropdown' aria-expanded='false'>
                                    <i class='feather-more-vertical'></i>
                                </button>
                                <ul class='dropdown-menu'>
                                    <li>
                                        <a class='dropdown-item' href='#'><i class='feather-share-2'></i>Share</a>
                                    </li>
                                    <li>
                                        <a class='dropdown-item' href='#'><i class='feather-slash'></i>Block</a>
                                    </li>
                                    <li>
                                        <hr class='dropdown-divider' />
                                    </li>
                                    <li>
                                        <a class='dropdown-item' href='#'><i class='feather-trash-2'></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><?php
                }
            } else {
                // Handle case when there are no topics
            }
            ?>
        </div>
    </div>
</div>

</div>
</div>
</div>