<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */
if  (isset($_POST['submit'])) {
    require "config.php";

    try {
    	$connection = new PDO("mysql:host=$host", $username, $password, $options);
    	
    
	echo "Database and table users created successfully.";
    } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
    }
}

