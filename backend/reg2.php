<?php
    if(isset($_POST['submit']))
    {
        $msg = "";
        $oname = $_POST['oname'];
        $email = $_POST['email'];
        $sector = $_POST['sector'];
        $address = $_POST['address'];
        $postal = $_POST['postal'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $date = $_POST['date'];
        $trxid = $_POST['trxid'];
        $practices = $_POST['practices'];
        $achievements = $_POST['achievements'];
        $trajectory = $_POST['trajectory'];

        //image upload start
        $target_dir = "assets/uploads/bankphoto/";
        $prefix = "organizations_";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;

        } else {
            $msg2 = "Wrong Image File!";
            $uploadOk = 0;
        }
        if ($_FILES["photo"]["size"] > 500000) {
            $msg2 = "Image is too large. Try below 1MB";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            $msg2 = "Wrong Format for image! Only JPG, JPEG & PNG files are allowed. ".$imageFileType." is given!";
            $uploadOk = 0;
        }
        $image = false;

        if($uploadOk)
        {
            $target_file = $target_dir.$prefix.$email.".".$imageFileType;

            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $image = true;
            } else {
                $msg2 = "Sorry, there was an error uploading your image.";
                $image = false;
            }
        }
        //image upload done

        if($image)
        {
            $sql = "SELECT * FROM `organization` WHERE `email` = '$email'";
            $query = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($query);

            if($num==0)
            {
                $sql = "INSERT INTO 
                `organization`(`full_name`, `email`, `sector`, `address`, `postal_code`, `city`, `phone`, `date`, `trxid`, `practices`, `achievements`, `trajectory`) 
                VALUES ('$oname','$email','$sector','$address','$postal','$city','$contact','$date','$trxid','$practices','$achievements','$trajectory')";

                $query = mysqli_query($conn,$sql);

                if($query)
                {
                    $msg = "success";
                }
                else
                {
                    $msg = "error";
                }
            }
            else
            {
                $msg = "alert";
            }
        }
    }

?>