<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="<?php echo base_url() ?>assets/images/user.png" alt="">
        <h3>Nama Anda</h3>
        <a href="<?= base_url() ?>index.php/auth/login/">log in</a>
    </div>

    <nav class="navbar">
        <a href="<?= base_url() ?>index.php/home"> <i class="fas fa-angle-right"></i> home </a>
        <a href="<?= base_url() ?>index.php/home/about/"> <i class="fas fa-angle-right"></i> about </a>
        <a href="<?= base_url() ?>index.php/home/product/"><i class="fas fa-angle-right"></i> products </a>
        <a href="<?= base_url() ?>index.php/home/termahal"><i class="fas fa-angle-right"></i>Harga Tertinggi </a> <br>
        <a href="<?= base_url() ?>index.php/home/termurah"><i class="fas fa-angle-right"></i>Harga Terendah </a> <br>
        <a href="<?= base_url() ?>index.php/home/contact/"><i class="fas fa-angle-right"></i> contact </a>
        <a href="<?= base_url() ?>index.php/auth/login"><i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>

<!-- side-bar section ends -->