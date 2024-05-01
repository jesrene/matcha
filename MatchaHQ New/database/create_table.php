<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

//reg
$dbname = "registration";
$handler = mysqli_connect($servername, $username, $password, $dbname);

if(!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$the_query = "CREATE TABLE member(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    gender VARCHAR(6) NOT NULL,
    phone INT(12) NOT NULL,
    email VARCHAR(50) NOT NULL,
    user_username VARCHAR(20) NOT NULL,
    user_password VARCHAR(20) NOT NULL)";

if (mysqli_query($handler, $the_query)) {
    echo "Table member created successfully";
} else {
    die("Error creating table: " . mysqli_error($handler));
}

//login
$dbname = "login";
$handler = mysqli_connect($servername, $username, $password, $dbname);

$the_query = "CREATE TABLE login(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    user_password VARCHAR(20) NOT NULL)";

if (mysqli_query($handler, $the_query)) {
    echo "Table login created successfully";
} else {
    die("Error creating table: " . mysqli_error($handler));
}

//sub
$dbname = "subscribe";
$handler = mysqli_connect($servername, $username, $password, $dbname);

$the_query = "CREATE TABLE subscribe( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_username VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL)";

if (mysqli_query($handler, $the_query)) {
    echo "Table sub created successfully";
} else {
    die("Error creating table: " . mysqli_error($handler));
}

//order
$dbname = "orderlist";
$handler = mysqli_connect($servername, $username, $password, $dbname);

$the_query = "CREATE TABLE orderdetails(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    booking VARCHAR(10) NOT NULL,
    date VARCHAR(10) NOT NULL,
    time VARCHAR(10) NOT NULL,
    pax INT(5) )";

if (mysqli_query($handler, $the_query)) {
    echo "Table order created order successfully";
} else {
    die("Error creating table: " . mysqli_error($handler));
}

//pay
$dbname = "payment";
$handler = mysqli_connect($servername, $username, $password, $dbname);

$the_query = "CREATE TABLE pay(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_cardname VARCHAR(30) NOT NULL,
    user_cardnum VARCHAR(20) NOT NULL,
    expmonth INT(2) NOT NULL,
    expyear INT(4) NOT NULL,
    user_securitycode INT(10) NOT NULL)";

if (mysqli_query($handler, $the_query)) {
    echo "Table pay created successfully";
} else {
    die("Error creating table: " . mysqli_error($handler));
}

?>

