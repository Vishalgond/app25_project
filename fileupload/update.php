<?php
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    if(empty($_FILES['image']['name'])){
        $filename = $_POST['oldimage'];
    }else{
        $filename = time().$_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"../upload/$filename");
    }
    $sql = "update fileupload set name='$name', image='$filename' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
                alert('Image updated successfully');
                window.location.href='read.php';
            </script>"; 
    }

}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from fileupload where id=$id";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $single  = mysqli_fetch_assoc($result);
    }
}else{
    header('Location:read.php');
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $single['id']?>">
    Name : <input type="text" value="<?= $single['name']?>" name="name">
    File : <input type="file" name="image" >
    <input type="hidden" value="<?= $single['image']?>" name="oldimage">
    <img src="../upload/<?= $single['image']?>" height="50px" width="50px" alt="">
    <button type="submit">Submit</button>
</form>
</body>
</html>