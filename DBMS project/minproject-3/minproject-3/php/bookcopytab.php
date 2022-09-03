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

$result = mysqli_query($con,"SELECT * FROM ebookcopy");

echo "<table border='1'>
<tr>
<th>NO OF COPIES</th>
<th>BOOK ID</th>
<th>BRANCH ID</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['NO_OF_COPY'] . "</td>";
echo "<td>" . $row['BOOK_ID'] . "</td>";
echo "<td>" . $row['BRANCH_ID'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>