<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Order</h1>
    </div>

    <!-- table -->
    <div class="col-xl-11 col-md-10 mb-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tabledata">
                <thead>
                    <tr>
                        <th class="text-center" width="4%">No</th>
                        <th class="text-center">Kode Order</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Nama Customer</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Tanggal Pengiriman</th>
                        <th class="text-center">Total</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($order as $m) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $m->kd_order ?></td>
                            <td class="text-center"><?= $m->nm_produk ?></td>
                            <td class="text-center"><?= $m->nm_customer ?></td>
                            <td class="text-center"><?= $m->jumlah ?></td>
                            <td class="text-center">Rp. <?= $m->harga ?></td>
                            <td class="text-center"><?= $m->pengiriman ?></td>
                            <td class="text-center">Rp. <?= $m->total ?></td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_Market/DataOrder/hapus/' . $m->kd_order, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div>') ?>

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