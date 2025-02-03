<?php
// Ensure session is started and the database connection is included
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create the form to add a new screen
    ?>
    <form id="add-screen-form">
        <div class="form-group">
            <label style="color: #ffff;" for="sname">Screen Name:</label>
            <input type="text" id="sname" name="name" class="form-control" placeholder="Screen Name" required>
        </div>
        <div class="form-group">
            <label style="color: #ffff;" for="sseats">Seats:</label>
            <input type="number" id="sseats" name="seats" class="form-control" placeholder="Seats" required>
        </div>
        <div class="form-group">
            <label style="color: #ffff;" for="scharge">Charge:</label>
            <input type="number" id="scharge" name="charge" class="form-control" placeholder="Charge" required>
        </div>
        <button style="color: #ffff;" type="button" id="savescreen" class="btn btn-primary">Save</button>
    </form>
    <?php
}
?>
