<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">category</li>
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
                    <h3 class="box-title"><?= ucfirst($page) ?> Category </h3>
                    <div class="pull-right">
                        <a href="<?= site_url('administrator/category') ?>" class="btn btn-warning btn-flat mb-3" style="float: right;"><i class="fa fa-undo"></i> Kembali </a>
                    </div>
                </div>

                <div class="box-body mt-5">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4" style="display:block; margin:auto;">
                            <form action="<?= site_url('administrator/category/process') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <input type="hidden" name="id" value="<?= $row->id_category ?>">
                                    <input type="text" name="name" class="form-control" value="<?= $row->name ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" name="image" class="form-control" value="">
                                    <?php if ($page == 'edit') {
                                        if ($row->image != null) { ?>
                                            <div>
                                                <img src="<?= base_url() . '/uploads/category/' . $row->image ?>" style="width: 50%px;" alt="">
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Simpan</button>
                                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>

</section>