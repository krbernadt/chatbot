<form action="<?= base_url('jabatan/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="input">ID Jabatan</label>
        <input type="number" name="id_jabatan" class="form-control" >
        <?= form_error('id_jabatan', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">ID Pegawai</label>
        <input type="text" name="id_pegawai" class="form-control" >
        <?= form_error('id_pegawai', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" >
        <?= form_error('jabatan', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">&nbsp Simpan</i></button>
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">&nbsp Reset</i></button>

</form>