<?php 
require "databaseConnection.php";

if(isset($_POST["register"])){
    $fname = $_POST["fname"];
    $address = $_POST["address"];
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];

    if(strlen($pwd)<7){
        header("Location: registration.php?msg=pwd-error");
        exit;
    }

    $sql = "INSERT INTO register (id, name, address, username, password) VALUES ('','$fname', '$address', '$uname', '$pwd')";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "New registration successfull!";
        header("Location: login.php");
        exit;
    }else{
        header("Location: registration.php?msg=not-register");
        exit;
    }

}

if(isset($_POST["login"])){
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];

    $sql = "SELECT username, password FROM register";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            if($row["username"]==$uname && $row["password"]==$pwd){
                header("Location: dashboard.php?uname=$row[username]");
                exit;
            }else{
                header("Location: login.php?msg=not-valid");
                exit;
            }
        }

    }else{
        echo "0 rows";
    }
}







?>

