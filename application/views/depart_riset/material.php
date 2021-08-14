<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Material</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Page Heading -->

    <div class="mt-5"></div>

    <!-- btn add -->
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>Tambah Material
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
                        <th class="text-center">Kode Material</th>
                        <th class="text-center">Nama Material</th>
                        <th class="text-center">Kode Komponen</th>
                        <th class="text-center">Nama Komponen</th>
                        <th class="text-center">jenis</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">harga</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mate as $t) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $t->kd_material ?></td>
                            <td class="text-center"><?= $t->nm_material ?></td>
                            <td class="text-center"><?= $t->kd_komponen ?></td>
                            <td class="text-center"><?= $t->nm_komponen ?></td>
                            <td class="text-center"><?= $t->jenis ?></td>
                            <td class="text-center"><?= $t->kategori ?></td>
                            <td class="text-center"><?= $t->harga ?></td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <div class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#edit_data"><i class="fa fa-edit"></i></div>
                            </td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_accounting/Material/hapus/' . $t->id_operasional, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div>') ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">Input Data BOM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'Depart_riset/Material/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Material</label>
                            <input type="text" name="kd_material" class="form-control" placeholder="Input Kode Material. . .">
                        </div>
                        <div class="form-group">
                            <label>Nama Material</label>
                            <input type="text" name="nm_material" class="form-control" placeholder="Input Nama Material. . .">
                        </div>

                        <div class="form-group">
                            <label>Kode Komponen</label>
                            <input type="text" name="kd_komponen" class="form-control" placeholder="Input Kode Komponen. . .">
                        </div>
                        <div class="form-group">
                            <label>Nama Komponen</label>
                            <input type="text" name="nm_komponen" class="form-control" placeholder="Input Nama Komponen. . .">
                        </div>

                        <div class="form-group">
                            <label>Jenis</label>
                            <input type="text" name="jenis" class="form-control" placeholder="Input Jenis. . .">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori" class="form-control" placeholder="Input Kategori. . .">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Input Harga. . .">
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
    <div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data BOM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'Depart_riset/Material/update'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Material</label>
                            <input type="hidden" name="id_operasional" class="form-control" value="<?= $t->id_operasional ?>">
                            <input type="text" name="kd_material" class="form-control" value="<?= $t->kd_material ?>" placeholder="Input Kode Material. . .">
                        </div>

                        <div class="form-group">
                            <label>Nama Material</label>
                            <input type="text" name="nm_material" class="form-control" value="<?= $t->nm_material ?>" placeholder="Input Nama Material. . .">
                        </div>

                        <div class="form-group">
                            <label>Kode Komponen</label>
                            <input type="text" name="kd_komponen" class="form-control" value="<?= $t->kd_komponen ?>" placeholder="Input Kode Komponen. . .">
                        </div>

                        <div class="form-group">
                            <label>Nama Komponen</label>
                            <input type="text" name="nm_komponen" class="form-control" value="<?= $t->nm_komponen ?>" placeholder="Input Nama Komponen. . .">
                        </div>
                        <div class="form-group">
                            <label>Jenis</label>
                            <input type="text" name="jenis" class="form-control" value="<?= $t->jenis ?>" placeholder="Input Kategori. . .">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="<?= $t->kategori ?>" placeholder="Input Kategori. . .">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?= $t->harga ?>" placeholder="Input Kategori. . .">
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