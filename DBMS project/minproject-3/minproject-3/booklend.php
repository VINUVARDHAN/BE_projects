<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>

<?php


$conn =mysqli_connect('localhost','root','','lib');

$branchid   =$_POST['cardno'];
$branchname   =$_POST['email'];
$Address  =$_POST['PASSWORD'];
$Address1  =$_POST['address'];
$Address2  =$_POST['phone'];


$sql = "INSERT INTO `ebooklend`(`date_out`,`due_date`,`book_id`,`branch_id`,`cardno`)
VALUES ('$branchid','$branchname','$Address','$Address1','$Address2')";

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
    <a href="booklend.html">BACK</a>
</h4>

</body>

</html>