<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Editable Datatables</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url ('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- <link href="<?= base_url('assets/global/plugins/datatables/datatables.min.css'); ?>" rel="stylesheet" type="text/css" /> -->
        <link href="<?= base_url('custom/datatables/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?= base_url('assets/global/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/global/plugins/select2/css/select2-bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= base_url('assets/global/css/components.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url('assets/global/css/plugins.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= base_url('assets/layouts/layout/css/layout.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/layouts/layout/css/themes/darkblue.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= base_url('assets/layouts/layout/css/custom.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?= base_url('assets/layouts/layout/img/logo.png'); ?>" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="<?= base_url('assets/layouts/layout/img/avatar3_small.jpg');?>" />
                                <span class="username username-hide-on-mobile"> Nick </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="app_inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app_todo.html">
                                        <i class="icon-rocket"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="page_user_lock_1.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>




                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Form</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">



                                <li class="nav-item  ">
                                    <a href="<?= base_url('form'); ?>" class="nav-link ">
                                        <span class="title">Form Data</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item  active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Tables</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                              <li class="nav-item active open">
                                  <a href="<?= base_url('table'); ?>" class="nav-link "> Table Inputan </a>
                              </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="<?= base_url('/'); ?>">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                                <i class="fa fa-circle"></i>
                            </li>

                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Table Inputan
                        <small>Latihan Tampil Data</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">

                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <!-- <a href="form_wizard.html" id="sample_editable_1_new" class="btn green"> Tambah
                                                        <i class="fa fa-plus"></i>
                                                    </a> -->
                                                    <!-- <a href="<?= base_url('form/yes'); ?>" class="btn green"> Tambah
                                                        <i class="fa fa-plus"></i>
                                                    </a> -->
                                                    <button type="button" class="btn btn-success" onclick="add_person()" >Tambah</button>
                                                    <button type="button" class="btn btn-default" onclick="reload_table()" >Reload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="table">
                                        <thead>
                                            <tr>
                                                <th> NIK </th>
                                                <th> Nama </th>
                                                <th> No HP </th>
                                                <th> Kab. / Kota </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </tr>
                                        </thead>
                                        <!-- <tbody>
                                          <?php foreach ($orang as $value): ?>
                                            <tr>
                                                <td> <?= $value['nik']; ?> </td>
                                                <td> <?= $value['nama']; ?> </td>
                                                <td> <?= $value['phone']; ?> </td>
                                                <td class="center"> <?= $value['kabkot']; ?> </td>
                                                <td>

                                                    <form action="<?=base_url('form/edit'); ?>" method="post">
                                                      <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                                      <button type="submit" class="btn btn-sm blue"> Edit
                                                        <i class="fa fa-edit"></i>
                                                      </button>
                                                    </form>
                                                </td>
                                                <td>

                                                    <form class="" action="<?= base_url('delete'); ?>" method="post">
                                                      <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                                      <button type="submit" class="btn btn-sm red"> Hapus
                                                        <i class="fa fa-trash"></i>
                                                      </button>
                                                    </form>
                                                </td>
                                            </tr>
                                          <?php endforeach; ?>

                                        </tbody> -->
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <script type="text/javascript">
          var save_method;
          var table;

          // $(document).ready(function() {
          //   //datatable
          //   table = $('#table').DataTable({
          //     "processing": true,
          //     "serverSide": true,
          //     "order": [],
          //
          //     "ajax": {
          //       "url": "<?= site_url('table/ajax_list'); ?>",
          //       "type": "POST",
          //     }
          //
          //     "columnDefs":[{
          //       "targets": [-1],
          //       "orderable": false,
          //     },],
          //   });
          //
          // });

          $(document).ready(function() {
            $('#btnSave').click(function() {
              console.log("Berhasil");
            });
          });

        </script>
        <script type="text/javascript">
          function add_person() {
            save_method = 'add';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form').modal('show');
            $('.modal-title').text('Tambah Orang');
          }


          function save() {
            // $.ajax({
            //   url: '<?= site_url('form/tambah') ?>',
            //   method: "POST",
            //   data: $('#form').serialize(),
            //   dataType: "JSON",
            //   success: function(data) {
            //     $('#modal_form').modal('hide');
            //     alert("Berhasil save");
            //   },
            // });
            console.log("Berhasil");
          };
        </script>
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <div class="modal fade" id="modal_form" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Tambah Orang</h3>
              </div>
              <div class="portlet-body modal-body form" >
                <form class="form-horizontal" id="form" action="#" >
                  <input type="hidden" name="id" value="">
                  <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">NIK
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" id="mask_number" class="form-control" name="nik" value="" required/>
                            <span class="help-block"> Isi NIK Sesuai KTP Anda </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Nama Lengkap
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="nama" value="" required/>
                            <span class="help-block"> Masukan Nama Sesuai KTP </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Nomer Handphone
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="phone" value="" required/>
                            <span class="help-block"> Masukan No HP Aktif </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Jenis Kelamin
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-7">
                            <div class="radio-list">
                                <label>
                                    <input type="radio" name="gender" value="L" data-title="Laki-laki" required/> Laki-laki </label>
                                <label>
                                    <input type="radio" name="gender" value="P" data-title="Perempuan" required/> Perempuan </label>
                            </div>
                            <span class="help-block"> Pilih Laki-laki / Perempuan </span>
                            <div id="form_gender_error"> </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Alamat
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="alamat" value="" required/>
                            <span class="help-block"> Masukan Alamat Lengkap </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Kecamatan
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="kecamatan" value="" required/>
                            <span class="help-block"> Masukan Kecamatan </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Kabupaten / Kota
                          <span class="required"> * </span>
                        </label>
                        <div class="col-md-7">
                            <select name="kabkot" id="country_list" class="form-control" required>
                                <option value=""></option>
                                <option value="Kabupaten Cilacap" >Kabupaten Cilacap</option>
                                <option value="Kabupaten Banyumas">Kabupaten Banyumas</option>
                                <option value="Kabupaten Purbalingga">Kabupaten Purbalingga</option>
                                <option value="Kabupaten Banjarnegara">Kabupaten Banjarnegara</option>
                                <option value="Kabupaten Kebumen" >Kabupaten Kebumen</option>
                                <option value="Kabupaten Purworejo">Kabupaten Purworejo</option>
                                <option value="Kabupaten Wonosobo">Kabupaten Wonosobo</option>
                                <option value="Kabupaten Magelang">Kabupaten Magelang</option>
                                <option value="Kabupaten Boyolali">Kabupaten Boyolali</option>
                                <option value="Kabupaten Klaten">Kabupaten Klaten</option>
                                <option value="Kabupaten Sukoharjo">Kabupaten Sukoharjo</option>
                                <option value="Kabupaten Wonogiri">Kabupaten Wonogiri</option>
                                <option value="Kabupaten Karanganyar">Kabupaten Karanganyar</option>
                                <option value="Kabupaten Sragen">Kabupaten Sragen</option>
                                <option value="Kabupaten Grobogan">Kabupaten Grobogan</option>
                                <option value="Kabupaten Blora">Kabupaten Blora</option>
                                <option value="Kabupaten Rembang">Kabupaten Rembang</option>
                                <option value="Kabupaten Pati">Kabupaten Pati</option>
                                <option value="Kabupaten Kudus">Kabupaten Kudus</option>
                                <option value="Kabupaten Jepara">Kabupaten Jepara</option>
                                <option value="Kabupaten Demak">Kabupaten Demak</option>
                                <option value="Kabupaten Semarang">Kabupaten Semarang</option>
                                <option value="Kabupaten Temanggung">Kabupaten Temanggung</option>
                                <option value="Kabupaten Kendal">Kabupaten Kendal</option>
                                <option value="Kabupaten Batang">Kabupaten Batang</option>
                                <option value="Kabupaten Pekalongan">Kabupaten Pekalongan</option>
                                <option value="Kabupaten Pemalang">Kabupaten Pemalang</option>
                                <option value="Kabupaten Tegal">Kabupaten Tegal</option>
                                <option value="Kabupaten Brebes">Kabupaten Brebes</option>
                                <option value="Kota Magelang">Kota Magelang</option>
                                <option value="Kota Surakarta">Kota Surakarta</option>
                                <option value="33.74">Kota Semarang</option>
                                <option value="Kota Salatiga">Kota Salatiga</option>
                                <option value="Kota Pekalongan">Kota Pekalongan</option>
                                <option value="Kota Tegal">Kota Tegal</option>
                            </select>
                            <span class="help-block"> Pilih Kabupaten / Kota </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Catatan</label>
                        <div class="col-md-7">
                            <textarea class="form-control" rows="3" name="catatan"></textarea>
                            <span class="help-block"> Catatan Penghargaan / Kriminal </span>
                        </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" id="btnSave" onlick="save()" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <!-- <script src="<?= base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="<?= base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>" type="text/javascript"></script>
        <!-- <script src="<?= base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script> -->
        <script src="<?= base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- <script src="<?= base_url('assets/global/scripts/datatable.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/datatables/datatables.min.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'); ?>" type="text/javascript"></script> -->
        <script src="<?= base_url('custom/datatables/datatables.min.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?= base_url('assets/pages/scripts/table-datatables-editable.min.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?= base_url('assets/layouts/layout/scripts/layout.min.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/layouts/layout/scripts/demo.min.js'); ?>" type="text/javascript"></script>
        <script src="<?= base_url('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <!-- javascript only here -->
        <script type="text/javascript">

        </script>
    </body>

</html>
