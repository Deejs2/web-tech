<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h1>Hello <?php if(isset($_GET['uname'])){echo $_GET["uname"];} ?> Welcome To Dashboard!</h1>

    <a href="login.php">Logout</a>
</body>
</html>