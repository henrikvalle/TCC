<?php
error_reporting(E_ALL & ~E_NOTICE);
    //conectando ao BD
    try {        
        $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl18135;charset=utf8', 'cl18135', 'cl*08032003');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $output = 'Conexão estabelecida. <br>';
    } catch (PDOException $e) {
        $output = 'Impossível conectar BD : ' . $e . '<br>';
    }
    //echo $output;
?>