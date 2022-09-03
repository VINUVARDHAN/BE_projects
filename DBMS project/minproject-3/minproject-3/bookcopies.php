<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>

<?php


$conn =mysqli_connect('localhost','root','','lib');

$noofcopy   =$_POST['noofcopy'];
$bookid    =$_POST['bookid'];
$branchid  =$_POST['branchid'];


$sql = "INSERT INTO `ebookcopy`(`NO_OF_COPY`,`BOOK_ID`,`BRANCH_ID`)
VALUES ('$noofcopy','$bookid','$branchid')";

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
    <a href="bookcopy.html">BACK</a>
</h4>

</body>

</html>