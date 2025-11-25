<h2>Delete Bus Record</h2>

<form method="POST">
    Enter Bus ID: <input type="number" name="bus_id" required>
    <input type="submit" name="delete" value="Delete">
</form>

<?php
if(isset($_POST['delete'])) {

    $con = mysqli_connect("localhost", "root", "", "bus_management");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = intval($_POST['bus_id']); // ensure it's a number

    $sql = "DELETE FROM buses WHERE bus_id=$id";

    if(mysqli_query($con, $sql)){
        echo "<br>Bus Deleted Successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
