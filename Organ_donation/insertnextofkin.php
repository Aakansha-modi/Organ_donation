<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "organ_donation";
try {
    $Donor_ID = $_POST['Donor_ID'];
    $First_name = $_POST['First_name'];
    $last_name = $_POST['last_name'];
    $Relation = $_POST['Relation'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $state = $_POST['state'];
    
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO next_of_kin (Donor_ID,First_name,last_name,Relation,Street,City,state)
    VALUES ('$Donor_ID','$First_name', '$last_name','$Relation','$Street','$City',
'$state')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>