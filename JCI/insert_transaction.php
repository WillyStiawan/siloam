<?php

    $connection = new mysqli("localhost", "root", "", "jci");
    $id_transaction     = $_POST['id_transaction'];
    $nik                = $_POST['nik']; 
    $status             = $_POST['status']; 
    $result             = mysqli_query($connection, "insert into transaction set   
    id_transaction='$id_transaction',
    nik='$nik',
    status='$status'");