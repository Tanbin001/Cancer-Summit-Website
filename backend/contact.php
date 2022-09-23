<?php
    $msg = "";

    if(isset($_POST['submit']))
    {
        $name   =   $_POST['name'];
        $email  =   $_POST['email'];
        $phone  =   $_POST['phone'];
        $message=   $_POST['message'];

        $sql    =   "INSERT INTO `contact_us`(`name`, `email`, `phone`, `message`) 
                    VALUES ('$name','$email','$phone','$message')";
        $query  =   mysqli_query($conn, $sql);

        if($query)
            $msg = 'success';
        else
            $msg = 'error';
    }
?>