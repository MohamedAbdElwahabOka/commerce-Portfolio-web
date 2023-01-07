<?php
   $mysqli = require __DIR__ . "/database.php";  // connect to database
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>

<style>

*
{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
:root {
    --main-color: #222831;
    --main-color-alt: #52C3CC;
    --main-color-text: #EEEEEE;
    --main-transition: 0.3s;
    /* --section-background: #ececec; */
}
body
{
    height: 100vh;
    width: 100%;
    display: grid;
    place-items: center;
    background: #222831;
}
#container
{
    height: auto;
    width: 450px;
    background: #EEEEEE;
    padding: 25px;
    border-radius: 5px;
    position: relative;
    box-shadow: -2px 2px 12px rgba(0,0,0,0.3);
}
#container h2
{
    font-size: 40px;
}
#container p
{
    padding: 6px 0 5px 0;
    font-size: 18px;
    /* color: #EEEEEE; */
}
#container #line
{
    height: 1px;
    width: 100%;
    background: #52C3CC;
    margin: 10px 0 20px 0;
}
#alert
{
    height: auto;
    width: 100%;
    background: #52C3CC;
    padding: 0 15px;
    font-size: 19px;
    line-height: 40px;
    margin: 10px 0;
    color: #000;
    border-radius: 4px;
}
#container input
{
    height: 40px;
    width: 99%;
    margin: 5px 0;
    border: 1px solid #52C3CC;
    font-size: 15px;
    background: #f5f6f7;
    outline: none;
    border-radius: 6px;
    padding: 0px 12px;
}
#container input[type="submit"]
{
    height: 45px;
    border: none;
    background: #52C3CC;
    color: #fff;
    font-size: 20px;
    margin: 5px 0;
    cursor: pointer;
}
</style>
</head>
<body>
    <div id="container">
        <h2>Email Check</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="forgetphp.php" method="POST" autocomplete="off">
       
            <input type="email" name="email" placeholder="Email"><br><br>
            <input type="submit" name="forgot_password" value="Check">
        </form>
    </div>
</body>

</html>
