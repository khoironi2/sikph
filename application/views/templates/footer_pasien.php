<div class="app-wrapper-footer">
    <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <?= date('Y'); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<script src="<?= base_url('assets/vendors') ?>/jquery-3.5.1.js"></script>
<script src="<?= base_url('assets/admin') ?>/scripts/main.js"></script>
<script src="<?= base_url('assets/vendors/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/select/select2.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();

        $('.select2').select2();
    });
</script>
</body>

</html>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Boking v aksin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off" action="<?= base_url('admin/layanan_dokter/jadwal_dokter/insert') ?>" method="POST">

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Hewan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_hewan_vaksin" class="form-control" placeholder="nama peliharaan" required>
                            <input type="text" name="id_pasien" value="<?= $user['id_users'] ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_dokter" class="col-sm-2 col-form-label">Paket Vaksin</label>
                        <div class="col-sm-10">
                            <select name="id_dokter_vaksin" class="form-control select2" style="width: 100%;" id="id_dokter_vaksin" required multiple>
                                <?php foreach ($paketvaksin as $data) : ?>
                                    <option value="<?= $data['id_paket_vaksin']; ?>"><?= $data['nama_paket_vaksin']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jam</label>
                        <div class="col">
                            <input type="time" name="jam_mulai" class="form-control" placeholder="Jam Mulai" required>
                        </div>
                        <div class="col">
                            <input type="time" name="jam_selesai" class="form-control" placeholder="Jam Tutup" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_dokter" class="col-sm-2 col-form-label">Dokter</label>
                        <div class="col-sm-10">
                            <select name="id_dokter_vaksin" class="form-control select2" style="width: 100%;" id="id_dokter_vaksin" required multiple>
                                <?php foreach ($dokter as $data) : ?>
                                    <option value="<?= $data['id_users']; ?>"><?= $data['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>