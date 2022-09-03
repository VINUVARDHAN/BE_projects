<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>

<?php


$conn =mysqli_connect('localhost','root','','lib');

$bookid   =$_POST['bookid'];
$title    =$_POST['title'];
$pyear  =$_POST['pyear'];
$pname  =$_POST['pname'];

$sql = "INSERT INTO `ebook`(`BOOK_ID`,`TITLE`,`PUB_YEAR`,`PUB_NAME`)
VALUES ('$bookid','$title','$pyear','$pname')";

$rs = mysqli_query($conn,$sql);
if($rs)
{
    echo " <h1>THE DETAILS ARE INSERTED SUCCESSFULLY</h1>";
}
else{
    echo "<h1>details cannot be inserted</h1>";
}

?>
<h4>
    <a href="book.html">BACK</a>
</h4>

</body>

</html>