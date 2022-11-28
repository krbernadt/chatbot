<form action="<?= base_url('chatbot/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="input">Command</label>
        <input type="text" name="command" class="form-control">
        <?= form_error('command', '<div class ="text-small text-danger">', '</div>');  ?>
    </div>
    <div class="form-group">
        <label for="input">Replies</label>
        <input type="text" name="replies" class="form-control">
        <?= form_error('replies', '<div class ="text-small text-danger">', '</div>');  ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">&nbsp Simpan</i></button>
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">&nbsp Reset</i></button>

</form>