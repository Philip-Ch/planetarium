<?php
$con = mysqli_connect("localhost", "root", "cisco1", "planetarium");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}