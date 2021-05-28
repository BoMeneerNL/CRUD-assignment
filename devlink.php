<?php
echo('
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLinks</title>
</head>
<body>
    <p><a href="index?serve=hp">Index (Serve_Homepage)</a></p>
    <p><a href="index?serve=hp&lang=nl">Index (Serve_Homepage,lang=nl)</a></p>
    <p><a href="index?serve=hp&lang=en">Index (Serve_Homepage,lang=en)</a></p>
    <p><a href="login">Login</a></p>
    <p><a href="login?lang=nl">Login (lang=nl)</a></p>
    <p><a href="login?lang=en">Login (lang=en)</a></p>
    <p><a href="register">register page (Step 1)</a></p>
    <p><a href="register?lang=nl">register page (Step 1,lang=nl)</a></p>
    <p><a href="register?lang=en">register page (Step 1,lang=en)</a></p>
</body>
</html>
');