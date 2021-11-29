<?php
require 'conn.php';

$nama = $_POST['cust_name'];
$nric = $_POST['nric'];
$kata = $_POST['katalaluan'];

$sql = "INSERT INTO customer (nric, katalaluan, cust_name) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$kata = password_hash($kata, PASSWORD_BCRYPT);
$stmt->bind_param('sss', $nric, $kata, $nama);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama staff tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}