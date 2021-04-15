<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!--Content-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>deskripsi</th>
                                            <th>gambar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($barang as $row) : ?>
                                            <tr>
                                                <td><?php echo $row->id_produk ?></td>
                                                <td><?php echo $row->nama_produk ?></td>
                                                <td><?php echo $row->harga ?></td>
                                                <td><?php echo $row->kategori ?></td>
                                                <td><?php echo $row->deskripsi ?></td>
                                                <td><?php echo $row->gambar ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End of Content-->

                </div>
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>