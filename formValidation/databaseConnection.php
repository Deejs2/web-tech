<?php

$con = mysqli_connect("localhost","root","","exam");

if(!$con){
    echo "Connection Failed : ".mysqli_connect_error();
}

echo "Connected Successfully!";

?>