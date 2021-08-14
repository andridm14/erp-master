<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Material</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Page Heading -->

    <div class="mt-5"></div>
    <!-- table -->
    <div class="col-xl-12 col-md-10 mb-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tabledata">
                <thead>
                    <tr>
                        <th class="text-center" width="4%">No</th>
                        <th class="text-center">Kode Material</th>
                        <th class="text-center">Kode Komponen</th>
                        <th class="text-center">jenis</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Harga</th>
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
                            <td class="text-center"><?= $t->kd_komponen ?></td>
                            <td class="text-center"><?= $t->jenis ?></td>
                            <td class="text-center"><?= $t->kategori ?></td>
                            <td class="text-center">Rp. <?= $t->harga ?></td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <div class="btn btn-sm btn-outline-info"><i class="fa fa-search"></i></div>
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


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->