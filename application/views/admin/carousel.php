<div class="container" style="margin-top: 100px;">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah_slider"> <i class="fas fa-plus fa-sm"></i> Tambah Slider </button>

    <h3 align=center><b>DATA SLIDER</b></h3>

    <div class="container">
        <table class="table table-border">
            <tr align=center>
                <th width="10px"> NO </th>
                <th width="50px"> NAMA SLIDER </th>
                <th width="50px"> TANGGAL UPLOAD </th>
                <th width="50px"> GAMBAR </th>
                <th width="10px" colspan="3"> AKSI </th>
            </tr>

            <?php

            $no = 1;

            foreach ($product as $barang) : ?>

                <tr align=center>
                    <td width="10px"><?= $no++ ?></td>
                    <td><?= $barang->nama_slider ?></td>
                    <td><?= $barang->tgl_upload ?></td>
                    <td><img src="<?= base_url() . '/uploads/' . $barang->image ?>" width="100" height="100"></td>
                    <td width="10px">
                        <div class="btn btn-success btn-sm "> <i class="fas fa-search-plus"></i></div>
                    </td>
                    <td width="10px">
                        <?php echo anchor('administrator/carousel/edit/' . $barang->id_slider, '<div class="btn btn-warning btn-sm "> <i class="fa fa-edit"></i></div>') ?>
                    </td>
                    <td width="10px">
                        <?php echo anchor('administrator/carousel/hapus/' . $barang->id_slider, '<div class="btn btn-danger btn-sm "> <i class="fa fa-trash"></i></div>') ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_slider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Slider</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'administrator/carousel/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label> Nama Slider</label>
                        <input type="text" name="nama_slider" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label> Tanggal Upload </label>
                        <input type="date" name="tgl_upload" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label> Gambar Slider </label>
                        <input type="file" name="image" class="form-control">
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>

            </form>
        </div>
    </div>
</div>