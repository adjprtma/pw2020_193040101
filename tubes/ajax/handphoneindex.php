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

<?php if(empty($handphone)) : ?>
    <tr>
        <td colspan="9">
            <h1>Data Tidak Ditemukan</h1>
        </td>
    </tr>
<?php else : ?>
    <?php foreach ($handphone as $hp) : ?>
        <p class="tipe">
            <div class="collection">
            <a href="php/detail.php?id=<?= $hp['id'] ?>"class="collection-item">
                <?= $hp["tipe"] ?>
            </a>
            </div>
        </p>
    <?php endforeach; ?>
<?php endif; ?>