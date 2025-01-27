<?php
echo "Current year is = ".date("Y")."<br/>";//return current year
echo "Current year is = ".date("y")."<br/>";//return current year
echo "Current Month is = ".date("m")."<br/>";//return current month
echo "Current Month Name is = ".date("M")."<br/>";//return current month name
echo "Current day is = ".date("d")."<br/>";//return current day
echo "Current day name is = ".date("D")."<br/>";//return current day name
echo "Current hour is = ".date("H")."<br/>";//return current day name
echo "Current minute is = ".date("i")."<br/>";//return current day name
echo "Current second is = ".date("s")."<br/>";//return current day name
echo "Current second is = ".date("a")."<br/>";//return current day name
echo date_default_timezone_get()."<br/>";
date_default_timezone_set("Asia/kolkata");
echo date('H')."<br>"; 
$date = mktime(01,30,59,12,05,2003);
echo date("Y/m/d h:i:sa",$date)."<br>";
echo date("Ymd",strtotime("10/20/2006 12:10:20am"));
require_once('include.php');
require_once('include.php');
require_once('include.php');
require_once('include.php');
echo $_COOKIE['use'];



?>