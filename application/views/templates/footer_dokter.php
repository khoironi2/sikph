</div>
</div>
</div>
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
<script>
    function autofill() {
        var id_paket_vaksin = document.getElementById('id_paket_vaksin').value;
        $.ajax({
            url: "<?php echo base_url('/'); ?>pasien/layanan_dokter/vaksin/cari",
            data: '&id_paket_vaksin=' + id_paket_vaksin,
            success: function(data) {
                var hasil = JSON.parse(data);
                $.each(hasil, function(key, val) {
                    document.getElementById('id_paket_vaksin').value = val.id_paket_vaksin;
                    document.getElementById('nama_paket_vaksin').value = val.nama_paket_vaksin;
                    document.getElementById('harga_paket_vaksin').value = val.harga_paket_vaksin;
                });
            }
        });
    }

    function autofillSteril() {
        var id_paket_steril = document.getElementById('id_paket_steril').value;
        $.ajax({
            url: "<?php echo base_url('/'); ?>pasien/layanan_dokter/steril/cari",
            data: '&id_paket_steril=' + id_paket_steril,
            success: function(data) {
                var hasil = JSON.parse(data);
                $.each(hasil, function(key, val) {
                    document.getElementById('id_paket_steril').value = val.id_paket_steril;
                    document.getElementById('nama_paket_steril').value = val.nama_paket_steril;
                    document.getElementById('harga_paket_steril').value = val.harga_paket_steril;
                });
            }
        });
    }

    function total() {
        var as = parseInt(document.getElementById('berat_penjualan').value);
        var ad = parseInt(document.getElementById('harga_katalog').value);
        var jumlah_harga = as * ad;
        document.getElementById('total_penjualan').value = jumlah_harga;
    }
</script>
</body>

</html>