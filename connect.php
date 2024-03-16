<?php
$host = "localhost";
$users = "root";
$pass = "";
$db = "login users information";
$conn = new mysqli($host, $users, $pass, $db);

if ($conn->connect_error) 
{
    echo "failed to connect DB " . $conn->connect_error;
}
?>