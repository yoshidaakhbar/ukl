<?php
$host="localhost";
$username="root";
$password="";
$database="game";

$mysqli=new mysqli($host,$username,$password,$database);
if (mysqli_connect_errno()) {
    trigger_error('koneksi ke database gagal:'.mysql_connect_error(),E_USER_ERROR);
}

?>