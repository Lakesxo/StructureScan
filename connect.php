<?php
    $email = $_POST['email'];

    // Database connection
    $conn = new mysqli('localhost','root','','structure_scan');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into emails(email) values(?)");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        //  To redirect form on a particular page
        header("Location: http://localhost/StructureScan/#sub_sec");
        die;
        // echo "Thanks for subscribing";
        $stmt->close();
        $conn->close();
    }
?>