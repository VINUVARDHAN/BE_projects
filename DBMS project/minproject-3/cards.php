<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>

<?php


$conn =mysqli_connect('localhost','root','','lib');

$username  =$_POST['cardno'];
$pass  =$_POST['PASSWORD'];
$address  =$_POST['address'];
$phone  =$_POST['phone'];
$email=$_POST['email'];



$sql = "INSERT INTO `estaff`(`username`,`Email`,`pass`,`address_of_staff`,`Phone_no`)
VALUES ('$username','$email','$pass','$address','$phone')";

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
    <a href="card.html">BACK</a>
</h4>

</body>

</html>