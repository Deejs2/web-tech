<?php
    echo "<h2> Welcome To ".strtoupper($_POST['account'])." Dashboard</h2>";
    echo "Your Id : ".$_POST['id']."<br>"."Your Password : ".$_POST['password'];
?>