<div class="app-main__outer">
    <div class="app-main__inner">
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Form create penitipan
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/pets_care/penitipan/update/' . $penitipan['id_boking_penitipan']); ?>" method="POST">
                            <input type="hidden" value="<?= $penitipan['id_boking_penitipan']; ?>" name="id_boking_penitipan">
                            <div class="form-group">
                                <label for="id_users_pet">Nama Pasien</label>
                                <select class="form-control" id="id_users_pet" name="id_users_pet" required>
                                    <?php foreach ($users as $user) : ?>
                                        <option value="<?= $user['id_users']; ?>"><?= $user['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama_hewan_penitipan">Nama hewan penitipan</label>
                                <input type="text" class="form-control" id="nama_hewan_penitipan" name="nama_hewan_penitipan" required value="<?= $penitipan['nama_hewan_penitipan']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_hari_penitipan">Jumlah hari penitipan</label>
                                <input type="text" class="form-control" id="jumlah_hari_penitipan" name="jumlah_hari_penitipan" required value="<?= $penitipan['jumlah_hari_penitipan']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="id_paket_penitipan">Paket Penitipan</label>
                                <select class="form-control" id="id_paket_penitipan" name="id_paket_penitipan" required>
                                    <?php foreach ($pakets as $paket) : ?>
                                        <option value="<?= $paket['id_paket_penitipan']; ?>"><?= $paket['nama_paket_penitipan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="keterangan_tambahan_steril">keterangan tambahan</label>
                                <input type="text" class="form-control" id="keterangan_tambahan_steril" name="keterangan_tambahan_steril" required value="<?= $penitipan['keterangan_tambahan_steril']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="total_harga_penitipan">Total Harga</label>
                                <input type="text" class="form-control" id="total_harga_penitipan" name="total_harga_penitipan" required value="<?= $penitipan['total_harga_penitipan']; ?>">
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

    