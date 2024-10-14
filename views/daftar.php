<?php include '../includes/header.php'; ?>

<?php

$paket_default = "A";

if (isset($_GET['paket'])) {
    $paket_default = $_GET['paket'];
}

?>

<div class="container mt-5">
    <h2>Form Pendaftaran Beasiswa</h2>

    <form action="../includes/functions.php" method="POST" enctype="multipart/form-data">
    <div class="form-group mb-2">
        <label for="name">Nama:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group mb-2">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group mb-2">
        <label for="phone">Nomor HP:</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group mb-2">
        <label for="semester">Semester:</label>
        <select class="form-select" id="semester" name="semester" required>
        <?php for($i = 1; $i <= 8; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor; ?>
        </select>
    </div>

    <div class="form-group mb-2">
        <label for="ipk">IPK:</label>
        <input type="text" class="form-control" id="ipk" name="ipk" readonly>
    </div>

    <div class="form-group mb-2">
        <label for="beasiswa">Pilih Beasiswa:</label>
        <select class="form-select" id="beasiswa" name="beasiswa" required>
            <option value="Paket A" <?php echo ($paket_default == "A") ? "selected" : "" ?>>Beasiswa Paket A</option>
            <option value="Paket B" <?php echo ($paket_default == "B") ? "selected" : "" ?>>Beasiswa Paket B</option>
            <option value="Paket C" <?php echo ($paket_default == "C") ? "selected" : "" ?>>Beasiswa Paket C</option>
        </select>
    </div>

    <div class="form-group">
        <label for="berkas">Upload Berkas (PDF/JPG/ZIP):</label>
        <input type="file" class="form-control" id="berkas" name="berkas">
        </div>

    <button type="submit" class="btn btn-primary mt-3" name="submit" id="submit_button">Daftar</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
