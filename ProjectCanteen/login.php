<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadim Canteen | Login</title>
    <style>
        span{
            font-size: xx-large;
        }
        form{
            display: flex;
            justify-content: center;
        }
        table{
            border: 1px solid rgba(0, 0, 0, 0.432);
            border-radius: 10px;
            padding: 8px 16px;
            margin: 15px 120px;
        }
        header,footer{
            text-align: center;
        }
        input:focus{
            outline: none;
        }
        input[type="submit"]{
            margin-top: 15px;
            cursor: pointer;
        }
        .red{
            color: rgba(255, 0, 0, 0.78);
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <span>Aadim <span class="red" style="color: rgba(255, 0, 0, 0.78);">Canteen</span></span>
        </header>
        <form action="validation.php" method="post">
            <table>
                <tr>
                    <td colspan="2"><h2 style="text-align: center; margin-top: 3px;">Login Form</h2></td>
                </tr>
                <tr>
                    <td><label for="id">Id</label></td>
                    <td><input type="text" name="id" id="" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="" required></td>
                </tr>
                <tr>
                    <td><label for="person">Account</label></td>
                    <td>
                        <select name="account" id="" required>
                            <option value="" selected disabled>Select Account</option>
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" value="login"></td>
                </tr>
            </table>
        </form>
        <div class="info" style="display: flex; justify-content: center;">
            <table border="1px">
            <tr>
                <td colspan="3"><p class="red" style="text-align: center; margin: 3px 4px;">Valid Id And Password!</p></td>
            </tr>
            <tr>
                <th>Account</th>
                <th>ID</th>
                <th>Password</th>
            </tr>
            <tr>
                <th>Admin</th>
                <td>1-5</td>
                <td>admin</td>
            </tr>
            <tr>
                <th>Student</th>
                <td>6-10</td>
                <td>student</td>
            </tr>
            <tr>
                <th>Teacher</th>
                <td>11-15</td>
                <td>teacher</td>
            </tr>
        </table>
        </div>
        <footer>
            <p>&copy; 2023 Aadim Canteen. All Rights are Reserved.</p>
        </footer>
    </div>
    
</body>
</html>