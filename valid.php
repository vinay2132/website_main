<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'test2');
$username = $_POST['username'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw =md5($psw);
$s ="select * from signindetailss where email = '$email' && psw='$psw'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo '<script>alert("Thanks for login")</script>';
   echo "<meta http-equiv='refresh' content='0; url=services.html' />";
}
else{
    echo '<script>alert("Incorrect Mailid (or) Password ")</script>';
    echo "<meta http-equiv='refresh' content='0; url=home.html' />";
}

?>
