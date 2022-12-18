    <!-- home Carousel starts  -->

    <section class="home">

        <div class="container">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner">
                    <?php foreach ($carousel as $key => $rows) : ?>
                        <div class="carousel-item <?php echo ($key == 0) ? 'active' : ''  ?>" data-bs-interval="2000">
                            <img src=" <?php echo base_url() . '/uploads/slide/' . $rows['image'] ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $rows['label'] ?></h5>
                                <p><?php echo $rows['description'] ?></p>
                                <a href="#" class="btn">Belanja Sekarang</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


    </section>

    <!-- home section ends -->

    <!-- banner section starts  -->

    <section class="banner">

        <h1 class="heading"> Promo <span> Special </span> </h1>

        <div class="box-container">

            <?php foreach ($promo as $rows) { ?>

                <a href="<?= site_url('home/detailpromo/' . $rows['id_promo']) ?>" class="box">
                    <img src="<?php echo base_url() . '/uploads/promo/' . $rows['image'] ?>" alt="">
                    <div class="content">
                        <span>special <?php echo $rows['label'] ?></span>
                        <h3>Diskon <?php echo $rows['diskon'] ?>% off</h3>
                    </div>
                    <h3><?php echo $rows['name'] ?></h3>
                </a>
            <?php } ?>

        </div>

    </section>

    <!-- banner section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals">

        <h1 class="heading"> Produk <span> Terbaru </span> </h1>

        <div class="box-container">

            <?php foreach ($newproduct as $rows) { ?>
                <div class="box">
                    <div class="image">
                        <img src="<?= base_url() . '/uploads/newproduct/' . $rows->image ?>" class="main-img" alt="">
                        <img src="<?= base_url() . '/uploads/newproduct/' . $rows->image ?>" class="hover-img" alt="">
                    </div>
                    <div class="content">
                        <h3><?= $rows->name ?></h3>
                        <div class="price">Rp <?= number_format($rows->harga_diskon, 0, ',', '.') . ',00' ?> <span> Rp <?= number_format($rows->harga_asli, 0, ',', '.') . ',00'  ?></span> </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                </div>
            <?php } ?>


        </div>

    </section>

    <!-- arrivals section ends -->

    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000
            })
        })
    </script>