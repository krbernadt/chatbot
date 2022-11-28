<form action="<?= base_url('pegawai/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="input">ID Pegawai</label>
        <input type="number" name="id_pegawai" class="form-control" >
        <?= form_error('id_pegawai', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">Nama Pegawai</label>
        <input type="text" name="nama_pegawai" class="form-control" >
        <?= form_error('nama_pegawai', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">Alamat</label>
        <input type="text" name="alamat" class="form-control" >
        <?= form_error('alamat', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">&nbsp Simpan</i></button>
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">&nbsp Reset</i></button>

</form>