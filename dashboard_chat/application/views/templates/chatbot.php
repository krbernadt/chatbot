<div class="card-header">
    <a href="<?= base_url('chatbot/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Chatbot</i></a>
</div>
<!-- /.card-header -->
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Id Chatbot</th>
                <th>Command</th>
                <th>Replies</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($chatbot as $cbt) :
        ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $cbt->chat_id ?></td>
                    <td><?= $cbt->command ?></td>
                    <td><?= $cbt->replies ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $cbt->chat_id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        &nbsp;
                        <a href="<?= base_url('chatbot/delete/' . $cbt->chat_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->


<!-- Modal Edit-->
<?php foreach ($chatbot as $cbt) : ?>
    <div class="modal fade" id="edit<?= $cbt->chat_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('chatbot/edit/' . $cbt->chat_id) ?>" method="POST">
                        <div class="form-group">
                            <label for="input">ID Chatbot</label>
                            <input type="int" name="chat_id" class="form-control" value="<?= $cbt->chat_id ?>" disabled>
                            <?= form_error('chat_id', '<div class ="text-small text-danger">', '</div>');  ?>
                        </div>
                        <div class="form-group">
                            <label for="input">Command</label>
                            <input type="text" name="command" class="form-control" value="<?= $cbt->command ?>">
                            <?= form_error('command', '<div class ="text-small text-danger">', '</div>');  ?>
                        </div>
                        <div class="form-group">
                            <label for="input">Replies</label>
                            <input type="text" name="replies" class="form-control" value="<?= $cbt->replies ?>">
                            <?= form_error('replies', '<div class ="text-small text-danger">', '</div>');  ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">&nbsp Simpan</i></button>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">&nbsp Reset</i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>