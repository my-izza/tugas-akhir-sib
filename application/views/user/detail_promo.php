<div>
    <div class="container-fluid mb-5">
        <div class="card">
            <div class="card-header">
                <h2>Detail Produk</h2>
            </div>

            <div class="card-body">

                <?php foreach ($promo as $rows) : ?>

                    <div class="row mt-5">
                        <div class="col-md-4" style="display:block; margin:auto;">
                            <img src="<?= base_url() . '/uploads/promo/' . $rows->image ?>" class="card-img-top" alt="" width="30">
                        </div>

                        <div class="col-md-8">
                            <table class="table" width="200">
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
                                    <td>Harga Asli</td>
                                    <td>
                                        <div class="price"><strong>Rp <?= number_format($rows->harga_asli, 0, ',', '.' . ',00')  ?></strong>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kategori Produk</td>
                                    <td><strong><?= $rows->category ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Keterangan Produk</td>
                                    <td>
                                        <div><strong><?= $rows->detail ?></strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok Produk</td>
                                    <td><strong><?= $rows->stok ?></strong></td>
                                </tr>
                                <tr>
                                    <td><a href="<?= site_url('home') ?>" class="btn sm" style="float: right;">Kembali </a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>