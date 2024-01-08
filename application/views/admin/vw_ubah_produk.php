<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Produk
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Admin/edit') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $produk['id'] ?>" id="id" class="form-control">
                        <div class="form-group mb-2">
                            <label for="nama_produk">Nama</label>
                            <input type="text" name="nama_produk" id="nama" value="<?= $produk['nama_produk'] ?>"
                                class="form-control" placeholder="Nama">
                            <?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2">
                            <label for="deskripsi">deskripsi</label>
                            <input type="text" value="<?= $produk['deskripsi'] ?>" name="deskripsi" id="deskripsi"
                                class="form-control" placeholder="Deskripsi">
                            <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group mb-2">
                            <label for="harga">Harga</label>
                            <input type="harga" value="<?= $produk['harga'] ?>" name="harga" id="harga"
                                class="form-control" placeholder="harga">
                            <?= form_error('Harga', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>



                        <a href="<?= base_url('Admin') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Produk</button>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<section class="py-5">

</section>
