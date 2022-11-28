<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Admin</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Masuk untuk memulai</p>

        <form method="post" action="<?= base_url('login/login_aksi'); ?>">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" autocomplete="off">
            <small><span class="text-danger"><?= form_error('username'); ?></span></small>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" autocomplete="off">
            <small><span class="text-danger"><?= form_error('password'); ?></span></small>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/template/backend/') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/template/backend/') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/template/backend/') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>