<?php

session_start();

$host = "ls-99e7c3784f5eb215c907e0a5d0bdb3bcade70075.cillxcan9wv1.eu-west-2.rds.amazonaws.com";
$user = "dbmasteruser";
$password = "#3I(x[q9{[t;~EV`ByeK1Xn%s?VKzY_s";
$dbname = "test";

// Create connection
$con = mysqli_connect($host, $user, $password, $dbname);
       mysqli_set_charset($con, 'utf8mb4');
#printf("Success... %s\n", mysqli_get_host_info($con));printf("Success... %s\n", mysqli_get_host_info($con));
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

