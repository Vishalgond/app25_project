<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validatecheck'])){
        if(empty($_POST['subject'])){
            echo "<script>
                alert('Please select atleast one subject');
                window.location.href='checkbox.php';
            </script>";
        }else{
            print_r($_POST['subject']);
        }
    }
}
?>