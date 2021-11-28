<?php 
require '../conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Selamat Datang Admin</h2>
<h3>Senarai Staff</h3>
<table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>Bil</th>
            <th>Id Pengguna</th>
            <th>Nama Staff</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM staff";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->idpengguna; ?></td>
                    <td><?php echo $row->staff_name; ?></td>
                    <td>
                        <a href="kemaskini.php?idstaff=<?php echo $row->idstaff; ?>"><button>Edit</button></a>
                        |
                        <a href="padam.php?idstaff=<?php echo $row->idstaff; ?>" onclick="return confirm('Betul ke nak padam?');"><button>Padam</button></a>
                        |
                        <a href="reset_pswd.php?idstaff=<?php echo $row->idstaff; ?>" onclick="return confirm('Betul ke nak reset kata laluan?');"><button>Reset Kataluan</button></a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <br>
    <a href="tambah.php"><button>Tambah Staff</button></a>
</body>
</html>