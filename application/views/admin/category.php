<div class="container" style="margin-top: 100px;">
    <a href="<?= base_url('administrator/category/add') ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus fa-sm"></i>Tambah Category</a>

    <h3 align=center><b>DATA SLIDER</b></h3>

    <div class="container">
        <table class="table table-border">
            <tr align=center>
                <th width="10px"> NO </th>
                <th width="50px"> NAMA KATEGORI </th>
                <th width="50px"> TANGGAL CREATED </th>
                <th width="50px"> TANGGAL UPDATED </th>
                <th width="50px"> GAMBAR </th>
                <th width="10px" colspan="3"> AKSI </th>
            </tr>

            <?php

            $no = 1;

            foreach ($row->result() as $key => $data) : ?>

                <tr align=center>
                    <td width="10px"><?= $no++ ?></td>
                    <td><?= $data->nama_category ?></td>
                    <td><?= $data->created ?></td>
                    <td><?= $data->updated ?></td>
                    <td><?= $data->image ?></td>
                    <td width="10px">
                        <div class="btn btn-success btn-sm "> <i class="fas fa-search-plus"></i></div>
                    </td>
                    <td width="10px">
                        <?php echo anchor('administrator/category/edit/' . $barang->id_slider, '<div class="btn btn-warning btn-sm "> <i class="fa fa-edit"></i></div>') ?>
                    </td>
                    <td width="10px">
                        <?php echo anchor('administrator/category/del/' . $barang->id_slider, '<div class="btn btn-danger btn-sm "> <i class="fa fa-trash"></i></div>') ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>