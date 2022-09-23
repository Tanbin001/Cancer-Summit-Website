<?php
    $msg = "";
    $msg2 = "";
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $organization = $_POST['organization'];
        $designation = $_POST['designation'];
        $address = $_POST['address'];
        $postal = $_POST['postal'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $date = $_POST['date'];
        $about = $_POST['about'];

        //image upload start
        $target_dir = "assets/uploads/images/";
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
            $target_file = $target_dir.$email.".".$imageFileType;

            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $image = true;
            } else {
                $msg2 = "Sorry, there was an error uploading your image.";
                $image = false;
            }
        }
        //image upload done

        //file upload start
        $target_dir = "assets/uploads/cv/";
        $target_file = $target_dir . basename($_FILES["cv"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($check !== false) {
            $uploadOk = 1;

        } else {
            $msg2 = "Wrong CV File Uploaded!";
            $uploadOk = 0;
        }
        if($FileType != "pdf" && $FileType != "doc" && $FileType != "docx" ) {
            $msg2 = "Wrong Format for CV! Only PDF, DOC & DOCX files are allowed. ".$FileType." is given!";
            $uploadOk = 0;
        }
        $file = false;

        if($uploadOk)
        {
            $target_file = $target_dir.$email.".".$FileType;

            if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
                $file = true;
            } else {
                $msg2 = "Sorry, there was an error uploading your file.";
                $file = false;
            }
        }
        //file upload done

        //Database Entry
        if($image && $file)
        {
            $sql = "SELECT * FROM `cxo` WHERE `email` = '$email'";
            $query = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($query);

            if($num==0)
            {
                $sql = "INSERT INTO 
                `cxo`(`full_name`, `email`, `organization`, `designation`, `address`, `postal_code`, `city`, `phone`, `date`, `about`) 
                VALUES ('$fname','$email','$organization','$designation','$address','$postal','$city','$contact','$date','$about')";

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