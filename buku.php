<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}

include_once ("./connect.php");

$query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar buku</title>
</head>

<body>
    <h1>Daftar buku</h1>

    <table border="1">
        <tr>
            <td>nama</td>
            <td>isbn</td>
            <td>unit</td>
            <td>ACTION</td>
        </tr>

        <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td>
                    <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a>
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br>
    <a href="./tambah-buku.php">Tambah data buku</a>
    <br>
    <a href="./index.php">Kembali ke halaman utama</a>

</body>

</html>