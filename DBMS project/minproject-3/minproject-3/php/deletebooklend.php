<html>
    <head><title>TABLE
    </title>
    <link rel="stylesheet" href="booklend.css">
    </head>
</html>


<?php
$con=mysqli_connect("localhost","root","","lib");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$CARDNO = $_GET['rn'];
$query = "DELETE FROM ebooklend WHERE cardno = '$CARDNO'";
$data = mysqli_query($con,$query);
if($data)
{
    echo "<h2>Record deleted from database</h2>";
}
else
{
    echo "<h2>Record failed to delete from database</h2>";
}
echo "<a href='booklendtab.php'>---BACK---</a>";
mysqli_close($con);
?>