<div class="container" style="margin-top: 100px;">

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= ucfirst($page) ?> Category </h3>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= base_url('administrator/category/process') ?>" method="post">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="hidden" name="id" class="form-control" value="<?= $row->id_category ?>">
                            <input type="text" name="name" class="form-control" value="<?= $row->name ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>