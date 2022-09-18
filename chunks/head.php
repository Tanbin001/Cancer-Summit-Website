<?php
if (isset($_SESSION['title'])) {
    $title = "Cancer Summit 2022 | " . $_SESSION['title'];
} else {
    $title = "Cancer Summit 2022";
}
?>


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<link rel="icon" type="image/x-icon" href="../assets/images/logo/Strategy Summit 2022.png">
<!-- <link rel="stylesheet" href="/assets/css/bootstrap.css"> -->
<!-- Tailwind CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<!-- Animate CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- changes shaon -->
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
<!-- Custom CSS -->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/responsive.css">