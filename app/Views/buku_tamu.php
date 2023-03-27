<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="row">
            <div class="col col-md-10">
                <div class="m-4">
                    <form action="<?= base_url('home/savebukutamu'); ?>" class="needs-validation row g-3" method="post" novalidate>
                        <input type="hidden" class="form-control" value="<?= $id; ?>" name="id">

                        <div class="col-md-2">
                            <label class="form-label" for="tanggal">Tanggal </label>
                            <input type="date" class="form-control" value="<?= $tanggal; ?>" name="tanggal" id="tanggal" placeholder="Silahkan masukan tanggal masuk" required>
                            <div class="invalid-feedback">Silahkan masukan data dengan benar</div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="jamdatang">Jam Datang </label>
                            <input type="time" class="form-control" value="<?= $jam_masuk; ?>" name="jamdatang" id="jamdatang" placeholder="Jam kedatangan" required>
                            <div class="invalid-feedback">Silahkan masukan data dengan benar</div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="jam_keluar">Jam Keluar </label>
                            <input type="time" class="form-control" value="<?= $jam_keluar; ?>" name="jam_keluar" id="jam_keluar" placeholder="Jam Keluar">
                            <div class="invalid-feedback">Silahkan masukan data dengan benar</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" class="form-control" value="<?= $nama; ?>" name="nama" id="nama" placeholder="Nama" required>
                            <div class="invalid-feedback">Silahkan masukan data dengan benar</div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label" for="datangdari">Dari</label>
                            <input type="text" class="form-control" value="<?= $dari; ?>" name="datangdari" id="datangdari" placeholder="Instansi atau asal" required>
                            <div class="invalid-feedback">Silahkan masukan data dengan benar</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="telpon">Telpon</label>
                            <input type="text" class="form-control" value="<?= $telpon; ?>" name="telpon" id="telpon" placeholder="No. HP / Telpon" required>
                            <div class="invalid-feedback">Silahkan masukan data dengan benar.</div>
                        </div>
                        <div class="col-md-10">
                            <label for="keperluan" class="form-label">Keperluan</label>
                            <textarea class="form-control" name="keperluan" id="keperluan" rows="3" required><?= $keperluan; ?></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" class="">Simpan</button>
                        </div>
                    </form>

                    <!-- JavaScript for disabling form submissions if there are invalid fields -->

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Self-executing function
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<?= $this->endSection(); ?>