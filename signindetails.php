<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'test2');
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$psw = $_POST['psw'];
$pswrep = $_POST['pswrep'];
$s = "select * from signindetailss where email = '$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($psw == $pswrep ){
if($num == 1){
     echo '<script>alert("Someone already register using this email")</script>';
     //echo "<meta http-equiv='refresh' content='0; url=contact.html' />";
}
else{
     $vkey =md5(time().$email);
     $psw =md5($psw);
     $reg = "INSERT Into signindetailss (username,email,phone,psw,vkey) values('$username','$email','$phone','$psw','$vkey')";
     mysqli_query($con,$reg);
     if($reg){
          echo '<script>alert("New record inserted sucessfully")</script>';
          $to = $email;
          $subject ="email varification";
          $message = "<h1>RoboKalam literature of robotics.</h1>";
          $message .= "<h4>Hi myfriend, </h4><br>";
          $message .= "<h4>Greetings from RoboKalam ! We welcome you aboard the RoboKalam community !</h4>";
          $message .="<h4>Click the button below to confirm your email address. This is the email address on which your profile will be created</h4>";
          $message .= "<a href='http://localhost/pp/website1.0/varified.php?vkey=$vkey'>register account</a>";
          $headers ="from:vinayd.vef@gmail.com\r\n";
          $headers .="MIME-Version:1.0"."\r\n";
          $headers .="Content-type:text/html;charset=UTF-8"."\r\n";
          mail($to,$subject,$message,$headers);
          header('location:thanks.html');

     }
}
}
else{
     echo'<script>alert("pasword and repeart pasword where not same. Please try again!")</script>';
     echo "<meta http-equiv='refresh' content='0; url=signin.html' />";
} 

?>
