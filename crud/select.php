<?php
$data = 'usa';
$gender = 'female';
?>
<select name="" id="">
    <option value="india" <?= $data=='india'? 'selected':'' ?>>india</option>
    <option value="uae" <?= $data=='uae'? 'selected':'' ?>>uae</option>
    <option value="usa" <?= $data=='usa'? 'selected':'' ?>>usa</option>
</select>
<input type="radio" value="male" <?= $gender=='male'? 'checked':'' ?> name="gender">Male
<input type="radio" value="female" <?= $gender=='female'? 'checked':'' ?> name="gender">FeMale