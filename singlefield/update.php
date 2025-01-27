<?php
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $sql = "Update singlefield set name='$name' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
            alert('Data Updated');
            window.location.href='read.php';
        </script>";
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from singlefield  where id=$id";
    $single = mysqli_query($con,$sql);
    if(mysqli_num_rows($single)>0){
        $data = mysqli_fetch_assoc($single);
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
        <input type="hidden" name="id" value="<?=$data['id']?>">
        Name:<input type="text" value="<?=$data['name']?>" name="name"/>
        <button type="post">Update</button>
    </form>
</body>
</html>
<?php
}else{
    header('Location:read.php');
}?>