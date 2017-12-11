<?php
/*
 	*Initialization for MySql Database 
 */


	require 'config.php';
	
	// Trying to connect to the MySQL Database
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}
	echo 'Connected successfully<br />';
	
	
	//Creating a MySQL Database
	$sql = 'CREATE DATABASE $dbname';
	$retval = mysqli_query( $sql, $conn );
	// Check if DataBase already exits
    if ( !mysqli_select_db( 'Medical_Records' ) ){
    	// DataBase Medical_Record doesn't exist, so we will create one
        $retval = mysqli_query( $conn, $sql );
        if( !$retval ) {
            die('Could not create database: ' . mysqli_error());
        }
        echo 'Database Medical_Records created successfully<br />';
    }
    
    // Creating a table
   // mysqli_close($conn);
?>