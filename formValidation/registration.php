<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>

        <style>
            form{
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
    <?php 
        if(isset($_GET["msg"])){
            if($_GET["msg"]=="pwd-error"){
                echo"<p class='red'>Password must have at least 7 letter!</p>";
            }
            if($_GET["msg"]=="not-register"){
                echo"<p class='red'>Something Went Wrong. Please try again !</p>";
            }
        }
    ?>
        <form action="validation.php" method="post">
            <table>
                <tr>
                    <th colspan="2"><h2>Registration Form</h2></th>
                </tr>
                <tr>
                    <td><label for="">Full Name</label></td>
                    <td><input type="text" name="fname" id="" required></td>
                </tr>
    
                <tr>
                    <td><label for="">Address</label></td>
                    <td><input type="text" name="address" id="" required></td>
                </tr>
    
                <tr>
                    <td><label for="">Username</label></td>
                    <td><input type="text" name="uname" id="" placeholder="@Username23" required></td>
                </tr>
    
                <tr>
                    <td><label for="">Password</label></td>
                    <td><input type="password" name="pwd" id="" required></td>
                </tr>
    
                <tr>
                    <td></td>
                    <td><input type="submit" name="register" value="Register"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="login.php">Already have an account? login</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>