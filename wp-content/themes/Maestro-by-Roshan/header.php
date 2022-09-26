<?php
/**
 *Header template 
 *@package Maestro-by-Roshan
 */ 
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/X-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Maestro Consultants</title>
    <?php wp_head();?>
</head>

<body>
    <div class="contain-1">
        <header>

            <img src="../images/logo.png" alt="Maestro consultants logo" class="logo" />
            <div class="hamburger ">
                <div class="ham ham-1 "></div>
                <div class="ham ham-2"></div>
                <div class="ham ham-3"></div>
            </div>
            <div class="contain">
                <ul class="nav translate-100">
                    <li><a href="#">What do I need?</a></li>
                    <li><a href="">Training</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </header>
    </div>