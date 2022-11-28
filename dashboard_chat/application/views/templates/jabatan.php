<div class="card-header">
                <a href="<?= base_url('jabatan/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Jabatan</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Id jabatan</th>
                    <th>Id Pegawai</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($jabatan as $jbt) :
                  ?>
                        <tbody>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $jbt->id_jabatan ?></td>
                            <td><?= $jbt->id_pegawai ?></td>
                            <td><?= $jbt->jabatan ?></td>
                            <td>
                            <button data-toggle="modal" data-target="#edit<?= $jbt->id_pegawai ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            &nbsp;
                            <a href="<?= base_url('pegawai/delete/' . $jbt->id_pegawai) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
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
            <?php foreach($jabatan as $jbt) : ?>
              <div class="modal fade" id="edit<?=$jbt->id_pegawai ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      <div class="modal-body">
                        <form action="<?= base_url('jabatan/edit/' . $jbt->id_pegawai ) ?>" method="POST">
                            <div class="form-group">
                                <label for="input">ID Jabatan</label>
                                <input type="text" name="id_jabatan" class="form-control" value="<?= $jbt->id_jabatan ?>" >
                                <?= form_error('id_jabatan', '<div class ="text-small text-danger">','</div>');  ?>
                            </div>
                            <div class="form-group">
                                <label for="input">ID Pegawai</label>
                                <input type="text" name="id_pegawai" class="form-control" value="<?= $jbt->id_pegawai ?>" disabled>
                                <?= form_error('id_pegawai', '<div class ="text-small text-danger">','</div>');  ?>
                            </div>
                            <div class="form-group">
                                <label for="input">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" value="<?= $jbt->jabatan ?>">
                                <?= form_error('jabatan', '<div class ="text-small text-danger">','</div>');  ?>
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