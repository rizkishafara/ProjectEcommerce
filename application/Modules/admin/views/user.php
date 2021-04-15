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
                            <a href="<?php echo site_url('admin/user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user) : ?>
                                            <tr>
                                                <td><?php echo $user->id_user ?></td>
                                                <td><?php echo $user->nama ?></td>
                                                <td><?php echo $user->email ?></td>
                                                <td><?php echo $user->username ?></td>
                                                <td><?php echo $user->role ?></td>
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