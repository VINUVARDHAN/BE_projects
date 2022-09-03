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

$result = mysqli_query($con,"SELECT * FROM modification_of_book");

echo "<table border='1'>
<tr>
<th>MODIFICATION ID</th>
<th>TITLE</th>
<th>ACTION</th>
<th>TIME</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Id'] . "</td>";
echo "<td>" . $row['book_name'] . "</td>";
echo "<td>" . $row['eAction'] . "</td>";
echo "<td>" . $row['eTime'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
