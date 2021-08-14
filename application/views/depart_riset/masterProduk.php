<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Page Heading -->

    <!-- btn -->
    <button class="btn btn-sm btn-primary ml-3" data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus fa-sm"></i>Tambah Produk
    </button>
    <div class="mt-4"></div>
    <!-- end -->

    <!-- table -->
    <div class="col-xl-12 col-md-10 mb-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tabledata">
                <thead>
                    <tr>
                        <th class="text-center" width="4%">No</th>
                        <th class="text-center">Id Produk</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">Tahun Produk</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($item as $m) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $m->id_produk ?></td>
                            <td class="text-center"><?= $m->nm_produk ?></td>
                            <td class="text-center"><?= $m->jenis ?></td>
                            <td class="text-center"><?= $m->tahun_produk ?></td>
                            <td class="text-center">Rp.<?= $m->harga ?></td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_riset/MasterProduk/edit/' . $m->id_produk, '<div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></div>') ?>
                            </td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_riset/MasterProduk/hapus/' . $m->id_produk, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div>') ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'Depart_riset/MasterProduk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Id Produk</label>
                            <input type="text" name="kd_produk" class="form-control" placeholder="Input Id Produk. . .">
                        </div>

                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nm_produk" class="form-control" placeholder="Input Nama Produk. . .">
                        </div>

                        <div class="form-group">
                            <label>Jenis</label>
                            <input type="text" name="jenis" class="form-control" placeholder="Input Jenis. . .">
                        </div>

                        <div class="form-group">
                            <label>Tahun Produksi</label>
                            <input type="date" name="tahun_produk" class="form-control" placeholder="Input Tahun Produksi. . .">
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Input Tahun Produksi. . .">
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