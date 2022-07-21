<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/') ?>vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="<?= base_url('assets/') ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/') ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="<?= base_url('assets/') ?>vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/') ?>build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= site_url('A_Tampilan_awal/') ?>" class="site_title"><i class="fa fa-paw"></i> <span>Butuh Kerja!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">

                            <ul class="nav side-menu">

                                <li>
                                    <a onclick="new PNotify({
                                  title: 'Isi Data!',
                                  text: 'Isi Data untuk mengakses fitur lain',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });">
                                        <i class="fa fa-home"></i>
                                        Dashboard
                                    </a>
                                </li>

                                <li>
                                    <a onclick="new PNotify({
                                  title: 'Isi Data!',
                                  text: 'Isi Data untuk mengakses fitur lain',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });">
                                        <i class="fa fa-user"></i>
                                        Profil
                                    </a>
                                </li>

                                <li>
                                    <a onclick="new PNotify({
                                  title: 'Isi Data!',
                                  text: 'Isi Data untuk mengakses fitur lain',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });">
                                        <i class="fa fa-briefcase"></i>
                                        Lamaran
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">John Doe
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>LENGKAPI DATA PROFIL</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">

                                <div class="x_content">

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <form class="" action="Lengkapidata_pelamar/lengkapi" method="POST" enctype="multipart/form-data" novalidate>
                                            <span class="section">Form Profil</span>
                                            <div class="col-md-6 col-sm-12">

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" id="nama" placeholder="" required="required" />
                                                    </div>
                                                </div>

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                                                <input type="radio" name="" value="Laki - laki" id="jenis_kelamin" class="join-btn"> &nbsp; Laki - laki &nbsp;
                                                            </label>
                                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                                                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" class="join-btn"> Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" class='date' type="date" name="tanggal_lahir" id="tanggal_lahir" required='required'>
                                                    </div>
                                                </div>

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat Tempat Tinggal<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <textarea required="required" name='alamat' id="alamat" style="width: 275px; height: 100px;"></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6 col-sm-12">

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Keahlian<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" class='optional' name="keahlian" id="keahlian" data-validate-length-range="5,15" type="text" />
                                                    </div>
                                                </div>

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" name="email" id="email" class='email' required="required" type="email" />
                                                    </div>
                                                </div>

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" type="tel" class='tel' name="no_hp" id="no_hp" required='required' data-validate-length-range="8,20" />
                                                    </div>
                                                </div>

                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Pendidikan Terakhir<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <select class="form-control">
                                                            <option>--Pilih--</option>
                                                            <option>SD Sederajat</option>
                                                            <option>SMP Sederajat</option>
                                                            <option>SMA Sederajat</option>
                                                            <option>S1</option>
                                                            <option>S2</option>
                                                            <option>S3</option>
                                                            <option>D1</option>
                                                            <option>D2</option>
                                                            <option>D3</option>
                                                            <option>D4</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="col-md-12 col-sm-12">

                                                    <div class="field item form-group col-md-4 col-sm-12">
                                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Foto<span class="required">*</span></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="foto" id="foto">
                                                            <label for="foto" class="glyphicon glyphicon-open" style="font-size: 50px;"></label>
                                                        </div>
                                                    </div>

                                                    <div class="field item form-group col-md-4 col-sm-12">
                                                        <label class="col-form-label col-md-3 col-sm-3  label-align">CV<span class="required">*</span></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="cv" id="cv">
                                                            <label for="cv" class="glyphicon glyphicon-open" style="font-size: 50px;"></label>
                                                        </div>
                                                    </div>

                                                    <div class="field item form-group col-md-4 col-sm-12">
                                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sertifikat<span class="required"></span></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="sertifikat" id="sertifikat">
                                                            <label for="sertifikat" class="glyphicon glyphicon-open" style="font-size: 50px;"></label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="field item form-group col-md-4 col-sm-12">
                                                    <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"><br></span></label>
                                                    <div>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="ln_solid col-md-12 col-sm-12"></div>
                                            <div class="form-group">
                                                <div class="col-md-12 offset-md-3">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>

    <!-- Javascript functions	-->
    <script>
        function hideshow() {
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if (password.type === 'password') {
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            } else {
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('custom-file-label').addClass("selected").html(fileName);
        })
    </script>



    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/') ?>vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/') ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/') ?>vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js"></script> -->
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('assets/') ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/') ?>vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="<?= base_url('assets/') ?>vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?= base_url('assets/') ?>vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?= base_url('assets/') ?>vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/') ?>build/js/custom.min.js"></script>

</body>

</html>