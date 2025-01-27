<?php
echo "My name is ".$_POST['name']."<br>";
echo "My email is ".$_POST['email']."<br>";
echo "My Phone number is ".$_POST['phone']."<br>";
echo "My message is ".$_POST['message']."<br>";
?>
<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="phone">
    <input type="text" name="message">
    <input type="submit">
</form>