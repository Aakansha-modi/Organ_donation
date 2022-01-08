<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $patient_id = $_POST['patient_id'];
    $organ = $_POST['organ'];
   
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO organ_required (patient_id,organ)
    VALUES ('$patient_id', '$organ')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>