<?php
session_cache_expire(5) ;
session_start() ;
if ($_SERVER['SERVER_NAME']=='localhost') {
  $mysqlusername="remoteuser" ;
	$dbname="hcvoltest" ;
  $password="e3bySxW32WcmXamn" ;
  $db=mysql_connect("localhost",$mysqlusername,$password) or die("localhost bad connection with dbname=".$dbname." and mysqlusername=".$mysqlusername." ".mysql_error()); // remote on old server
}
else {

  echo "\$_SERVER['SERVER_NAME']=",$_SERVER['SERVER_NAME'] ;
	die ("this serevr was not expected") ;
	 
// hcvoltestdbusr aJ1Feklef342
  $mysqlusername="remoteuser" ;
  $username=$dbname="hcvoltest" ;
  $password="e3bySxW32WcmXamn" ;
  $db=mysql_connect("localhome",$mysqlusername,$password) or die("bad connection ".mysql_error()); // remote on old server
}

if (!$db) {
 $str="bad mysql_connect ".mysql_error() ;
 error_log($str." mysqlusername=$mysqlusername") ;
 die($str) ;
}


if (!mysql_select_db($dbname,$db)) {
 $str="bad mysql_connect ".mysql_error() ;
 error_log($str." select db $dbname") ;
 die($str) ;
}
$Params=mysql_fetch_object(mysql_query("select * from params")) ;
if (!$Params) {
  die("Failed to Load Params ") ;
}



?>
