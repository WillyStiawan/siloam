<?php 

    $connection = new mysqli("localhost","root","","jci");
    $data       = mysqli_query($connection, "select id_pokja, nama_pokja, password 
                                             from pokja 
                                             left join transaction on pokja.id_pokja = 
                                             transaction.id_transaction 
                                             where nama_pokja not in 
                                             (select id_transaction 
                                             from transaction where nik = ".$_GET['nik'].")");
    $data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data);