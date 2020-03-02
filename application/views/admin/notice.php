



<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
      </div>
    </div>

    <?= form_open_multipart('admin/notice'); ?>

    <div class="row">
      <div class="col-sm-16">
        <div class="card">
          <div class="card-body">
            <h5 class="m-0">Pengumuman / Broadcast Ke Anggota</h5>
            <hr> 

            <?= form_error('tanggal', '<div class="alert alert-danger col-lg-6" role="alert">','</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <div class="row ">
 

                        <div class="col-lg-8 col-md-8">
                            <div class="form-group ">
                                <label>Tentukan Tanggal</label>
                                <div class="input-group">
                                  <input type="date" class="form-control datepicker" aria-label="" name="tanggal" id="tanggal" placeholder="tanggal pengumuman">
                                  <button class="input-group-addon disabled"><i class="fa fa-calendar"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-16 col-md-16">
                            <div class="form-group ">
                                <label>Isi Pengumuman</label>
                                <textarea class="form-control" name="perihal" id="perihal" placeholder="Tulis pengumuman disini" rows="4"></textarea>
                            </div>

                    <button type="submit" class="btn btn-primary">Bagikan</button>
                        </div>
                    </div>                    
                </div>
             </div>
       </div>


