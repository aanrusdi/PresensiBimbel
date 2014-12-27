<?php
//untuk mengoneksikan php dengan databe MySQL
$host="localhost";
$userdb="root";
$passdb="";
$namadb="bimbel";

$sambung=mysql_connect($host,$userdb,$passdb);
mysql_select_db($namadb,$sambung)or die("Databasenya error");
?>