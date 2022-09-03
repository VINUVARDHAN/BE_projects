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

$result = mysqli_query($con,"SELECT * FROM epublisher");

echo "<table border='1'>
<tr>
<th>name</th>
<th>phone no</th>
<th>address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Pname'] . "</td>";
echo "<td>" . $row['phone_no'] . "</td>";
echo "<td>" . $row['P_address'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

