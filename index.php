<?php

include ("connection.php");

$koneksi = openConn();
$query = mysqli_query($koneksi, "SELECT * FROM `daftar_menu` ");

$query_search = "SELECT MAX(kode) as kode FROM daftar_menu";
$result_search = mysqli_query($koneksi, $query_search);
$ds_query = mysqli_fetch_array($result_search);
$take_code = substr($ds_query['kode'], 3, 6);

$query_count = "SELECT COUNT(kode)as total FROM daftar_menu";
$result_count = mysqli_query($koneksi, $query_count);
$dc_query = mysqli_fetch_array($result_count);

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
    <div class="container">
    <tr><center><h1>FORM INPUT</h1></center></tr>
        <table border="1" cellpadding="10" cellspacing="0">
            <form action="menu.php" method="post">
                <tr>
                    <td>Kode Produk</td>
                    <td><input type="text" style="width: 300px" name="kode" id="kodpro"></td>
                </tr>

                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" style="width: 300px" name="nama" id="nampro"></td>
                </tr>

                <tr>
                    <td>Harga Produk</td>
                    <td><input type="number" style="width: 300px" name="harga" placeholder="Rp" id="harpro"></td>
                </tr>

                <tr>
                    <td>Satuan</td>
                    <td><select name="satuan" id="satpro" style="width: 300px">
                            <option>choose..</option>
                            <option>Gelas</option>
                            <option>Piring</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Kategori</td>
                    <td><select name="kategori" id="katpro" style="width: 300px">
                            <option>choose..</option>
                            <option>Makanan</option>
                            <option>Minuman</option>
                        </select></td>
                </tr>

                <tr>
                    <td>URL Gambar</td>
                    <td><input type="text" style="width: 300px" name="url_gambar" id="gampro"></td>
                </tr>

                <tr>
                    <td>Stok Awal</td>
                    <td><input type="number" style="width: 300px" name="stok" id="stopro"></td>
                </tr>

                <tr>
                    <td><button type="submit">Simpan</button></td>
                    <td></td>
                </tr>

            </form>
        </table>
    </div>

        <table border="1" cellpadding="10" cellspacing="0" id="hasil">
            <tr>
                <thead>
                    <th>No</th>
                    <th>Kode Produk</th>
                    <th>Nama produk</th>
                    <th>Harga produk</th>
                    <th>Satuan</th>
                    <th>Kategori</th>
                    <th>URL Gambar</th>
                    <th>stok</th>
                    <th>modify</th>
                </thead>

            </tr>
            <?php
            $sda = 1;
            while ($list = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td>
                        <?php echo $sda++; ?>
                    </td>
                    <td> <?php echo $list['kode']; ?></td>
                    <td> <?php echo $list['nama']; ?></td>
                    <td>Rp <?php echo $list['harga']; ?></td>
                    <td> <?php echo $list['satuan']; ?></td>
                    <td> <?php echo $list['kategori']; ?></td>
                    <td> <img src='<?php echo $list['url_gambar']; ?>' alt='' height="50" width="50"></td>
                    <td id="daftar_menu" class="
                    <?php
                    if ($list['stok'] < 5) {
                        echo "alert";
                    } else {
                        echo "none";
                    }
                    ?>">
                        <?php echo $list['stok']; ?>
                    </td>
                    <td>
                    <a href="update.php?kode=<?php echo $list['kode'] ?>&nama=<?php echo $list['nama'] ?>&url_gambar=<?php echo $list['url_gambar'] ?>">Edit</a>
                        <a href="delet.php?kode=<?php echo $list['kode'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>