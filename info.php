<?php
    $username=$_POST['username'];
    $password=$_POST['password'];

    //Database Connection
    $conn=new mysqli('localhost', 'root', '', 'cofeedatabase');
    if(conn->connect_error){
        die('Connection failed');
    }else{
        $stmt=$conn->prepare("insert into custom(username, password") values(?, ?)");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $conn->close();
    }
?>