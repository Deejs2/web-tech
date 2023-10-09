<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        .red{
                color: red;
                text-align: center;
            }
    </style>
</head>
<body>
<?php if(isset($_GET["msg"])=="not-valid"){
    echo"<p class='red'>Invalid Detail!, Please enter a valid Username and Password!</p>";
} ?>
    <form action="validation.php" method="post">
        <h2>Login Form</h2>

        <label for="">UserName</label>
        <input type="text" name="uname" id="" required><br><br>

        <label for="">Password</label>
        <input type="password" name="pwd" id="" required><br><br>

        <input type="submit" value="Login" name="login">

        <br><br>
        <a href="registration.php" style="color: blue;">Don't have account? create account</a>
    </form>
    
</body>
</html>