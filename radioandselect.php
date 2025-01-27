<form action="radiopost.php" method="post">
    Country : <select name="country" id="">
        <option value="">--select country--</option>
        <option value="india">India</option>
        <option value="canada">Canada</option>
        <option value="america">America</option>
        <option value="ukrane">Ukrane</option>
    </select>
    <small style="color:red">
        <?= isset($_GET['countryerror']) ? $_GET['countryerror'] : ''?>
    </small>
    <br>
    Gender : <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br/>
    <small style="color:red">
        <?= isset($_GET['gendererror']) ? $_GET['gendererror'] : ''?>
    </small>
    <input type="submit" name="validation" value="Validate">
</form>
