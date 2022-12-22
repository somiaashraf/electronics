<?php  // login.php
    $host ='127.0.0.1';
    //$db='publications';
    $db='electronics';
    $user='root';
    $pass='';
    $charset='utf8mb4';
    $attr="mysql:host=$host;dbname=$db;charset=$charset";
    $options=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES=>false, 
    ];
?>