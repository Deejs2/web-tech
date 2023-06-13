<?php

$id = $_POST['id'];
$password = $_POST['password'];
$account = $_POST['account'];
var_dump($_POST);

//redirect in another page
if ($id=="admin"&&$password=="admin") {
    header("Location:admin/dashboard.php?r=$account");
    exit;
}else if ($id=="student"&&$password=="student") {
    header("Location:student/dashboard.php?r=$account");
    exit;
}else if ($id=="teacher"&&$password=="teacher") {
    header("Location:teacher/dashboard.php?r=$account");
    exit;
}else{
    echo "Invalid id or password!";
}

?>