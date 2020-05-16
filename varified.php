<?php
if(isset($_GET['vkey'])){
    $vkey =$_GET['vkey'];
    $con =mysqli_connect('localhost','root','');
    mysqli_select_db($con,'test2');
    $s = "select * from signindetailss where varified=0 && vkey='$vkey'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        $ss="update signindetailss set varified=1 where vkey = '$vkey'";
        mysqli_query($con,$ss);
        if($ss){
            echo'<script>alert("thanks for logiin")</script> ';
            echo "<meta http-equiv='refresh' content='0; url=index.html' />";

        }
        else{
            echo"error";
        }
    }
    else{
        echo"this account is invalied or alredy varified";
    }
}
else{
    die("somthing went wrong");
}
?>
