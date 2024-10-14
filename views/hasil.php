<?php
require_once '../db.php';
include '../includes/header.php';


$alldata = get_all();
?>

<div class="container mt-5">
    <h2>Hasil Pendaftaran Beasiswa</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Semester</th>
                <th>IPK</th>
                <th>Jenis Beasiswa</th>
                <th>Berkas</th>
                <th>Status Ajuan</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($alldata as $data) :
                if ($data['status'] === 1) {
                    $status = 'Sudah di Verifikasi';
                } else {
                    $status = 'Belum di Verifikasi';
                }

            ?>
                <tr>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['phone'] ?></td>
                    <td><?= $data['semester'] ?></td>
                    <td><?= $data['ipk'] ?></td>
                    <td><?= $data['beasiswa'] ?></td>
                    <td>
                        <a href="../assets/uploads/<?= $data['berkas'] ?>" target="_blank"><?= $data['berkas'] ?></a>
                    </td>
                    <td><?= $status ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php //include '../includes/footer.php'; 
?>