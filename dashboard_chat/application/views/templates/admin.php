<div class="card-header">
    <a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Admin</i></a>
</div>
<!-- /.card-header -->
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Id Admin</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($admin as $adm) :
        ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $adm->id_user ?></td>
                    <td><?= $adm->username ?></td>
                    <td><?= $adm->password ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $adm->id_user ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        &nbsp;
                        <a href="<?= base_url('admin/delete/' . $adm->id_user) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
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
<?php foreach ($admin as $adm) : ?>
    <div class="modal fade" id="edit<?= $adm->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/edit/' . $adm->id_user) ?>" method="POST">
                        <div class="form-group">
                            <label for="input">ID Admin</label>
                            <input type="int" name="id_user" class="form-control" value="<?= $adm->id_user ?>" disabled>
                            <?= form_error('id_user', '<div class ="text-small text-danger">', '</div>');  ?>
                        </div>
                        <div class="form-group">
                            <label for="input">Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $adm->username ?>">
                            <?= form_error('username', '<div class ="text-small text-danger">', '</div>');  ?>
                        </div>
                        <div class="form-group">
                            <label for="input">Password</label>
                            <input type="text" name="password" class="form-control" value="<?= $adm->password ?>">
                            <?= form_error('password', '<div class ="text-small text-danger">', '</div>');  ?>
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