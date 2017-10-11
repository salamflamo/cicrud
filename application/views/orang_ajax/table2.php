            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Table Inputan
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
                                    <!-- <table class="table table-striped table-bordered table-responsive" id="datatabletry">
                                      <thead>
                                        <td>NIK</td>
                                        <td>Nama</td>
                                        <td>Phone</td>
                                        <td>Gender</td>
                                        <td>Kab. / Kota</td>
                                        <td>Aksi</td>
                                      </thead>
                                      <tbody id="tampildata">
                                      </tbody>
                                    </table> -->
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

        <!-- <script>
          $(document).ready(function() {
            //try dataTables
            $('#datatabletry').DataTable();

            //ini untuk menampilkan data
            tampilAjax();

            //tombol untuk memunculkan modal
            $('#btnTambah').click(function() {
              $('#modal_form').modal('show');
              $('#modal_form').find('.modal-title').text('Menambahkan Orang');
              $('#form').attr('action','<?= base_url()?>orang_ajax/simpanorang');
            });


            //tombol untuk menyimpan
            $('#btnSimpan').click(function functionName() {
              var url = $('#form').attr('action');
              var data = $('#form').serialize();
              // memvalidasi form
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
              if (hasil == '1234567') {

                $.ajax({
                  type: 'ajax',
                  method: 'post',
                  url: url,
                  data: data,
                  async: false,
                  dataType: 'json',
                  success: function(res) {
                    if (res.success) {
                      $('#modal_form').modal('hide');
                      $('#form')[0].reset();
                      if (res.type == 'simpan') {
                        $('.alert-success').html('Berhasil menambah orang').fadeIn().delay(4000).fadeOut('slow');
                      } else if (res.type== 'edit') {
                        $('.alert-success').html('Berhasil mengedit orang').fadeIn().delay(4000).fadeOut('slow');
                      }

                      tampilAjax();
                    } else {
                      alert("Terjadi Kesalahan");
                    }

                  },
                  error: function() {
                    alert("Gagal menyimpan!");
                  }
                });
              }

            });

            //ini bagian edit
            $('#tampildata').on('click','.item-edit',function() {
              var id = $(this).attr('data');
              $('#modal_form').modal('show');
              $('#modal_form').find('.modal-title').text('Edit Orang');
              $('#form').attr('action','<?= base_url(); ?>orang_ajax/updateorang');
              $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?= base_url(); ?>orang_ajax/editorang',
                data: {id:id},
                async: false,
                dataType: 'json',
                success: function(data) {
                  $('input[name=nik]').val(data.nik);
                  $('input[name=nama]').val(data.nama);
                  $('input[name=phone]').val(data.phone);
                  var gender = data.gender;
                  if (gender == 'L') {
                    var html = '<label>'+
                                  '<input type="radio" name="gender" value="L" data-title="Laki-laki" checked/> Laki-laki </label>'+
                              '<label>'+
                                  '<input type="radio" name="gender" value="P" data-title="Perempuan" /> Perempuan </label>';
                    $('#pilihgender').html(html);
                  } else if (gender == 'P') {
                    var html = '<label>'+
                                  '<input type="radio" name="gender" value="L" data-title="Laki-laki" /> Laki-laki </label>'+
                              '<label>'+
                                  '<input type="radio" name="gender" value="P" data-title="Perempuan" checked/> Perempuan </label>';
                    $('#pilihgender').html(html);
                  }
                  $('input[name=alamat]').val(data.alamat);
                  $('input[name=kecamatan]').val(data.kecamatan);
                  $('#pilihkabkot').text("Kab./Kota Sebelumnya : "+data.kabkot);
                  $('textarea[name=catatan]').val(data.catatan);
                  $('input[name=id_orang]').val(data.id);

                },
                error: function() {
                  alert("Tidak bisa mengedit");
                }
              });
            });


            //bagian hapus data
            $('#tampildata').on('click','.item-hapus',function() {
              var id = $(this).attr('data');
              $('#modal_hapus').modal('show');
              //untuk prevent previous handler
              $('#btnHapus').unbind().click(function() {
                $.ajax({
                  type: 'ajax',
                  method: 'get',
                  async: false,
                  url: '<?= base_url() ?>orang_ajax/hapusorang',
                  data:{id_orang:id},
                  dataType: 'json',
                  success: function(res) {
                    if (res.success) {
                      $('#modal_hapus').modal('hide');
                      $('.alert-success').html('Berhasil Menghapus Orang').fadeIn().delay(4000).fadeOut('slow');
                      tampilAjax();
                    } else {
                      alert('Error');
                    }
                  },
                  error: function() {
                    alert('Gagal Menghapus');
                  }
                });
              });
            });

            //fungsi tampil data
            function tampilAjax() {
              $.ajax({
                type: 'ajax',
                url : '<?= base_url(); ?>orang_ajax/ambilorang',
                async : false,
                dataType: 'json',
                success: function(data) {
                  // var html = '';
                  // var i;
                  // for (var i = 0; i < data.length; i++) {
                  //   html += '<tr>'+
                  //             '<td><a href="javascript:;" class="item-detail" data="'+data[i].id+'">'+data[i].nik+'</a></td>'+
                  //             '<td>'+data[i].nama+'</td>'+
                  //             '<td>'+data[i].phone+'</td>'+
                  //             '<td>'+data[i].gender+'</td>'+
                  //             '<td>'+data[i].kabkot+'</td>'+
                  //             '<td>'+
                  //               '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'" >Edit</a>'+
                  //               '<a href="javascript:;" class="btn btn-danger item-hapus" data="'+data[i].id+'">Hapus</a>'+
                  //             '</td>'+
                  //           '</tr>';
                  //
                  // }

                  $('#tampildata').html(data);
                },
                error: function() {
                  alert("Gagal");
                }
              });
            }

            //ini untuk tombol batal
            $('#btnBatal').click(function() {
              $('#form')[0].reset();
            });

            //ini bagian untuk menampilkan detail data
            $('#tampildata').on('click','.item-detail',function() {
              var id = $(this).attr('data');
              $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?= base_url(); ?>orang_ajax/editorang',
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
                },
              });
            });

          });
        </script> -->

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
            if (confirm("Anda yakin hapus data ini?")) {
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
            }
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
                <button type="reset"  class="btn btn-default" data-dismiss="modal">Keluar</button>
              </div>
            </div>
          </div>
        </div>
