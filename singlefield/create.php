<?php
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
            alert('Name field is required');
        </script>";
    }else{
        $name = $_POST['name'];
        $sql = "Insert into singlefield(name) values('$name')";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert('data submitted');
                window.location.href='read.php';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name:<input type="text" name="name"/>
        <button type="post">Submit</button>
    </form>
</body>
</html>