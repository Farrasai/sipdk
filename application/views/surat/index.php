
<div class="row">
      <div class="col-sm-16">
        <div class="card">
          <div class="card-body">
            
            <hr> 
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <div class="row ">
                        <div class="col-lg-16 col-md-16 text-center">
                            <img src="<?= base_url('assets/'); ?>img/surat.png" alt="" width="300px">
                            <br>
                            <br>
                            <h5>KIRIM SURAT </h5>
                            <p>Bagikan surat ke semua bidang atau bidang tertentu</p>
                        </div>
                        
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8">
                            <label>Dari</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>Perihal</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8">
                            <label>Kepada</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>Bagian</label>
        
                            <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
                                      <option value="AF">Sekretariat</option>
                                      <option value="AF">Bidang Kebudayaan </option>
                                      <option value="AF">Bidang PAUD DIKMAS</option>
                                      <option value="AF">Bidang DIKDAS</option>
                                      <option value="AF">Bidang PPTK</option>
                                      <option value="AF">Bidang SARPRAS</option>
                                      </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <label>Nomor Surat</label>
                                    <input type="text" class="form-control" placeholder="">
                                  </div>
                                  <div class="col-lg-8">
                                    <label>Jenis Surat</label>
                                    <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
                                      <option value="AF">Pemberitahuan</option>
                                      <option value="AF">Pengumuman</option>
                                      <option value="AF">Peraturan</option>
                                      <option value="AF">Pemberitahuan</option>
                                      <option value="AF">Perjanjian</option>
                                      <option value="AF">Permohonan</option>
                                      <option value="AF">Pemberitahuan</option>
                                      <option value="AF">Surat Balasan</option>
                                      <option value="AF">Surat Keputusan</option>
                                      <option value="AF">Surat Tugas</option>
                                      <option value="AF">Surat Perintah</option>   
                                      <option value="AF">Surat Panggilan</option>   
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-8 col-md-8">
                                <div class="row">
                                  <div class="col-lg-8">
                                    <label>Sifat Surat</label>
                                    <select class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                                      <option value="AL">Biasa</option>
                                      <option value="AL">Segera</option>
                                      <option value="AL">Penting</option>
                                      <option value="AL">Rahasia</option>
                                      
                                    </select>
                                  </div>
                                  <div class="col-lg-8">
                                    <label>No. Agenda</label>
                                    <input type="text" class="form-control" placeholder="">
                                  </div>
                                </div>
                              </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8">
                            <label>Tanggal Surat</label>
                            <input type="date" class="form-control datepicker" placeholder="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <label>Keterangan</label>
                            <input type="text" class="form-control datepicker" placeholder="">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-lg-8 col-md-8">
                            <label>Jumlah Lampiran</label>
                            <input type="number" class="form-control" placeholder="" value="1">
                        </div>
                        
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-16">
                            <label>Upload Surat</label><br>
                            <div class="custom-dropzone text-center align-items-center" id="my-dropzone">
                                <div class="dz-default dz-message" data-dz-message>
                                    <h3 class="mb-0"><i class="fa fa-cloud-download"></i></h3><br><p>Klik disini untuk upload <input type="file"></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-16">
                            <div class="form-group ">
                                <label class="custom-control custom-checkbox" for="2c-option1">
                                    <input type="checkbox" class="custom-control-input"  id="2c-option1" checked>
                                    <span class="custom-control-indicator"></span> 
                                    <span class="custom-control-description"> I agree with terms and condition. Lorem ipsum dolor sit amet.</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
          </div>
            <div class="card-footer">
            <a href="<?= base_url('user'); ?>" class="btn btn-round"><strong>&larr; Kembali</strong></a>
                <button class="btn btn-success pull-right">KIRIM</button>
            </div>    
        </div>
      </div>
    </div>
  </div>