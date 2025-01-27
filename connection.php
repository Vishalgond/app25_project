<?php
$con = mysqli_connect('localhost','root','','app25');
// if($con){
//    echo "Connection Established"; 
// }else{
//     echo "Something went wrong";
//     echo mysqli_connect_error();
// }

// $sql = "Create table users(id int(20) primary key auto_increment,name varchar(25),email varchar(50))";
// // $sql = "Drop table users";
// if(mysqli_query($con,$sql)){
//     echo "Table created";
// }else{
//     echo mysqli_error($con);
// }
// $sql = "Insert into users(id,name,email) values(1,'vishal','vishal@gmail.com')";
// if(mysqli_query($con,$sql)){
//     echo "Data inserted successfully";
// }else{
//     echo mysqli_error($con);
// }
// $sql = "Insert into users(id,name,email) values(2,'vishal','vishal@gmail.com');";
// $sql .= "Insert into users(id,name,email) values(3,'vishal','vishal@gmail.com');";
// $sql .= "Insert into users(id,name,email) values(4,'vishal','vishal@gmail.com');";
// // echo $sql;
// mysqli_multi_query($con,$sql);
// $sql = "Insert into users(name,email) values('vishal1','vishal@gmail.com');";
// if(mysqli_query($con,$sql)){
//     echo mysqli_insert_id($con);
// }
// $sql = "Delete from users where id=3";
// echo mysqli_query($con,$sql);
// echo mysqli_affected_rows($con);
$sql = "Select * from users";
$result = mysqli_query($con,$sql);
// echo mysqli_num_rows($result);
// echo "<pre>";
// print_r(mysqli_fetch_all($result,MYSQLI_BOTH));
// print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));
echo '<h1>Es code me change <span style="color:red;">vansh</span> ne kiya hai </h1><br>';
while($record = mysqli_fetch_assoc($result)){
    echo "Id of records = ";
    print_r($record['id']); 
   echo "<br>";
}

// $sql = "update users set name='dipanshu' where id=4";
// mysqli_query($con,$sql);
// echo mysqli_affected_rows($con);

?>