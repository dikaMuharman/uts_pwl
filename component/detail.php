<?php
require 'config/koneksi.php';
require 'models/Pegawai.php' ;
$pegawai = new Pegawai();
if (!isset($_SESSION['member'])) header('location: index.php');
if (!isset($_GET['id'])) header('location: index.php?hal=data-pegawai');
$dataPegawai = $pegawai->getPegawai($_GET['id']);
?>
<h1>Detail pegawai</h1>
<img style="width: 100px;" src="images/<?=$dataPegawai['foto']?>" alt="<?=$dataPegawai[ 'nama']?>">
<p>nip : <?=$dataPegawai["nip"]?></p>
<p>nama : <?=$dataPegawai[ 'nama']?></p>
<p>email : <?=$dataPegawai['email']?></p>
<p>agama : <?=$dataPegawai['agama']?></p>
<p>divisi : <?=$dataPegawai['namaDivisi']?></p>

<form action="controllers/pegawaiController.php" method="POST">
<input type="hidden" value="<?=$dataPegawai['id']?>" name="id">
<div class="d-flex justify-content-between">
    <a href="index.php?hal=data-pegawai" class="btn btn-secondary">Kembali</a>
    <div>
        <a href="index.php?hal=edit-data&id=<?=$dataPegawai['id']?>" class="btn btn-warning">Edit</a>
        <?php if ($_SESSION['member']['role'] == "staff"): ?>
            <input type="submit" value="delete" name="delete" class="btn btn-danger" onclick="return confirm('Yakin mau di hapus ?')"/>
        <?php endif;?>
    </div>
</div>
</form>