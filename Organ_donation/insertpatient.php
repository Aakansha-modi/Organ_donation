<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $medical_history = $_POST['medical_history'];
    $doctor = $_POST['doctor'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];
    $phone = $_POST['phone'];
    $Blood_group = $_POST['Blood_group'];
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO patient (first_name,last_name,age,medical_history,doctor,
   address,address2,address3,phone,Blood_group)
    VALUES ('$first_name', '$last_name','$age','$medical_history','$doctor',
'$address','$address2','$address3','$phone','$Blood_group')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>