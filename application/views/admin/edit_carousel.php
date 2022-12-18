<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Slider</h3>

    <form method="post" action="<?php echo base_url() . 'administrator/carousel/update' ?>">

        <div class="for-group">
            <label for="">Nama Slider</label>
            <input type="hidden" name="id_slider" class="form-control" value="<?= $barang->id_slider ?>">
            <input type="text" name="nama_slider" class="form-control" value="<?= $barang->nama_slider ?>">
        </div>

        <div class="for-group">
            <label for="">Gambar</label>
            <input type="text" name="image" class="form-control" value="<?= $barang->image ?>">
            <img src="<?= base_url() . '/uploads/' . $barang->image ?>" name="image" alt="">
        </div>

        <button type="submit" name="<?= $page ?>" class="btn btn-success btn-sm "><i class="fa fa-paper-plane"></i> SIMPAN </button>

        <a href="<?= base_url('category') ?>" class="btn btn-danger btn-flat">Batal</a>
    </form>
</div>
</div>