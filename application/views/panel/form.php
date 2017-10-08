                <div class="portlet-body form">
                                    <form class="form-horizontal" action="<?= base_url('form/tambah'); ?>" id="" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">

                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">

                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Data Diri </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="alert alert-danger display-none">
                                                        <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                    <?php if ($input == 'berhasil'): ?>
                                                      <div class="alert alert-success">
                                                          <button class="close" data-dismiss="alert"></button> Berhasil Menambah Inputan! <a class="btn btn-primary" href="<?= base_url('table'); ?>">Lihat Table</a> </div>
                                                    <?php endif; ?>

                                                    <div class="tab-pane" id="tab2">
                                                        <h3 class="block">Provide your profile details</h3>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">NIK
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" id="mask_number" class="form-control" name="nik" value="" required/>
                                                                <span class="help-block"> Isi NIK Sesuai KTP Anda </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nama Lengkap
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="nama" value="" required/>
                                                                <span class="help-block"> Masukan Nama Sesuai KTP </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nomer Handphone
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="phone" value="" required/>
                                                                <span class="help-block"> Masukan No HP Aktif </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Jenis Kelamin
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
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
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="alamat" value="" required/>
                                                                <span class="help-block"> Masukan Alamat Lengkap </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Kecamatan
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="kecamatan" value="" required/>
                                                                <span class="help-block"> Masukan Kecamatan </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Kabupaten / Kota
                                                              <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
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
                                                            <div class="col-md-4">
                                                                <textarea class="form-control" rows="3" name="catatan"></textarea>
                                                                <span class="help-block"> Catatan Penghargaan / Kriminal </span>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="form-group">
                                                          <div class="col-md-3">
                                                            &nbsp;
                                                          </div>
                                                          <?php if ($input == 'yes'): ?>
                                                            <div class="col-md-1">
                                                              <a class="btn red btn-outline" href="<?= base_url('table'); ?>">Batal</a>
                                                            </div>
                                                          <?php elseif($input == 'berhasil'): ?>
                                                            <div class="col-md-1">
                                                              <a class="btn red btn-outline" href="<?= base_url('table'); ?>">Batal</a>
                                                            </div>
                                                          <?php endif; ?>
                                                          <div class="col-md-2">
                                                            
                                                            <input class=" form-control btn green" type="submit" name="kirim" value="Simpan">
                                                          </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
