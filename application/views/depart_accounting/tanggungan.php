<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Material</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Page Heading -->

    <div class="mt-5"></div>
    <!-- btn add  -->
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>Tambah Data
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
                        <th class="text-center">Kode Tanggungan</th>
                        <th class="text-center">jenis</th>
                        <th class="text-center">Biaya</th>
                        <th class="text-center">Tempo</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($tgg as $t) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $t->kd_tanggungan ?></td>
                            <td class="text-center"><?= $t->jenis ?></td>
                            <td class="text-center">Rp. <?= $t->biaya ?></td>
                            <td class="text-center"><?= $t->tempo ?></td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <div class="btn btn-sm btn-outline-primary"><i class="fa fa-edit" data-toggle="modal" data-target="#edit_produk"></i></div>
                            </td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_accounting/Tanggungan/hapus/' . $t->id_tanggungan, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div>') ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end -->

    <!-- modal tambah -->
    <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Tanggungan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'Depart_accounting/Tanggungan/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Tanggungan</label>
                            <input type="text" name="kd_tanggungan" class="form-control" placeholder="Input Kode Tanggungan. . .">
                        </div>

                        <div class="form-group">
                            <label>Jenis</label>
                            <input type="text" name="jenis" class="form-control" placeholder="Input Jenis. . .">
                        </div>

                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="text" name="biaya" class="form-control" placeholder="Input Biaya. . .">
                        </div>

                        <div class="form-group">
                            <label>Tempo</label>
                            <input type="date" name="tempo" class="form-control" placeholder="Input Tempo. . .">
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

    <!-- modal edit -->
    <div class="modal fade" id="edit_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'Depart_accounting/Tanggungan/update'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Tanggungan</label>
                            <input type="hidden" name="id_tanggungan" class="form-control" value="<?= $t->id_tanggungan ?>">
                            <input type="text" name="kd_tanggungan" class="form-control" value="<?= $t->kd_tanggungan ?>" placeholder="Input Kode Tanggungan. . .">
                        </div>

                        <div class="form-group">
                            <label>Jenis</label>
                            <input type="text" name="jenis" class="form-control" value="<?= $t->jenis ?>" placeholder="Input Jenis. . .">
                        </div>

                        <div class="form-group">
                            <label>Biaya</label>
                            <input type="text" name="biaya" class="form-control" value="<?= $t->biaya ?>" placeholder="Input Biaya. . .">
                        </div>

                        <div class="form-group">
                            <label>Tempo</label>
                            <input type="date" name="tempo" class="form-control" value="<?= $t->tempo ?>" placeholder="Input Tempo. . .">
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