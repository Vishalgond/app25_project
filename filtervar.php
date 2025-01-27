<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $ip = "127.0.0.1a";
    if(empty($name)){
        echo "Name is required";
    }elseif(empty($email)){
        echo "Email is required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Please enter a valid email";
    }elseif(!filter_var($ip,FILTER_VALIDATE_IP)){
        echo "Ip Address not valid";
    }else{
        echo "Ip is valid";
    }
}
?>
<form action="" method="post">
    <input type="text" placeholder="email" name="email">
    <input type="text" placeholder="name" name="name">
    <button type="submit">Submit</button>
</form>