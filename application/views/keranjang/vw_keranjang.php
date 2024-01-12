<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-6 py-5">
            <?php $i = 1; ?>
            <?php foreach ($keranjang as $us): ?>
                <div class="card">
                    <div class="list-group">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item"><?= $us['nama_produk']; ?></li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ol>
                    </div>
                    <div class="card-header justify-content-center">
                        Form Pemesanan
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('Admin/edit') ?>" method="POST">

                            <div class="form-group mb-2">
                                <label for="nama_produk">Nama</label>
                                <input type="text" name="nama_produk" id="nama" value="" class="form-control"
                                    placeholder="Nama">
                                <?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-2">
                                <label for="no_wa">No WhatsApp</label>
                                <input type="text" value="" name="no_wa" id="no_wa" class="form-control"
                                    placeholder="Nomor WhatsApp">
                                <?= form_error('no_wa', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group mb-2">
                                <label for="alamat">Alamat</label>
                                <input type="alamat" value="" name="alamat" id="alamat" class="form-control"
                                    placeholder="Alamat Lengkap">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>





                        </form>

                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Admin/edit') ?>" method="POST">
                            <p1 for="nama_produk">Ringkasan Pemesanan</label>
                                <div class="card">
                                    <div class="card-body">
                                        Total Harga
                                    </div>
                                    <div class="card-body">
                                        Biaya Ongkir
                                    </div>
                                    <div class="card-body">
                                        Diskon/Promo
                                    </div>
                                </div>

                    </div>


                    <button type="submit" name="tambah" class="btn btn-outline-success">Pesan Melalui WhatsApp</button>

                    </form>

                </div>
                <?php $i++; ?>
            <?php endforeach; ?>

        </div>
    </div>
</div>
</div>
</div>

<section class="py-5">

</section>