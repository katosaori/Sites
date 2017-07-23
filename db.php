<?php
$dbh=new mysqli("mysql434.db.sakura.ne.jp","katousaori","shuwachann62");
$dbh->select_db("katousaori_pictures");
$dbh->set_charset("UTF8");
if (mysqli_connect_errno()) {
   printf("Connect failedkuso: %s\n", mysqli_connect_error());
   exit();
}
?>
