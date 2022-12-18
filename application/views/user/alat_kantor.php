<!-- products section starts  -->

<section class="products">

    <h1 class="heading"><span>Produk</span> Pilihan </h1>

    <div class="box-container">

        <?php foreach ($alat as $rows) : ?>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() . '/uploads/product/' . $rows->image ?>" class="main-img" alt="">
                    <img src="<?= base_url() . '/uploads/product/' . $rows->image ?>" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="<?= site_url('home/detail/' . $rows->id_product) ?>" class="fas fa-info"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3><?= $rows->name ?></h3>
                    <div class="price">Rp <?= number_format($rows->harga_diskon, 0, ',', '.') . ',00' ?></div>
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