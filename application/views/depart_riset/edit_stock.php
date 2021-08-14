<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-edit"></i>Edit Produk</h1>
    </div>

    <?php foreach ($item as $m) : ?>

        <form action="<?= base_url() . 'Depart_riset/Stock/update' ?>" method="post">
            <div class="form-group">
                <label>Kode Produk</label>
                <input type="text" name="nama_produk" class="form-control col-sm-4" value="<?= $m->id_produk ?>">
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="text" name="stock" class="form-control col-sm-4" value="<?= $m->stock ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm col-sm-2">Save</button>
            <a href="<?= base_url() . 'Depart_riset/Stock/index' ?>" button class="btn btn-danger btn-sm col-sm-2">Close</a>
        </form>

    <?php endforeach; ?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->