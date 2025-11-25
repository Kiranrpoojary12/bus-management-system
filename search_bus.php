<h2>Search Bus By Bus Number</h2>

<form method="POST">
    Enter Bus No: <input type="text" name="bus_no">
    <input type="submit" name="search" value="Search">
</form>

<?php
if(isset($_POST['search'])) {

    $bus_no = $_POST['bus_no'];

    $con = mysqli_connect("localhost", "root", "", "bus_management");

    $result = mysqli_query($con, "SELECT * FROM buses WHERE bus_no='$bus_no'");

    echo "<br><h3>Result:</h3>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "Route: ".$row['route']."<br>";
        echo "Driver: ".$row['driver_name']."<br>";
        echo "Phone: ".$row['driver_phone']."<br>";
    }
}
?>
