<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="header">
            <div class="col col-md-12">
                <h2>Daftar buku tamu</h2>
            </div>
            <div class="btn">
                <button type="button" class="btn btn-outline-success" onclick="tambahtamu()">Tambah</button>
            </div>
        </div>


        <div class="col col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Dari</th>
                        <th scope="col">Telpon</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1;
                    foreach ($datatamu as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $data['tanggal_masuk'] ?></td>
                            <td><?= $data['jam_masuk'] ?></td>
                            <td><?= $data['jam_keluar'] ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['dari_mana']; ?></td>
                            <td><?= $data['telpon']; ?></td>
                            <td><?= $data['keperluan']; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-warning" onclick="edittamu(<?= $data['id']; ?>)">Edit</button>
                                    <button type="button" class="btn btn-outline-danger" onclick="hapustamu(<?= $data['id']; ?>)">Hapus</button>
                                </div>
                                <!-- <a href="#" class="btn btn-warning btn-padding-y-sm" tabindex="-1" role="button">Edit</a>
                                <a href="#" class="btn btn-danger" tabindex="-1" role="button">hapus</a> -->

                            </td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function hapustamu(id) {
        pesan = confirm('Hapus data ini?');
        if (pesan == true) {
            window.location = location.origin + "/home/hapusbukutamu/" + id
        }
    }

    function edittamu(id) {
        window.location = location.origin + "/home/bukutamu/" + id
    }

    function tambahtamu() {
        window.location = location.origin + "/home/bukutamu"
    }
</script>
<?= $this->endSection(); ?>