<?php
$servername = "localhost";
$username = "root";
$password = "Fqm123!";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test1", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>