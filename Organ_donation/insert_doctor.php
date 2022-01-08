<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department_name = $_POST['department_name'];
    $hospital_id = $_POST['hospital_id'];
    $phone_number = $_POST['phone_number'];
   
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO doctor (first_name,last_name,department_name,hospital_id,phone_number)
    VALUES ('$first_name', '$last_name','$department_name','$hospital_id','$phone_number')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>