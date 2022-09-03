
<html>
    <head>
    <title>quries</title>
    <link rel="stylesheet" href="css/query2.css">
    </head>
    <body>
        
<?php
$con=mysqli_connect("localhost","root","","lib");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "<h1>SOME INFORMATION REGARDING THE TOTALS</h1>";

// some quries
$result1 = mysqli_query($con,"SELECT COUNT(DISTINCT TITLE) AS total1
 FROM ebook");
$row1 = mysqli_fetch_assoc($result1);
echo '<h2>1} Total no of books are</h2>';
echo "<h2>".$row1['total1']."</h2>";

$result2 = mysqli_query($con,"SELECT COUNT(DISTINCT Pname) AS total2
 From epublisher");
$row2 = mysqli_fetch_assoc($result2);
echo '<h2>2} Total no of Publishers are</h2>';
echo "<h2>".$row2['total2']."</h2>";

$result3 = mysqli_query($con,"SELECT COUNT(DISTINCT `A_NAME`) AS total3
 From ebookauthor");
$row3 = mysqli_fetch_assoc($result3);
echo '<h2>3} Total no of Authors are</h2>';
echo "<h2>".$row3['total3']."</h2>";



mysqli_close($con);
?>
    </body>
</html>
