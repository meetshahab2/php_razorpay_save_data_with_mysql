<?php
$keyId = 'rzp_test_xxxx';
$keySecret = 'xxxxxx';
$displayCurrency = 'INR';
$link = mysqli_connect('localhost', 'root', '', 'test');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
