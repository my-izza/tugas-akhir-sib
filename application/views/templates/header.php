<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style_user.css">


</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="<?= base_url('') ?>" class="logo">
            <img src="<?= base_url() ?>assets/images/arkatama.png" alt="">
            <i class="fas fa-store"></i>
        </a>

        <form action="<?= base_url('home/search') ?>" class="search-form" method="post">
            <input type="search" id="search-box" name="keyword" placeholder="search here...">
            <button type="submit" name="submit" for="search-box" class="fas fa-search"></button>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="<?= base_url() ?>index.php/auth/login" class="fas fa-shopping-cart"></a>

            <a href="<?= base_url() ?>index.php/auth/login" class=" fas fa-user"></a>
        </div>


    </header>

    <!-- header section ends -->