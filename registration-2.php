<?php
$_SESSION['title'] = "Registration";
    include_once('backend/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('chunks/head.php'); ?>
</head>
<body>

    <?php 
        include('backend/reg2.php');

        include('chunks/header.php');

        include('page-body/reg2-body.php');
    
        include('chunks/footer.php');
    ?>

</body>
</html>