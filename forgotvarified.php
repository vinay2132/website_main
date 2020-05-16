<?php
    session_start();
    $con =mysqli_connect('localhost','root','');
    mysqli_select_db($con,'test2');
    $psw = $_POST['psw'];
    $psw =md5($psw);
   /* $s = "select * from signindetailss where varified=1";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){*/
        $ss="update signindetailss set psw = '$psw' where varified = 1";
        mysqli_query($con,$ss);
        if($ss){
            echo'<script>alert("thanks for logiin")</script> ';
            echo "<meta http-equiv='refresh' content='0; url=index.html' />";

        }
        else{
            echo"error";
        }
    /*}
    else{
        echo"this account is invalied or alredy varified";
    }*/
