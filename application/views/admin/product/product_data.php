<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Product
                    <small>Data Product</small>
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main Content -->
<section class="content">

    <div class="card">
        <div class="card-header">

            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"> Data Product </h3>
                    <div class="pull-right">
                        <a href="<?= site_url('administrator/product/add') ?>" class="btn btn-primary btn-flat mb-3" style="float: right;"><i class="fa fa-plus"></i> Tambah Product</a>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> NO </th>
                                <th> PRODUK </th>
                                <th> DETAIL </th>
                                <th> CATEGORY </th>
                                <th> HARGA </th>
                                <th> STOK </th>
                                <th> GAMBAR </th>
                                <th> PERSETUJUAN </th>
                                <th> ACTION </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            foreach ($row->result() as $key => $data) { ?>

                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->detail ?></td>
                                    <td><?= $data->category ?></td>
                                    <td><?= $data->harga_diskon ?> <br> <small>Harga Asli : <?= $data->harga_asli ?> </small></td>
                                    <td><?= $data->stok ?></td>
                                    <td>
                                        <?php if ($data->image != null) { ?>
                                            <img src="<?= base_url() . '/uploads/product/' . $data->image ?>" style="width: 100px;" alt=""> <br>
                                            <small><b>Produk</b> : <?= $data->image ?></small>
                                        <?php } ?>

                                    </td>
                                    <td><?= $data->status_persetujuan ?></td>
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('administrator/product/edit/' . $data->id_product) ?>" onclick="return confirm('Yakin ubah Produk')" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Ubah </a>
                                        <a href="<?= site_url('administrator/product/del/' . $data->id_product) ?>" onclick="return confirm('Yakin hapus Produk')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus </a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>