<?php $this->load->view('layouts/head.php') ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <h3><?= $title?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <form action="<?= base_url()?>produk/save" method="Post">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" class="form-control" id="harga_produk" name="harga_produk">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $this->load->view('layouts/footer.php') ?>