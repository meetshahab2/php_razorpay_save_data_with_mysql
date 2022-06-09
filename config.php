<?php
$keyId = 'rzp_test_xxxx';
$keySecret = 'xxxxxx';
$displayCurrency = 'INR';
$link = mysqli_connect('localhost', 'qacxdneq_influencer', '@$EvFW78U+VY', 'qacxdneq_influencerhire');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
