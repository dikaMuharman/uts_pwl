<?php
require 'config/koneksi.php';
require 'models/Pegawai.php';
if (!isset($_SESSION['member'])) header('location: index.php');
?>

<div>
    <h1 class="mb-3">Data pegawai</h1>
    <?php if (!empty($_REQUEST['status'])):?>
    <div class="alert <?=($_REQUEST['status'] == 'success') ? 'alert-success' : 'alert-warning'; ?> alert-dismissible fade show" role="alert">
        <?=($_REQUEST['status'] == 'success') ? 'data berhasil di tambahkan atau di update' : 'ada yang salah'; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif;?>
    <a href="index.php?hal=tambah-data" class="btn btn-primary">Tambah data</a>
    <table class="table align-middle table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dataPegawai = new Pegawai();
            $no = 1;
            foreach($dataPegawai->selectData() as $data): ?>
                <form action="controllers/pegawaiController.php" method="POST">
                    <tr>
                        <input type="hidden" name="id" value="<?=$data['id']?>">
                        <td><?=$no?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['namaDivisi']?></td>
                        <td>
                            <a href="index.php?hal=detail-data&id=<?=$data['id']?>" class="btn btn-light">Detail</a>
                            <a href="index.php?hal=edit-data&id=<?=$data['id']?>" class="btn btn-warning">Edit</a>
                            <?php if ($_SESSION['member']['role'] == "staff"): ?>
                                <input type="submit" value="delete" name="delete" class="btn btn-danger" onclick="return confirm('Yakin mau di hapus ?')"/>
                            <?php endif;?>
                        </td>
                    </tr>
                </form>
                <?php $no++;?>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

