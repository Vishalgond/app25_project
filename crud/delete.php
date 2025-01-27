<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location:login.php');
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','app25_crud');
    $sql =  "Delete from users where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
            alert('Your Data deleted Successfully');
            window.location.href='read.php';
        </script>";
    }
}else{
    header('Location:read.php');
}
?>