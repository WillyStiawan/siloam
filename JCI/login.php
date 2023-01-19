<?php 

    $connection = new mysqli("localhost","root","","jci");
    
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $queryResult = $connection->query("SELECT * FROM user WHERE username='$username' and password='$password'");

    $result=array();

    while($fetchData= $queryResult->fetch_assoc()){
        $result[]=$fetchData;
    }

    echo json_encode($result);