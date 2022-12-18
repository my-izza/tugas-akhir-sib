<!-- category section starts  -->

<section class="category">

    <h1 class="heading"> Berdasarkan <span>Kategori</span> </h1>

    <div class="box-container">

        <a href="<?= site_url('administrator/category/elektronik_user') ?>" class="box">
            <img src="<?php echo base_url() ?>assets/images/lenovo-yoga.png" alt="">
            <h3>Elektronik</h3>
        </a>

        <a href="<?= site_url('administrator/category/software_user') ?>" class="box">
            <img src="<?php echo base_url() ?>assets/images/software.png" alt="">
            <h3>Product Software</h3>
        </a>

        <a href="<?= site_url('administrator/category/aksesoris_user') ?>" class="box">
            <img src="<?php echo base_url() ?>assets/images/pin-1.png" alt="">
            <h3>Aksesoris</h3>
        </a>

        <a href="<?= site_url('administrator/category/alat_kantor_user') ?>" class="box">
            <img src="<?php echo base_url() ?>assets/images/hp-deskjet-1.png" alt="">
            <h3>Alat Tulis Kantor</h3>
        </a>

        <a href="<?= site_url('administrator/category/pakaian_user') ?>" class="box">
            <img src="<?php echo base_url() ?>assets/images/kaos-1.png" alt="">
            <h3>Pakaian</h3>
        </a>

        <a href="<?= site_url('administrator/category/jam_tangan_user') ?>" class="box">
            <img src="<?php echo base_url() ?>assets/images/jam-tangan.png" alt="">
            <h3>Jam Tangan</h3>
        </a>


    </div>

</section>

<!-- category section ends -->


<!-- products section starts  -->

<section class="products">

    <h1 class="heading"><span>Produk</span> Pilihan </h1>

    <div class="box-container">

        <?php foreach ($product as $rows) : ?>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() . '/uploads/product/' . $rows['image'] ?>" class="main-img" alt="">
                    <img src="<?= base_url() . '/uploads/product/' .  $rows['image'] ?>" class="hover-img" alt="">
                    <div class="icons">
                        <!-- keranjang -->
                        <a href="<?= site_url('user/home_user/keranjang/' .  $rows['id_product']) ?>" class="fas fa-shopping-cart"></a>
                        <!-- detail -->
                        <a href="<?= site_url('home/detail/' . $rows['id_product']) ?>" class="fas fa-info"></a>
                        <!-- suka -->
                        <a href="#" class="fas fa-heart"></a>
                        <!-- share -->
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3><?= $rows['name'] ?></h3>
                    <div class="price">Rp <?= number_format($rows['harga_diskon'], 0, ',', '.') . ',00' ?> <span> Rp <?= number_format($rows['harga_asli'], 0, ',', '.') . ',00'  ?></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- products section ends -->


<!-- product banner section starts  -->

<section class="product-banner">

    <h1 class="heading"> Produk <span>Diskon</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="<?php echo base_url() ?>assets/images/product-banner-1.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="<?php echo base_url() ?>assets/images/product-banner-2.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

    </div>

</section>

<!-- product banner section ends -->