<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo 'Halaman Tambah Produk'; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Produk
                </div>  

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control"
                                value="<?= set_value('nama_produk') ?>" id="nama_produk" placeholder="Nama Produk">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Deskripsi Produk</label>
                            <input type="text" name="deskripsi" class="form-control"
                                value="<?= set_value('deskripsi') ?>" id="deskripsi" placeholder="Deskripsi Produk">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Harga Produk</label>
                            <input type="number" name="harga" class="form-control"
                                value="<?= set_value('harga') ?>" id="harga" placeholder="Harga Produk">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control"
                            value="<?= set_value('gambar') ?>" id="gambar" accept=".jpg, .jpeg">
                        </div>

                        <a href="<?= base_url('Admin') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<section class="py-5">

</section>
