<?php
    $Firstname = $_POST['Firstname'];
    $lastName = $_POST['lastName'];
    $fatherName = $_POST['fatherName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $Phone = $_POST['Phone'];
    $hs = $_POST['hs'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    //database connection
    $conn = new mysqli('localhost','','registration');
    if($conn->connect_error){
    	die('Connection Failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into student(Firstname, lastName, fatherName, dateOfBirth, Phone, hs, address, email)
    		values(?, ?, ?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("sssiisss", $Firstname, $lastName, $fatherName, $dateOfBirth, $Phone, $hs, $address, $email);
    	$stmt->execute();
    	echo "registration successfully";
    	$stmt->close();
    	$conn->close();

    }
    
?>
   
