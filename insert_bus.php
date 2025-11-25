<!DOCTYPE html>
<html>
<head>
<title>Insert Bus</title>
</head>
<body>

<h2>Add Bus Details</h2>

<form method="POST">
    Bus No: <input type="text" name="bus_no"><br><br>
    Route: <input type="text" name="route"><br><br>
    Driver Name: <input type="text" name="driver_name"><br><br>
    Driver Phone: <input type="text" name="driver_phone"><br><br>

    <input type="submit" name="submit" value="Add Bus">
</form>

<?php
if(isset($_POST['submit'])) {

    $con = mysqli_connect("localhost", "root", "", "bus_management");

    $bus_no = $_POST['bus_no'];
    $route = $_POST['route'];
    $driver_name = $_POST['driver_name'];
    $driver_phone = $_POST['driver_phone'];

    $sql = "INSERT INTO buses (bus_no, route, driver_name, driver_phone)
            VALUES ('$bus_no', '$route', '$driver_name', '$driver_phone')";

    mysqli_query($con, $sql);

    echo "<br>Bus Added Successfully!";
}
?>

</body>
</html>
