<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
      </div>
      <div class="col text-right ">
        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-16">
        <div class="card">
          <div class="card-body">
            <hr> 
            <div class="row justify-content-center">
                <div class="col-md-10  col-lg-6 form-signin1 white mt-0">
                    
                    <div class="row ">
                        <div class="col-lg-16 col-md-16 text-center">
                            <img src="<?= base_url('assets/'); ?>img/laporan.png" alt="" width="300px">
                            <br>
                           
                        </div>
                        
                    </div>
                    <br>
                    <hr>
                    <div class="row ">
                        <div class="col-lg-16 col-md-16">
                            <div class="form-group ">
                                <label>Nama Laporan</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-16 col-md-16">
                            <div class="form-group ">
                                <label>Jenis Laporan</label>
                                <select class="form-control" >
                                    <option>Laporan Bulanan</option>
                                    <option>Laporan Keuangan</option>
                                    <option>Laporan Rutin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group ">
                                <label>Tanggal</label>
                                <input type="date" placeholder="tgl" >
                            </div>
                        </div>
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01"></span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileupload"
                                                aria-describedby="fileupload">
                            <label class="custom-file-label" for="fileupload">Pilih Dokumen</label>
                        </div>
                        </div>

                    </div>
                </div>  
            </div>
          </div>
            <div class="card-footer">
            <a href="<?= base_url('user'); ?>" class="btn btn-round"><strong>&larr; Kembali</strong></a>
                <button class="btn btn-success pull-right">Kirim</button>
            </div>    
        </div>
      </div>
    </div>
  </div>