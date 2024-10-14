<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "test_beasiswa";

function connectDB() {
    global $host, $user, $pass, $db_name;

    $connection = new \PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
	$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $connection;
}

class DataForm {
    public $name;
    public $email;
    public $phone;

    /** @var int */
    public $semester;
    
    /** @var float */
    public $ipk;
    
    public $beasiswa;
    public $berkas;
    public $status;
}

function insert(DataForm $data) {
    $conn = connectDB();
    $sql = "INSERT INTO data_mahasiswa (name, email, phone, semester, ipk, beasiswa, berkas, status) VALUES (:name, :email, :phone, :semester, :ipk, :beasiswa, :berkas, :status)";

    $stmt = $conn->prepare($sql);

    // Bind the parameter one by one (not together)
    $stmt->bindParam(':name', $data->name);
    $stmt->bindParam(':email', $data->email);
    $stmt->bindParam(':phone', $data->phone);
    $stmt->bindParam(':semester', $data->semester);
    $stmt->bindParam(':ipk', $data->ipk);
    $stmt->bindParam(':beasiswa', $data->beasiswa);
    $stmt->bindParam(':berkas', $data->berkas);
    $stmt->bindParam(':status', $data->status);

    $stmt->execute();
}

/** @var DataForm[] */
function get_all() {
    $conn = connectDB();
    $sql = "SELECT * FROM data_mahasiswa";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
}

?>