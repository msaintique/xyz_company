<?php
$conn=mysqli_connect("localhost","root","","form");
if($conn){
    echo "signup success";
}else{
    echo "failed";
}
    $email=$_POST['email'];
    $password=$_POST['password'];
$sql=mysqli_query($conn,"SELECT email,password FROM wallet WHERE email='$email' and password='$password'");
$count=mysqli_num_rows($sql);
header('location:money.html');

 

?>