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

$result = mysqli_query($con,"SELECT * FROM ebooklend");

echo "<table border='1'>
<tr>
<th>DATE-OUT</th>
<th>DUE-DATE</th>
<th>Book-ID</th>
<th>BRANCH-ID</th>
<th>CARD-NO</th>
<th>OPERATION</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['date_out'] . "</td>";
echo "<td>" . $row['due_date'] . "</td>";
echo "<td>" . $row['book_id'] . "</td>";
echo "<td>" . $row['branch_id'] . "</td>";
echo "<td>" . $row['cardno'] . "</td>";
echo "<td><a href='deletebooklend.php?rn=$row[cardno]'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>