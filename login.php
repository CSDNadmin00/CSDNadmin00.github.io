<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博客登入</title>
    <script type="text/javascript" src="js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php include "sql/login_check.php" ?>
    <canvas id="canvas"></canvas>
    <form action="" method="POST" id="box">
<!--    <div id="box">-->
        <div></div>
        <div>
            <div><h2>欢迎来到我的博客</h2></div>
            <div>
                <div></div>
                <input type="text" name="username" placeholder="Username" />
            </div>
            <div>
                <div></div>
                <input type="password" name="password" placeholder="Password"/>
            </div>
            <input type="submit" value="登入" id="submits"><br/><br/>
            <div id="event"><a href="">忘记密码</a>&nbsp;&nbsp;<a href="register.php">注册</a></div>
        </div>
<!--    </div>-->
    </form>
</body>
</html>
