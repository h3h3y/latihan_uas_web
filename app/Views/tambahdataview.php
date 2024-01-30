<?= $this->extend('mainview') ?>

<?= $this->section('judul') ?>
Halaman Tambah Data
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<a href="<?= site_url('/data') ?>" class="btn btn-warning text-white">Kembali</a>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<?= form_open_multipart('/prosestambah') ?>
<?php if (session()->getFlashdata('inputfotogagal')) : ?>
    <div class="alert alert-<?php echo session()->getFlashdata('alertType') ?? 'danger'; ?> alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('inputfotogagal'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<form class="form-horizontal" id="form">
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Inputkan Nama" name="nama" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-2">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="laki-laki" name="jenkel" value="Laki-laki" required>
                <label class="form-check-label" for="laki-laki">
                    Laki-laki
                </label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="perempuan" name="jenkel" value="Perempuan" required>
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Hobi</label>
        <div class="col-sm-6">
            <select class="form-control" name="hobi" required>
                <option value="" disabled selected hidden>Hobi</option>
                <option value="Memancing">Memancing</option>
                <option value="Membaca">Membaca</option>
                <option value="Main Sepak Bola">Main Sepak Bola</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" id="tanggalmasuk"name="tanggalmasuk" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label  class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-6">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" onchange="updateFileName(this)" name="foto" required>
                <label class="custom-file-label" for="exampleInputFile" id="fileLabel">Choose file</label>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-lg-6">
            <div class="button-group pt-3 ">
                <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </div>
    <!-- /.card-footer -->
</form>

<?= $this->endSection('isi') ?>