
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>contact page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="handle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        select:required:invalid {
            color: #666;
        }
        
        option[value=""][disabled] {
            display: none;
        }
        
        option {
            color: #000;
        }
    </style>
    <meta name="google-signin-client_id" content="395673274757-i0m8kqh7eir7n1fb6jvafinf962jn57p.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>

<body>
<?php


ob_start();
if (isset($_POST['submit'])){
if(isset($_GET['vkey'])){
    $vkey =$_GET['vkey'];
    $con =mysqli_connect('localhost','root','');
    mysqli_select_db($con,'test2');
    
    $psw = $_POST['psw'];
    
    
    $psw =md5($psw);
    
        $ss="update signindetailss set psw = '$psw' where vkey = '$vkey' ";
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


    
?>

    <form  style="max-width:500px;margin:auto" method="POST">
        <h2>Please Register </h2>
        <br>
        <br>

        <div class="input-container11">
            <i class="fa fa-unlock-alt icon11"></i>
            <input class="input-field11" type="password" placeholder="Password" name="psw" required>
        </div>


        <button type="submit" name="submit" class="btn11">Register</button>
    </form>
