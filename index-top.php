<?php
    include 'database/admin_db.php';
    include 'database/contact-us-db.php';
?>

<html>
    <head>
        <title>HOME</title>
        <link rel="shortcut icon" href="/img/icons.png" type="image/x-icon">
        <link rel="stylesheet" href="css/index_style.css">
        <link rel="stylesheet" type="text/css" href="css/index_style.css">
        <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
              integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
              crossorigin="anonymous"
              referrerpolicy="no-referrer"
            />
        <link rel="stylesheet" href="css/font-awesome.min.css">

    </head>
    <body>
<!--- THIS IS THE NAVIGATION BAR --->
        <header class="NavigationBar"> 
            <div class="logo-valiants">
                <a href="index.php"><img src="img/valiants.png" class="valiants"></a>  
                <div class="container-logoname">
                    <div class="logo" id="CCC">CITY COLLEGE OF CALAMBA</div>
                    <div class="logoname">SPORTS DEVELOPMENT OFFICE</div>
                </div>
            </div>
            <input type="checkbox" id="nav_check" hidden>
            <nav>
                <ul>
                    <li class="menu-active"><a href="index.php">HOME</a></li>
                    <li class="menu-item"><a href="about-us-page.php">ABOUT US</a></li>
                    <li class="menu-item"><a href="contact-us-page.php">CONTACT US</a></li>
                    <li class="menu-item"><a href="faq-page.php">FAQ</a></li>
                </ul>
            </nav>
            <label for="nav_check" class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </header>

