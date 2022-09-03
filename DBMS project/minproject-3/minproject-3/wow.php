<html>
<head>
    <link rel="stylesheet" href="stylenottab.css">
    <style>
      body{
          background-image:url(images/pic3.jpg);
          transition-duration:3s;
      }
    a{
        text-decoration:none;
    }</style>
</head>
<body>

<?php


$conn =mysqli_connect('localhost','root','','lib');



if(isset($_POST['id']))
{
    $id  = $_POST['id'];
    $password = $_POST['password'];   
    
    $sql = "SELECT * FROM `estaff` WHERE `username`='$id' AND `pass`='$password' limit 1";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs)==1)
{
    echo " <h1>YOU LOGGED IN SUCCESSFULLY</h1>";
    echo "<h2>YOU CAN INSERT OR VIEW THE BOOKS INFORMATION HERE</h2>";
    echo ' <a href="enter.html">----GO---</a>';
    exit();
}
else
{
    echo "<h2>The login details is wrong enter again</h2>";
    echo "<a href='librarian.html'> ---Go Back---</a>";
    exit();
}
}


?>
<h4>
    <a href="card.html">BACK</a>
</h4>

</body>

</html>