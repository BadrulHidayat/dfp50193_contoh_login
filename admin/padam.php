<?php
require '../conn.php';

$id_data_pelajar = $_GET['idstaff'];

$sql = "DELETE FROM staff WHERE idstaff = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idstaff);
$stmt->execute();

header('location: index.php');