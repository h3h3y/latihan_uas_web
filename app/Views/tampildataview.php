<?= $this->extend('mainview') ?>

<?= $this->section('judul') ?>
Tampil Data
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
Menampilkan Semua Data
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<a class="btn btn-primary mb-3" href="<?= site_url('/tambah') ?>">Tambah Data</a>
<?php if (session()->getFlashdata('inputdataberhasil')) : ?>
    <div class="alert alert-<?php echo session()->getFlashdata('alertType') ?? 'success'; ?> alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('inputdataberhasil'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<table class="table table-striped table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th style="width: 5%;">No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Tanggal Masuk</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($data as $row) :
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jenkel']; ?></td>
                <td><?= $row['hobi']; ?></td>
                <td><?= $row['tanggal_masuk']; ?></td>
                <td><img src="<?= base_url($row['foto']) ?>" width="100" alt="foto"></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection('isi') ?>