<?php
// ini_set('session.gc_maxlifetime',30);
session_start();
if(!isset($_SESSION['user'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <a href="create.php" class="btn btn-primary">Create Data</a>
    <a href="logout.php" id="logout" class="btn btn-warning float-end">Logout</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $con = mysqli_connect('localhost','root','','app25_crud');
                $sql = "Select * from users";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0){
                    while($record = mysqli_fetch_assoc($result)){ 
            ?>
                    <tr>
                        <th scope="row"><?= $record['id']?></th>
                        <td><?= $record['fname']?></td>
                        <td><?= $record['lname']?></td>
                        <td><?= $record['phone']?></td>
                        <td><?= $record['email']?></td>
                        <td>
                            <a href="delete.php?id=<?= $record['id']?>" class="btn btn-danger">Delete</a>
                            <a href="update.php?id=<?= $record['id']?>" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
    <script>
        var log = document.getElementById('logout');
        setTimeout(() => {
            log.click();
        }, 10000);
    </script>
</body>
</html>



