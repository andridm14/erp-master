<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Stock Produk</h1>
    </div>

    <!-- table -->
    <div class="col-xl-7 col-md-10 mb-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tabledata">
                <thead>
                    <tr>
                        <th class="text-center" width="10%">No</th>
                        <th class="text-center" width="50%">Id Produk</th>
                        <th class="text-center" width="30%">Stock</th>
                        <th class="text-center" colspan="1"></th>
                        <th class="text-center" colspan="1"></th>
                        <th class="text-center" colspan="1"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($item as $m) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $m->id_produk ?></td>
                            <td class="text-center"><?= $m->stock ?></td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <div class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#tambah_produk"><i class="fa fa-plus"></i></div>
                            </td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_riset/Stock/edit/' . $m->id_produk, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div>') ?>
                            </td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_riset/Stock/hapus/' . $m->id_produk, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div>') ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- end -->

    <!-- modal tambah -->
    <div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'Depart_riset/Stock/update'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Id Produk</label>
                            <input type="text" name="kd_produk" value="<?= $m->id_produk ?>" class=" form-control" placeholder="Input Id Produk. . .">
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="stock" class="form-control" placeholder="Input Jumlah Stock. . .">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary col-sm-4">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->