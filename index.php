<?php
include ('koneksi.php');
?>
<html>
<head>
    <title>Login Data Covid</title>
</head>
<style>
    .wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0);
        padding: 20px;
        width: 270px;
        box-shadow: 0 0 10px 5px black;
    }
           
    form input {
        width: 100%;
        height: 30px;
        border: 1px solid black;
        padding: 8px;
        box-shadow: 0 0 10px 2px black;
        background-attachment: fixed;
        background-size: fixed;
    }

    body {
        margin: 0;
        padding: 0;
        position: fixed;
        width: 100vw;
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        } 
</style>
<body>
    <div class="wrapper">

        <center><h1>LOGIN</h1></center>
        <form action="login.php" method="POST">
            <p>
                <input type="text" placeholder="Masukkan username anda" name="username">
            </p>
            <p>
                <input type="password" placeholder="Masukkan password anda" name="password">
            </p>
            <p>
                <button type="submit" name="LOGIN" style="margin-top: 30px; height: 35px; width: 100%; padding: 3px; border: 2px solid black; font-size: 20px; letter-spacing: 5px; cursor: pointer; transition: 0s; color: white; background: purple;">LOGIN</button>
            </p>
        </form>

    </div>
</body>
</html>