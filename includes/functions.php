<?php

require_once '../db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];  // IPK diambil dari konstanta
    $beasiswa = $_POST['beasiswa'];
    $berkas = $_FILES['berkas']['name'];
    $status = "Belum di Verifikasi";

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email salah!";
        exit;
    }

    // Upload file
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($berkas);
    move_uploaded_file($_FILES["berkas"]["tmp_name"], $target_file);

    // Simpan data
    $data = new DataForm();
    $data->name = $name;
    $data->email = $email;
    $data->phone = $phone;
    $data->semester = $semester;
    $data->ipk = $ipk;
    $data->beasiswa = $beasiswa;
    $data->berkas = $berkas;
    $data->status = $status;

    try {
        insert($data);
    }
    catch (\PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Redirect ke halaman hasil
    header("Location: ../views/hasil.php");
}
?>
