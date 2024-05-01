<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$handler = mysqli_connect($servername, $username, $password);

if(!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

if (mysqli_query($handler, 'CREATE DATABASE registration')) {
    echo "Database reg created successfully";
} else {
    echo "Error creating database: " . mysqli_error($handler);
}

if (mysqli_query($handler, 'CREATE DATABASE login')) {
    echo "Database log created successfully";
} else {
    echo "Error creating database: " . mysqli_error($handler);
}

if (mysqli_query($handler, 'CREATE DATABASE subscribe')) {
    echo "Database sub created successfully";
} else {
    echo "Error creating database: " . mysqli_error($handler);
}

if (mysqli_query($handler, 'CREATE DATABASE orderlist')) {
    echo "Database order created successfully";
} else {
    echo "Error creating database: " . mysqli_error($handler);
}

if (mysqli_query($handler, 'CREATE DATABASE payment')) {
    echo "Database pay created successfully";
} else {
    echo "Error creating database: " . mysqli_error($handler);
}
?>