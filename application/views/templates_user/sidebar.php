<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="<?php echo base_url() ?>assets/images/user-img.png" alt="">
        <h3>shaikh anas</h3>
        <a href="<?= site_url('auth/logout') ?>">log out</a>
    </div>

    <nav class="navbar">
        <a href="<?= base_url() ?>index.php/user/home_user/"> <i class="fas fa-angle-right"></i> home </a> <br>
        <a href="<?= base_url() ?>index.php/user/home_user/about/"> <i class="fas fa-angle-right"></i> about </a> <br>
        <a href="<?= base_url() ?>index.php/user/home_user/product/"><i class="fas fa-angle-right"></i> products </a> <br>
        <a href="<?= base_url() ?>index.php/home/termahal"><i class="fas fa-angle-right"></i>Harga Tertinggi </a> <br>
        <a href="<?= base_url() ?>index.php/home/termurah"><i class="fas fa-angle-right"></i>Harga Terendah </a> <br>
        <a href="<?= base_url() ?>index.php/user/home_user/contact/"><i class="fas fa-angle-right"></i> contact </a> <br>
        <a href="<?= base_url() ?>index.php/user/home_user/cart/"><i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>

<!-- side-bar section ends -->