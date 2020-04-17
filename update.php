<?php
include('connection.php');
$pro_cod = $_GET['kode'];
$pro_nam = $_GET['nama'];
$pro_url = $_GET['url_gambar'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container1">
        <tr><center><h1>From Update</h1></center></tr>
        <table border="1" cellpadding="10" cellspacing="0">
            <form action="update2.php" method="post">
                <tr>
                    <td>Kode produk</td>
                    <td><input type="text" name="kode" value="<?php echo $pro_cod; ?>"></td>
                </tr>

                <tr>
                    <td>Nama produk</td>
                    <td><input type="text" name="nama" id="nampro" value="<?php echo $pro_nam; ?>"></td>
                </tr>

                <tr>
                    <td>Harga produk</td>
                    <td><input type="number" name="harga" placeholder="Rp" id="harpro"></td>
                </tr>

                <tr>
                    <td>satuan</td>
                    <td><select name="satuan" id="satpro">
                            <option disabled='disabled' selected='selected'>Choose..</option>
                            <option>Gelas</option>
                            <option>Piring</option>
                        </select></td>
                </tr>

                <tr>
                    <td>kategori</td>
                    <td><select name="kategori" id="katpro">
                            <option disabled='disabled' selected='selected'>Choose..</option>
                            <option>Makanan</option>
                            <option>Minuman</option>
                        </select></td>
                </tr>

                <tr>
                    <td>gambar</td>
                    <td><input type="text" name="url_gambar" id="gampro" value="<?php echo $pro_url; ?>"></td>
                </tr>

                <tr>
                    <td>stok awal</td>
                    <td><input type="number" name="stok" id="stopro"></td>
                </tr>

                <tr>
                    <td><button type="submit">Simpan</button></td>
                    <td></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>