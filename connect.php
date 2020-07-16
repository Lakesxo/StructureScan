<?php
    $email = $_POST['email'];

    // Database connection
    $conn = new mysqli('localhost','id14332246_structuremails','@Rexiolar02#','id14332246_structure_scan');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into emails(email) values(?)");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        //  To redirect form to landing page
        header("Location: https://structurescan.000webhostapp.com/");
        die;
        // echo "Thanks for subscribing";
        $stmt->close();
        $conn->close();
    }
?>
