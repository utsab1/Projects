<?php
$servername="localhost";
$dbname="poojasamagri";
$username="root";
$password="";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",DBUSER,DBPASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo"Connected successfully";
    }
catch(PDOException $e)
    {
    echo  $e->getMessage();
    }