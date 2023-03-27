<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Buku Tamu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
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

                    </td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>