<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
</head>
<body>

<?php


$conn =mysqli_connect('localhost','root','','lib');

$username  =$_POST['cardname'];
$pass  =$_POST['num'];




$sql = "INSERT INTO `ecard`(`card_name`,`card_id`)
VALUES ('$username','$pass')";

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
    <a href="ecard.html">BACK</a>
</h4>

</body>

</html>