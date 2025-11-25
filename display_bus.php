<?php
$con = mysqli_connect("localhost", "root", "", "bus_management");
$result = mysqli_query($con, "SELECT * FROM buses");
?>

<h2>All Bus Records</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Bus No</th>
    <th>Route</th>
    <th>Driver</th>
    <th>Phone</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['bus_id']."</td>";
    echo "<td>".$row['bus_no']."</td>";
    echo "<td>".$row['route']."</td>";
    echo "<td>".$row['driver_name']."</td>";
    echo "<td>".$row['driver_phone']."</td>";
    echo "</tr>";
}
?>
</table>
