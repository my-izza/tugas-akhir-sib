<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Product
                    <small>Carousel</small>
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
                    <h3 class="box-title"> Data Carousel </h3>
                    <div class="pull-right">
                        <a href="<?= site_url('administrator/carousel/add') ?>" class="btn btn-primary btn-flat mb-3" style="float: right;"><i class="fa fa-plus"></i>Tambah Slide</a>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Slide</th>
                                <th>Tanggal Upload</th>
                                <th>Label</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Status Persetujuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            foreach ($row->result() as $key => $data) { ?>

                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->created ?></td>
                                    <td><?= $data->label ?></td>
                                    <td><?= $data->description ?></td>
                                    <td>
                                        <?php if ($data->image != null) { ?>
                                            <img src="<?= base_url() . '/uploads/slide/' . $data->image ?>" style="width: 100px;" alt=""> <br>
                                            <small><?= $data->image ?></small>
                                        <?php } ?>

                                    </td>
                                    <td><?= $data->status_persetujuan ?></td>
                                    <td class="text-center" width="160px">
                                        <a href="<?= site_url('administrator/carousel/edit/' . $data->id_carousel) ?>" onclick="return confirm('Yakin ubah carousel')" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Ubah </a>
                                        <a href="<?= site_url('administrator/carousel/del/' . $data->id_carousel) ?>" onclick="return confirm('Yakin hapus carousel')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus </a>
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