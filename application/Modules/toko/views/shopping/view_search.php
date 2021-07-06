<div id="container">
    <?php
    if (!empty($produk)) {
        foreach ($produk as $p) {
    ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="kotak">
                    <form method="post" action="<?php echo base_url(); ?>toko/shopping/tambah" method="post" accept-charset="utf-8">
                        <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/' . $p['gambar']; ?>" /></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"><?php echo $p['nama_produk']; ?></a>
                            </h4>
                            <h5>Rp. <?php echo number_format($p['harga'], 0, ",", "."); ?></h5>
                            <p class="card-text"><?php echo $p['deskripsi']; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url(); ?>toko/shopping/detail_produk/<?php echo $p['id_produk']; ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a>

                            <input type="hidden" name="id" value="<?php echo $p['id_produk']; ?>" />
                            <input type="hidden" name="nama" value="<?php echo $p['nama_produk']; ?>" />
                            <input type="hidden" name="harga" value="<?php echo $p['harga']; ?>" />
                            <input type="hidden" name="gambar" value="<?php echo $p['gambar']; ?>" />
                            <input type="hidden" name="qty" value="1" />
                            <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                        </div>

                    </form>
                </div>
            </div>

    <?php
        }
    } else {
        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
    }
    ?>
</div>