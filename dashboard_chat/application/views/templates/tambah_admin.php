<form action="<?= base_url('admin/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="input">Username</label>
        <input type="text" name="username" class="form-control">
        <?= form_error('username', '<div class ="text-small text-danger">', '</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">Password</label>
        <input type="text" name="password" class="form-control">
        <?= form_error('password', '<div class ="text-small text-danger">', '</div>');  ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">&nbsp Simpan</i></button>
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">&nbsp Reset</i></button>

</form>