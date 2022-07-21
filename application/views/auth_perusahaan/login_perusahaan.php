<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Butuh Kerja | Masuk Akun Perusahaan </title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets/') ?>vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url('assets/') ?>vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets/') ?>build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">

          <form method="post" action="<?= base_url('index.php/Auth_perusahaan/cek_login_perusahaan'); ?>">
            <h1>Login Perusahaan</h1>
            <div>
              <input type="email" value="<?= set_value('email'); ?>" class="form-control" placeholder="Email" id="email" name="email" />
            </div>
            <div>
              <input type="password" value="<?= set_value('password'); ?>" class="form-control" placeholder="Password" id="password" name="password" />
            </div>
            <div>
              <button class="btn btn-default submit" type="submit">Masuk</button>
              <a class="change_link" href="#"></a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Pertama Kali?
                <a href="#signup" class="to_register"> Buat Akun! </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Butuh Kerja</h1>
                <p>©2022 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">

          <form method="post" action="<?= base_url('index.php/Auth_perusahaan/registrasi_pr'); ?>">
            <h1>Buat Akun Perusahaan</h1>
            <div>
              <input type="email" class="form-control" placeholder="Email Perusahaan" value="<?= set_value('email'); ?>" id="email" name="email" />
            </div>
            <div>
              <input type="text" class="form-control" placeholder="Nama Bisnis Terdaftar" value="<?= set_value('nama'); ?>" id="nama" name="nama" />
            </div>
            <div>
              <input type="password" value="<?= set_value('password'); ?>" class="form-control" placeholder="Password" id="password1" name="password1" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Konfirmasi Password" id="password2" name="password2" />
            </div>
            <div>
              <button class="btn btn-default submit" type="submit">Daftar</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Sudah mempunyai akun ?
                <a href="#signin" class="to_register"> Masuk </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Butuh Kerja</h1>
                <p>©2022 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>