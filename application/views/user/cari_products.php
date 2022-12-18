<!-- products section starts  -->

<section class="products">

    <h1 class="heading"><span>Produk</span> Ditemukan </h1>

    <div class="box-container">

        <?php foreach ($product as $rows) : ?>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() . '/uploads/product/' . $rows->image ?>" class="main-img" alt="">
                    <img src="<?= base_url() . '/uploads/product/' . $rows->image ?>" class="hover-img" alt="">
                    <div class="icons">
                        <!-- keranjang -->
                        <a href="<?= site_url('user/home_user/keranjang/' . $rows->id_product) ?>" class="fas fa-shopping-cart"></a>
                        <!-- detail -->
                        <a href="<?= site_url('home/detail/' . $rows->id_product) ?>" class="fas fa-info"></a>
                        <!-- suka -->
                        <a href="#" class="fas fa-heart"></a>
                        <!-- share -->
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3><?= $rows->name ?></h3>
                    <div class="price">Rp <?= number_format($rows->harga_diskon, 0, ',', '.') . ',00' ?> <span> Rp <?= number_format($rows->harga_asli, 0, ',', '.') . ',00'  ?></span></div>
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