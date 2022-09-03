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

$result = mysqli_query($con,"SELECT * FROM elibrary");

echo "<table border='1'>
<tr>
<th>BRANCH ID</th>
<th>BRANCH NAME</th>
<th>ADDRESS</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BRANCH_ID'] . "</td>";
echo "<td>" . $row['BRANCH_NAME'] . "</td>";
echo "<td>" . $row['ADdress'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
