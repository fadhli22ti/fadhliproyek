<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url('Admin/tambah') ?> " class="btn btn-info mb-2">Tambah Produk</a>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php $i = 1; ?>
            <?php foreach ($produk as $us): ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/') ?>images/tes/ts.jpeg" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">
                                    <?= $us['nama_produk']; ?>
                                </h5>
                                <p>
                                    <?= $us['deskripsi']; ?>
                                </p>
                                <!-- Product price-->
                                <?= $us['harga']; ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <td>
                                <a href="<?= base_url('Admin/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Admin/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>                             
                            </td>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5">

</section>