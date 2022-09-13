<?php
    include_once('db_config.php');

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn)
    {
        die('Database Could Not Connect: '.mysqli_errno());
    }
    
?>