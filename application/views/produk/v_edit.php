<?php $this->load->view('layouts/head.php') ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <h3><?= $title?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <form action="<?= base_url()?>produk/update" method="Post">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="hidden" value="<?= $id?>" class="form-control" id="id_produk" name="id_produk">
                        <input type="text" value="<?= $nama_produk?>" class="form-control" id="nama_produk" name="nama_produk">
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" class="form-control" value="<?= $harga_produk?>" id="harga_produk" name="harga_produk">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $this->load->view('layouts/footer.php') ?>