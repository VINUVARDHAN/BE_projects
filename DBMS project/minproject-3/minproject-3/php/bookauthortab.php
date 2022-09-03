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

$result = mysqli_query($con,"SELECT * FROM ebookauthor");

echo "<table border='1'>
<tr>
<th>AUTHOR NAME</th>
<th>BOOK ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['A_NAME'] . "</td>";
echo "<td>" . $row['BOOK_ID'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
