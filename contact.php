<?php
$name = $_POST['uname'];
$number = $_POST['number'];
$email  = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

$conn = mysqli_connect("localhost","root","","project");
$sql ="INSERT INTO user_db(name,number,email,password,message) values ('$name','$number','$email','$password','$message')";
$r=mysqli_query($conn,$sql);

if($r)
{
    echo 'successfully submit';
}
else{
    echo 'Not submitted';
}

?>