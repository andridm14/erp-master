<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Purchase</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- end -->
    <div class="mt-5"></div>
    <!-- table -->
    <div class="col-xl-10 col-md-10 mb-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tabledata">
                <thead>
                    <tr>
                        <th class="text-center" width="4%">No</th>
                        <th class="text-center">Kode Produk</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">Tahun Produk</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Stock</th>
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
                            <td class="text-center"><?= $m->stock ?> Unit</td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <div class="btn btn-sm btn-outline-info"><i class="fa fa-search"></i></div>
                            </td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <div class="btn btn-sm btn-outline-primary"><i class="fa fa-download"></i></div>
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