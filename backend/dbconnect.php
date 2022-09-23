<?php
    include_once('db_config.php');

    define("ROOT",$_SERVER["DOCUMENT_ROOT"]);

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn)
    {
        die('Database Could Not Connect: '.mysqli_errno());
    }
    
?>