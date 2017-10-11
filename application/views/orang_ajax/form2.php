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
        <form class="form-horizontal" id="form" action="" method="post">
          <input type="hidden" name="id" value="">
          <div class="form-body">
            <div class="form-group">
                <label class="control-label col-md-3">NIK
                    <span class="required"> * </span>
                </label>
                <div class="col-md-7">
                    <input type="text" id="mask_number" class="form-control" name="nik" value=""/>
                    <span class="help-block"> Isi NIK Sesuai KTP Anda </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Nama Lengkap
                    <span class="required"> * </span>
                </label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="nama" value="" />
                    <span class="help-block"> Masukan Nama Sesuai KTP </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Nomer Handphone
                    <span class="required"> * </span>
                </label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="phone" value="" />
                    <span class="help-block"> Masukan No HP Aktif </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Jenis Kelamin
                    <span class="required"> * </span>
                </label>
                <div class="col-md-7">
                    <div class="radio-list" id="pilihgender">
                        <label>
                            <input type="radio" name="gender" value="L" data-title="Laki-laki" /> Laki-laki </label>
                        <label>
                            <input type="radio" name="gender" value="P" data-title="Perempuan" /> Perempuan </label>
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
                    <input type="text" class="form-control" name="alamat" value="" />
                    <span class="help-block"> Masukan Alamat Lengkap </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Kecamatan
                    <span class="required"> * </span>
                </label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="kecamatan" value="" />
                    <span class="help-block"> Masukan Kecamatan </span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Kabupaten / Kota
                  <span class="required"> * </span>
                </label>
                <div class="col-md-7">
                    <select name="kabkot" id="country_list" class="form-control" >
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
                    <span class="help-block" id="pilihkabkot"> Pilih Kabupaten / Kota </span>
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
