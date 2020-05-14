<?php 
require '../php/functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM handphone
                WHERE
            tipe LIKE '%$keyword%' OR
            processor LIKE '%$keyword%' OR
            ram LIKE '%$keyword%' OR
            rom LIKE '%$keyword%' OR
            battery LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ";
$handphone = query($query);
?>

<table border="1" cellpadding="10" cellspacing="1">
    <tr>
        <th>NO</th>
        <th>OPSI</th>
        <th>GAMBAR</th>
        <th>TIPE</th>
        <th>PROCESSOR</th>
        <th>RAM</th>
        <th>ROM</th>
        <th>BATTERY</th>
        <th>HARGA</th>
    </tr>
    <?php if(empty($handphone)) : ?>
        <tr>
            <td colspan="9">
                <h1>Data Tidak Ditemukan</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($handphone as $hp) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $hp['id'] ?>"><button type="submit" class="btn light-blue">Ubah</button></a>
                <a href="hapus.php?id=<?= $hp['id'] ?>" onclick="return confirm('Hapus Data??')"><button type="submit" class="btn red">Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $hp["gambar"] ?>"></td>
            <td><?= $hp["tipe"] ?></td>
            <td><?= $hp["processor"] ?></td>
            <td><?= $hp["ram"] ?></td>
            <td><?= $hp["rom"] ?></td>
            <td><?= $hp["battery"] ?></td>
            <td><?= $hp["harga"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</table>