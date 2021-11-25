<?php
require '../conn.php';

$idstaff = $_POST['idstaff'];
$idpengguna = $_POST['idpengguna'];
$nama = $_POST['staff_name'];

$sql = "UPDATE staff SET idpengguna = ?, staff_name = ? WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $idpengguna, $nama, $idstaff);
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