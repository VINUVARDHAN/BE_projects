<html>
    <head><title>TABLE
    </title>
    <link rel="stylesheet" href="stylephp.css">
    

    </head>
</html>


<?php
$con=mysqli_connect("localhost","root","","lib");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM estaff");

echo "<table border='1'>
<tr>
<th>USERNAME</th>
<th>Email</th>
<th>PASSWORD</th>
<th>ADDRESS</th>
<th>PHONE NO</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['pass'] . "</td>";
echo "<td>" . $row['address_of_staff'] . "</td>";
echo "<td>" . $row['Phone_no'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>