<div>
    <div class="container-fluid mb-5">
        <div class="card">
            <div class="card-header">
                <h2>Detail Product</h2>
            </div>

            <div class="card-body">

                <?php foreach ($product as $rows) : ?>

                    <div class="row mt-5">
                        <div class="col-md-4" style="display:block; margin:auto;">
                            <img src="<?= base_url() . '/uploads/product/' . $rows->image ?>" class="card-img-top" alt="">
                        </div>

                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td><strong><?= $rows->name ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Harga Produk</td>
                                    <td>
                                        <div class="price"><strong>Rp <?= number_format($rows->harga_diskon, 0, ',', '.' . ',00')  ?></strong>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kategori Produk</td>
                                    <td><strong><?= $rows->category ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Keterangan Produk</td>
                                    <td><strong><?= $rows->detail ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Stok Produk</td>
                                    <td><strong><?= $rows->stok ?></strong></td>
                                </tr>
                                <tr>
                                    <td><a href="<?= site_url('user/home_user/product') ?>" class="btn sm" style="float: right;">Kembali </a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>