<?php
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=="POST"){
    foreach($_FILES['file']['name'] as $key=>$val){
        move_uploaded_file($_FILES['file']['tmp_name'][$key],"images/$val");
    } 
    $images = implode(',',$_FILES['file']['name']);
    $sql = "Insert into multiplefile(images) values('$images')";
    if(mysqli_query($con,$sql)){
        echo "Images Uploaded";
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
    <form action="" method="post" enctype="multipart/form-data">
        File : <input type="file" multiple name="file[]" id="">
        <button type="submit">Upload</button>
    </form>
</body>
</html>