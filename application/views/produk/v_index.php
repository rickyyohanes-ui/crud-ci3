<?php $this->load->view('layouts/head.php') ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <h3><?= $title?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="<?= base_url()?>produk/tambah_produk"><button type="button" class="btn btn-primary">Tambah Produk</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 0; foreach($produk as $row) { $count++ ?>
                            <tr>
                                <th scope="row"><?php echo $count?></th>
                                <td><?php echo $row->nama_produk?></td>
                                <td>Rp. <?php echo $row->harga_produk?></td>
                                <td><a href="<?=base_url()?>produk/edit/<?= $row->id?>"><button type="button" class="btn btn-warning">Edit</button></a> <a href="<?=base_url()?>produk/delete/<?= $row->id?>"><button type="button" class="btn btn-danger">delete</button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $this->load->view('layouts/footer.php') ?>