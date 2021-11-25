<?php
require '../conn.php';

$id = $_POST['idpengguna'];
$nama = $_POST['staff_name'];

$sql = "INSERT INTO staff (idpengguna, staff_name) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $id, $nama);
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