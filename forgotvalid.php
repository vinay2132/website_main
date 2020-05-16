<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'test2');
$email = $_POST['email'];
$s = "select * from signindetailss where email = '$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    $to = $email;
          $subject ="email varification";
          $message = "<h1>RoboKalam literature of robotics.</h1>";
          $message .= "<h4>Hi myfriend, </h4><br>";
          $message .= "<h4>Greetings from RoboKalam ! We welcome you aboard the RoboKalam community !</h4>";
          $message .="<h4>Click the button below to confirm your email address. This is the email address on which your profile will be created</h4>";
          $message .= "<a href='http://localhost/pp/website1.0/forgotpasword.html'>register account</a>";
          $headers ="from:vinayd.vef@gmail.com\r\n";
          $headers .="MIME-Version:1.0"."\r\n";
          $headers .="Content-type:text/html;charset=UTF-8"."\r\n";
          mail($to,$subject,$message,$headers);
          header('location:thanks.html');

}
else{
    echo '<script>alert("Sorry this email donot exist")</script>';
}
