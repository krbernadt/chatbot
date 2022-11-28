<form action="<?= base_url('kontrak/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="input">ID Kontrak</label>
        <input type="number" name="id_kontrak" class="form-control" >
        <?= form_error('id_kontrak', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">ID Pegawai</label>
        <input type="number" name="id_pegawai" class="form-control" >
        <?= form_error('id_pegawai', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">Tanggal Kontrak</label>
        <input type="date" name="tanggal_kontrak" class="form-control" >
        <?= form_error('tanggal_kontrak', '<div class ="text-small text-danger">','</div>');  ?>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">&nbsp Simpan</i></button>
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">&nbsp Reset</i></button>

</form>