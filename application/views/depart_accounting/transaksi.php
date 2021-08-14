<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penjualan</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- end -->

    <!-- table -->
    <div class="col-xl-11 col-md-10 mb-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tabledata">
                <thead>
                    <tr>
                        <th class="text-center" width="4%">No</th>
                        <th class="text-center">Kode Order</th>
                        <th class="text-center">Kode Produk</th>
                        <th class="text-center">Nama Customer</th>
                        <th class="text-center">Total</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($order as $o) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $o->kd_order ?></td>
                            <td class="text-center"><?= $o->kd_produk ?></td>
                            <td class="text-center"><?= $o->nm_customer ?></td>
                            <td class="text-center">Rp. <?= $o->total ?></td>
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