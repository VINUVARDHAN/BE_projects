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

$result = mysqli_query($con,"SELECT * FROM ebook");

echo "<table border='1'>
<tr>
<th>BOOK ID</th>
<th>TITLE</th>
<th>PUB-YEAR</th>
<th>PUB-NAME</th>
<th>OPERATION</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BOOK_ID'] . "</td>";
echo "<td>" . $row['TITLE'] . "</td>";
echo "<td>" . $row['PUB_YEAR'] . "</td>";
echo "<td>" . $row['PUB_NAME'] . "</td>";
echo "<td><a href='deletebook.php?rn=$row[TITLE]'>Delete</a></td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
