<?php

$id = $_POST['id'];
$password = $_POST['password'];
$account = $_POST['account'];

//for knowing what values they stored
// echo $name ."<br>" .$id  ."<br>" .$account;

//Doing redirection local variables are not defined in other pages so we need to use session variable 
// if ($account == "admin") {
//     header("location:admin/dashboard.php");
// }if ($account == "student") {
//     header("location:student/dashboard.php");
// }if ($account == "teacher") {
//     header("location:teacher/dashboard.php");
// } else {
//     echo "Please Select an Account!";
// }

//checking correct password and id
if (($id>=1 || $id <=15)&&($password=="admin"||$password=="student"||$password=="teacher")) {
    //only switching other pages in a same page
switch ($account) {
    case 'admin':
        if (($password=="admin")&&($id>=1 || $id <=5)) {
            include("admin/dashboard.php");
        }else{
            echo "Invalid Id or Password!";
        }
        break;
    case 'student':
        if (($password=="student")&&($id>5 || $id <=10)) {
            include("student/dashboard.php");
        }else{
            echo "Invalid Id or Password!";
        }
        break;
    case 'teacher':
        if (($password=="teacher")&&($id>10 || $id <=15)) {
            include("teacher/dashboard.php");
        }else{
            echo "Invalid Id or Password!";
        }  
        break;
    default:
        echo "Please Select an Account!";
        break;
}
} else {
    echo "<h3>Password Incorrect!</h3>";
    echo "<a href='login.php'>Go Back</a>";
}




?>