            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Table Inputan Ver2
                        <small>Latihan Tampil Data</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                      <div class="alert alert-success" style="display: none;">

                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">

                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" onclick="add_orang()" >Tambah</button>
                                                    <button type="button" class="btn btn-default" onclick="reload_table()" >Reload</button>

                                                    <!-- <button type="button" class="btn btn-success" id="btnTambah" >Tambah</button> -->

                                                </div>
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                            <div class="col-md-4">

                                            </div>
                                        </div>
                                    </div>
                                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                          <td>NIK</td>
                                          <td>Nama</td>
                                          <td>Phone</td>
                                          <td>Gender</td>
                                          <td>Kab. / Kota</td>
                                          <td>Aksi</td>
                                        </tr>
                                      </thead>
                                      <tbody id="tampildata">

                                      </tbody>
                                      <tfoot>
                                        <tr>
                                          <td>NIK</td>
                                          <td>Nama</td>
                                          <td>Phone</td>
                                          <td>Gender</td>
                                          <td>Kab. / Kota</td>
                                          <td>Aksi</td>
                                        </tr>
                                      </tfoot>
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

        <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

        <script type="text/javascript">
          var save_method;
          var table;

          $(document).ready(function() {
            table = $('#table').DataTable({
              "processing"  : true,
              "serverSide"  : true,
              "order"       : [],

              "ajax"        : {
                "url"   : "<?= site_url('orang_ajax_d/ajax_list'); ?>",
                "type"  : "post"
              },
              "columnDefs"  : [{
                "targets"    : [-1],
                "orderable"  : false,
              },],
            });

            $("input").change(function() {
              $(this).parent().parent().removeClass('has-error');
              $(this).next().empty();
            });
            $("input[type=radio]").change(function() {
              $(this).parent().parent().removeClass('has-error');
              $(this).next().empty();
            });
            $("select").change(function() {
              $(this).parent().parent().removeClass('has-error');
              $(this).next().empty();
            });

            //menyimpan data
            $('#btnSave').click(function() {
              var nik = $('input[name=nik]');
              var nama = $('input[name=nama]');
              var phone = $('input[name=phone]');
              var gender = $('input[name=gender]');
              var alamat = $('input[name=alamat]');
              var kecamatan = $('input[name=kecamatan]');
              var kabkot = $('input[name=kabkot]');
              var hasil = '';
              if (nik.val() == '') {
                nik.parent().parent().addClass('has-error');
              } else {

                nik.parent().parent().removeClass('has-error');
                hasil += '1';
              }
              if (nama.val() == '') {
                nama.parent().parent().addClass('has-error');
              } else {
                nama.parent().parent().removeClass('has-error');
                hasil += '2';
              }
              if (phone.val() == '') {
                phone.parent().parent().addClass('has-error');
              } else {
                phone.parent().parent().removeClass('has-error');
                hasil += '3';
              }
              if (gender.val() == '') {
                gender.parent().parent().addClass('has-error');
              } else {
                gender.parent().parent().removeClass('has-error');
                hasil += '4';
              }
              if (alamat.val() == '') {
                alamat.parent().parent().addClass('has-error');
              } else {
                alamat.parent().parent().removeClass('has-error');
                hasil += '5';
              }
              if (kecamatan.val() == '') {
                kecamatan.parent().parent().addClass('has-error');
              } else {
                kecamatan.parent().parent().removeClass('has-error');
                hasil += '6';
              }
              if (kabkot.val() == '') {
                kabkot.parent().parent().addClass('has-error');
              } else {
                kabkot.parent().parent().removeClass('has-error');
                hasil += '7';
              }
              if (hasil != '1234567') {
                alert("Jangan sampai ada inputan yang kosong")
              } else {
                $('#btnSave').text('Menyimpan...');
                $('#btnSave').attr('disabled',true);
                var url;
                var data = $('#form').serialize();
                var id = $('input[name=id]').val();
                if (id == 0) {
                  url = "<?= base_url(); ?>orang_ajax_d/ajax_add";
                } else {
                  url = "<?= base_url(); ?>orang_ajax_d/ajax_update";
                }
                $.ajax({
                  type: 'ajax',
                  method: 'post',
                  url: url,
                  data: data,
                  async: false,
                  dataType: 'json',
                  success: function(data) {
                    $('#modal_form').modal('hide');
                    $('#form')[0].reset();
                    $('#btnSave').attr('disabled',false);
                    $('#btnSave').text('Simpan');
                    reload_table();

                  },
                  error: function() {
                    $('#btnSave').attr('disabled',false);
                    $('#btnSave').text('Simpan');
                    alert("Gagal menyimpan!");
                  }
                });
              }


            });


          //batas akhir ready fungsi
          });

          function add_orang() {
            save_method = 'add';
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('#modal_form').modal('show');
            $('.modal-title').text('Nambah Orang');
          }

          function edit_orang(id) {
            save_method = 'update',
            $('#form')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();

            $.ajax({
              url: "<?= site_url('orang_ajax_d/ajax_edit/'); ?>"+id,
              type: "GET",
              dataType: "JSON",
              success: function(data) {
                $('[name="id"]').val(data.id);
                $('[name="nik"]').val(data.nik);
                $('[name="nama"]').val(data.nama);
                $('[name="phone"]').val(data.phone);
                if (data.gender == 'L') {
                  var html = '<label>'+
                                '<input type="radio" name="gender" value="L" data-title="Laki-laki" checked/> Laki-laki </label>'+
                            '<label>'+
                                '<input type="radio" name="gender" value="P" data-title="Perempuan" /> Perempuan </label>';
                  $('#pilihgender').html(html);
                } else if (data.gender == 'P') {
                  var html = '<label>'+
                                '<input type="radio" name="gender" value="L" data-title="Laki-laki" /> Laki-laki </label>'+
                            '<label>'+
                                '<input type="radio" name="gender" value="P" data-title="Perempuan" checked/> Perempuan </label>';
                  $('#pilihgender').html(html);
                }
                $('[name="alamat"]').val(data.alamat);
                $('[name="kecamatan"]').val(data.kecamatan);
                $('[name="kabkot"]').val(data.kabkot);
                $('[name="catatan"]').val(data.catatan);
                $('#modal_form').modal('show');
                $('.modal-title').text("Edit Orang");

              },
              error: function(jqXHR,textStatus,errorThrown) {
                alert("Tidak bisa mengambil data");
              }
            });
          }

          function reload_table() {
            table.ajax.reload(null,false);
          }

          function delete_orang(id) {
            $('#modal_hapus').modal('show');
            $('#btnHapus').click(function() {
              $('#modal_hapus').modal('hide');
              $.ajax({
                url: "<?= site_url('orang_ajax_d/ajax_delete/')?>"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                  $('#modal_form').modal('hide');
                  reload_table();
                },
                error: function(jqXHR,textStatus,errorThrown) {
                  alert("Gagal Menghapus");
                }
              });
            });
            // if (confirm("Anda yakin hapus data ini?")) {
            //
            // }
          }

          function detailOrang(id) {
            $.ajax({
              type: 'ajax',
              method: 'get',
              url: '<?= base_url(); ?>orang_ajax_d/ajax_edit/'+id,
              data: {id:id},
              async: false,
              dataType: 'json',
              success: function(data) {
                $('#modal_detail').modal('show');
                $('#nik').html(data.nik);
                $('#nama').html(data.nama);
                $('#phone').html(data.phone);
                var g = data.gender;
                if (g == "L") {
                  $('#gender').html("Laki-laki");
                } else {
                  $('#gender').html("Perempuan");
                }
                $('#alamat').html(data.alamat);
                $('#kecamatan').html(data.kecamatan);
                $('#kabkot').html(data.kabkot);
                $('#catatan').html(data.catatan);
                $('.modal-title').text('Menampilkan Data Orang')
              },
            });
          }
        </script>

        <div id="modal_hapus" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Konfirmasi Hapus Orang</h3>
              </div>
              <div class="modal-body">
                <h3>Anda Yakin Hapus Orang ini?</h3>
              </div>
              <div class="modal-footer">
                <button type="button" id="btnHapus" class="btn btn-danger">Hapus</button>
                <button type="reset"  class="btn btn-primary" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </div>
        </div>


        <div id="modal_detail" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Detail Orang</h3>
              </div>
              <div class="modal-body">

                <table class="table table-responsive">
                  <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><h4 id="nik"></h4></td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><h4 id="nama"></h4></td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><h4 id="phone"></h4></h4></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td><h4 id="gender"></h4></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><h4 id="alamat"></h4></td>
                  </tr>
                  <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td><h4 id="kecamatan"></h4></td>
                  </tr>
                  <tr>
                    <td>Kab./Kota</td>
                    <td>:</td>
                    <td><h4 id="kabkot"></h4></td>
                  </tr>
                  <tr>
                    <td>Catatan</td>
                    <td>:</td>
                    <td><h4 id="catatan"></h4></td>
                  </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button  class="btn btn-default" data-dismiss="modal">Keluar</button>
              </div>
            </div>
          </div>
        </div>
