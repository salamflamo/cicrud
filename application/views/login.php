<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?= base_url('assets/global/plugins/select2/css/select2.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/select2/css/select2-bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= base_url('assets/global/css/components.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url('assets/global/css/plugins.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?= base_url('assets/pages/css/login-2.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="<?= base_url('login');?>">
                <img src="<?= base_url('assets/pages/img/logo-big-white.png');?>" style="height: 17px;" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->

            <form class="login-form" action="" method="post">
                <div class="form-title">
                    <span class="form-title">Selamat Datang.</span>
                    <span class="form-subtitle">Silahkan login.</span>
                </div>
                <div id="login_success" class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Isi Username dan Password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" required=""/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required=""/> </div>
                <div class="form-actions">
                    <button type="button" onclick="btnLogin()" class="btn red btn-block uppercase">Login</button>
                </div>
                <div class="form-actions">
                    <div class="pull-left">
                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="remember" value="1" /> Remember me
                            <span></span>
                        </label>
                    </div>
                    <div class="pull-right forget-password-block">
                        <a href="javascript:;" id="forget-password" class="forget-password">Lupa Password?</a>
                    </div>
                </div>
                <div class="login-options">
                    <h4 class="pull-left">Atau login menggunakan</h4>
                    <ul class="social-icons pull-right">
                        <li>
                            <a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
                        </li>
                    </ul>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" class="btn-primary btn" id="register-btn">Buat akun</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="" method="post">
                <div class="form-title">
                    <span class="form-title">Lupa Password ?</span>
                    <span class="form-subtitle">Masukan email Anda untuk mereset.</span>
                </div>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" required=""/> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn btn-default">Back</button>
                    <button type="submit" id="register-submit-btn" class="btn red uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <div id="success" class="alert alert-success" style="display: none;">

            </div>
            <div id="gagal" class="alert alert-danger" style="display: none;">

            </div>
            <form class="register-form" action="" method="post">
                <div class="form-title">
                    <span class="form-title">Mendaftar</span>
                </div>

                <p class="hint"> Lengkapi Informasi Akun: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" required=""/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" required=""/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Tulis Kembali Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Tulis Kembali Password" name="rpassword" required=""/>
                </div>
                <p class="hint"> Data Diri Sederhana: </p>
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Nama</label>
                  <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Nema Lengkap" name="nama" required=""/>
                </div>
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Email</label>
                  <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" required=""/>
                </div>

                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
                    <button type="button" id="btnSubmit" onclick="btnSave()" class="btn red uppercase pull-right" value="Daftar">Daftar</button>
                </div>
            </form>
            <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
            <script type="text/javascript">
              //ini bagian registrasi
              function btnSave() {
                $.ajax({
                  type    : 'ajax',
                  url     : '<?= base_url('login/register') ?>',
                  dataType: 'json',
                  async   : false,
                  method  : 'post',
                  data    : $('.register-form').serialize(),
                  success : function(data) {
                    if (data.success) {
                      $('.register-form')[0].reset();
                      $('#success').text("Berhasil mendaftar silahkan login").fadeIn().delay(4000).fadeOut('slow');
                    } else {
                      $('#gagal').text("Gagal, email tidak valid").fadeIn().delay(4000).fadeOut('slow');
                    }
                  },
                  error   : function() {
                      $('#gagal').text("Gagal, username sudah ada").fadeIn().delay(4000).fadeOut('slow');
                  }
                });
              }

              //ini bagian login
              function btnLogin() {
                $.ajax({
                  type    : 'ajax',
                  url     : '<?= base_url('verif') ?>',
                  dataType: 'json',
                  method  : 'post',
                  data    : $('.login-form').serialize(),
                  async   : false,
                  success : function(data) {
                    if (data.success == 'login') {
                      window.location.replace("<?= base_url('ver1'); ?>");
                      // $('.alert-danger').text("Jane Berhasil ").fadeIn().delay(4000).fadeOut('slow');
                    }
                    else if (data.success == 'password') {
                      $('#login_success').text("Password salah ").fadeIn().delay(4000).fadeOut('slow');

                    } else if (data.success == 'token') {
                      $('#login_success').text("Gagal login, silahkan aktifasi email anda ").fadeIn().delay(4000).fadeOut('slow');

                    } else if (data.success == 'username') {
                      $('#login_success').text("Username salah ").fadeIn().delay(4000).fadeOut('slow');

                    }
                  },
                  error  : function() {
                    $('#login_success').text("Gagal login, username tidak ada  ").fadeIn().delay(4000).fadeOut('slow');
                  }
                });
              }
            </script>
            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright hide"> 2014 © Metronic. Admin Dashboard Template. </div>
        <!-- END LOGIN -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/js.cookie.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/jquery.blockui.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?= base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/jquery-validation/js/additional-methods.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/select2/js/select2.full.min.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url('assets/global/scripts/app.min.js');?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?= base_url('assets/pages/scripts/login.min.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
