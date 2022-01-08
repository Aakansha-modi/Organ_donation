<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $Hospital_name = $_POST['Hospital_name'];
    $City = $_POST['City'];
    $State = $_POST['State'];
   
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO hospital (Hospital_name,City,State)
    VALUES ('$Hospital_name', '$City','$State')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>