<?php

    $connection = new mysqli("localhost", "root", "", "jci");
    $fullname   = $_POST['fullname']; 
    $department = $_POST['department']; 
    $nik        = $_POST['nik']; 
    $username   = $_POST['username']; 
    $password   = $_POST['password']; 
    $result = mysqli_query($connection, "insert into user set 
    fullname='$fullname', 
    department='$department', 
    nik='$nik',
    username='$username',
    password='$password'");