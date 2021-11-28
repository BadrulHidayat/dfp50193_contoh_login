<?php
require '../conn.php';

$idstaff = $_POST['idstaff'];
$kataluan = $_POST['katalaluan'];
$idpengguna = $_POST['idpengguna'];

$sql = "UPDATE staff SET kataluan = idpengguna WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $kataluan, $idpengguna, $idstaff);
$stmt->execute();

header('location: index.php');