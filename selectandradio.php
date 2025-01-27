<form action="" method="post">
    <div>
    <select name="country" id="">
        <option value="">--Select Country--</option>
        <option value="india">India</option>
        <option value="canada">Canada</option>
        <option value="america">America</option>
        <option value="nepal">Nepal</option>
    </select>
    </div>
    <div>
    <label for="">Gender:</label>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    </div>
    <input type="date" name="date">
    <input type="range" name="range" value=0>
    <textarea name="text" id=""></textarea>
    <input type="color" name="color">
    <input type="submit">
</form>
<div style="height:100px; width:100px;background:<?= $_POST['color']?>"></div>