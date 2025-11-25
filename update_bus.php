<h2>Update Driver Phone Number</h2>

<form method="POST">
    Bus ID: <input type="number" name="bus_id" required><br><br>
    New Phone: <input type="text" name="driver_phone" required><br><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if(isset($_POST['update'])) {

    $con = mysqli_connect("localhost", "root", "", "bus_management");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = intval($_POST['bus_id']); // ensure it’s a number
    $phone = mysqli_real_escape_string($con, $_POST['driver_phone']); // sanitize input

    $sql = "UPDATE buses SET driver_phone='$phone' WHERE bus_id=$id";

    if(mysqli_query($con, $sql)){
        echo "<br>Record Updated Successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
