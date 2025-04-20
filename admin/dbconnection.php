<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'smcproject';

$conn = mysqli_connect($server,$username,$password,$database);

if (!$conn) {
    die("Connection Failed");
}
