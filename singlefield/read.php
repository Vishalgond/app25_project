<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        <?php
            $con = mysqli_connect('localhost','root','','app25_crud');
            $sql = "Select * from singlefield";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['name']?></td>
            <td><?= $row['created_at']?></td>
            <td>
                <a href="delete.php">Delete</a>
                <a href="update.php?id=<?= $row['id']?>">Update</a>
            </td>
        </tr>
        <?php
                
            }
        }
        ?>
    </table>
</body>
</html>