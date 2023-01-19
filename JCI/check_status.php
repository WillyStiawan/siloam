<?php 

    $connection = new mysqli("localhost","root","","jci");
    
    $data       = mysqli_query($connection, "select nama_pokja, 
                                             transaction.status, transaction.nik from pokja 
                                             left join transaction on pokja.nama_pokja = transaction.id_transaction 
                                             where nik = ".$_GET['nik']);
    $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data);