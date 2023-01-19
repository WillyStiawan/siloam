<?php 

    $connection = new mysqli("localhost","root","","jci");
    $data       = mysqli_query($connection, "select count(*) as total from transaction where nik = ".$_GET['nik']);
    $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data);