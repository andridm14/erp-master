<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Customer</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <!-- Page Heading -->

    <div class="mt-5"></div>

    <!-- btn add -->
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus fa-sm"></i> data customer
    </button>
    <div class="mt-4"></div>
    <!-- end -->

    <!-- table -->
    <div class="col-xl-11 col-md-10 mb-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="tabledata">
                <thead>
                    <tr>
                        <th class="text-center" width="4%">No</th>
                        <th class="text-center">Nama Customer</th>
                        <th class="text-center">Prusahaan</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($cust as $c) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $c->nm_customer ?></td>
                            <td class="text-center"><?= $c->prusahaan ?></td>
                            <td class="text-center"><?= $c->alamat ?></td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <div class="btn btn-sm btn-outline-danger"><i class="fa fa-search"></i></div>
                            </td>
                            <td style="width: 8px;text-align: center;vertical-align: middle;">
                                <?= anchor('Depart_Market/Customer/hapus/' . $c->id_customer, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div>') ?>
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