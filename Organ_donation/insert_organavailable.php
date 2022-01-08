<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $Donor_id= $_POST['Donor_id'];
    $organ = $_POST['organ'];
    $status = $_POST['status'];
   
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO organs (Donor_id,organ,status)
    VALUES ('$Donor_id', '$organ','$status')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>