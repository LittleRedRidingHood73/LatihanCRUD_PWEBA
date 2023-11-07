<?php
$dbHost = 'localhost';
$dbNama = 'test';
$dbUser = 'root';
$dbPW = '';

$mysqli = mysqli_connect($dbHost, $dbUser,$dbPW,$dbNama);

if( !$mysqli ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>