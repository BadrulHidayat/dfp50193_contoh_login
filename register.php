<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="register_simpan.php" method="post">
        <table>
            <tr>
                <td><label for="cust_name">Nama</label></td>
                <td>
                    <input id="cust_name" type="text" name="cust_name" required >
                </td>
            </tr>
            <tr>
                <td><label for="nric">No Kad Pengenalan</label></td>
                <td>
                    <input id="nric" type="text" name="nric" required >
                </td>
            </tr>
             <tr>
                <td><label for="katalaluan">Kata Laluan</label></td>
                <td>
                    <input id="kataluan" type="password" name="katalaluan" required >
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>