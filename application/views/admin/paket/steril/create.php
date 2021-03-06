<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="metismenu-icon <?= $icon; ?> icon-gradient bg-mean-fruit"></i>
                </i>
            </div>
            <div><?= $halaman; ?></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Form create steril
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/paket/steril/create'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_paket_steril">Nama Paket steril</label>
                        <input type="text" class="form-control" id="nama_paket_steril" name="nama_paket_steril" required>
                    </div>

                    <div class="form-group">
                        <label for="keterangan_paket_steril">Keterangan Paket steril</label>
                        <input type="text" class="form-control" id="keterangan_paket_steril" name="keterangan_paket_steril" required>
                    </div>

                    <div class="form-group">
                        <label for="harga_paket_steril">Harga Paket steril</label>
                        <input type="text" class="form-control" id="harga_paket_steril" name="harga_paket_steril" required>
                    </div>

                    <div class="form-group">
                        <label for="gambar_paket_steril">Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar_paket_steril" name="gambar_paket_steril">
                            <label class="custom-file-label" for="gambar_paket_steril">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>