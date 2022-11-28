<div class="card-header">
                <a href="<?= base_url('pegawai/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Pegawai</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>id_pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($pegawai as $pgw) :
                  ?>
                      <tbody>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $pgw->id_pegawai ?></td>
                            <td><?= $pgw->nama_pegawai ?></td>
                            <td><?= $pgw->alamat ?></td>
                            <td>
                              <button data-toggle="modal" data-target="#edit<?= $pgw->id_pegawai ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                              &nbsp;
                              <a href="<?= base_url('pegawai/delete/' . $pgw->id_pegawai) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
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
            <?php foreach($pegawai as $pgw) : ?>
              <div class="modal fade" id="edit<?=$pgw->id_pegawai ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      <div class="modal-body">
                        <form action="<?= base_url('pegawai/edit/' . $pgw->id_pegawai ) ?>" method="POST">
                            <div class="form-group">
                                <label for="input">ID Pegawai</label>
                                <input type="text" name="id_pegawai" class="form-control" value="<?= $pgw->id_pegawai ?>" disabled>
                                <?= form_error('id_pegawai', '<div class ="text-small text-danger">','</div>');  ?>
                            </div>
                            <div class="form-group">
                                <label for="input">Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control" value="<?= $pgw->nama_pegawai ?>" >
                                <?= form_error('nama_pegawai', '<div class ="text-small text-danger">','</div>');  ?>
                            </div>
                            <div class="form-group">
                                <label for="input">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $pgw->alamat ?>">
                                <?= form_error('alamat', '<div class ="text-small text-danger">','</div>');  ?>
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

  