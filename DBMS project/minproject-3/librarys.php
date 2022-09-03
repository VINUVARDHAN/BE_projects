<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>

<?php


$conn =mysqli_connect('localhost','root','','lib');

$branchid   =$_POST['branchid'];
$branchname    =$_POST['branchname'];
$Address  =$_POST['Address'];


$sql = "INSERT INTO `elibrary`(`BRANCH_ID`,`BRANCH_NAME`,`ADdress`)
VALUES ('$branchid','$branchname','$Address')";

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
    <a href="library.html">BACK</a>
</h4>

</body>

</html>