<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>
<?php
$conn =mysqli_connect('localhost','root','','lib');


$name =$_POST['name'];
$PhNo  =$_POST['PhNo'];
$Address=$_POST['Address'];

$sql = "INSERT INTO `epublisher`(`Pname`,`phone_no`,`P_address`) 
VALUES ('$name','$PhNo','$Address') ";

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
    <a href="publisher.html">BACK</a>
</h4>

</body>

</html>