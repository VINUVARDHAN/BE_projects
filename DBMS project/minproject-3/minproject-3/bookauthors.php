<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>
<?php
$conn =mysqli_connect('localhost','root','','lib');


$aname =$_POST['aname'];
$bookid  =$_POST['bookid'];


$sql = "INSERT INTO `ebookauthor`(`A_NAME`,`BOOK_ID`) 
VALUES ('$aname','$bookid') ";

$rs = mysqli_query($conn,$sql);
if($rs)
{
    echo " <h1>THE DETAILS ARE INSERTED SUCCESSFULLY</h1> ";
}
else{
    echo "<h1>details cannot be inserted</h1>";
}
?>
<h4>
    <a href="bookauthor.html">BACK</a>
</h4>

</body>

</html>