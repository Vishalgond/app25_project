<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validation'])){
        if(empty($_POST['country'])){
            header("Location:radioandselect.php?countryerror=Please select your origin country");
        }elseif (empty($_POST['gender'])) {
            header("Location:radioandselect.php?gendererror=Please select your gender");
        }else{
            echo $_POST['country'];
            echo $_POST['gender'];
        }
    }
}
?>