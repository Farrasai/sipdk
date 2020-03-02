
<div class="wrapper-content">
  <div class="row  align-items-end  customer-profile-cover">
    <figure class="background"><img src="<?= base_url('assets/'); ?>img/normal.png" alt="Social cover image"> </figure>
    <div class="container mb-1">
      <div class="row  align-items-center p-2">
        <figure class="social-profile-pic"><img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt=""></figure>
        <div class="col-sm-16 col-lg-4 col-xl-4  profile-name">
          <h2><?= $user['name']; ?></h2>
          <p>Dinas P & K Kabupaten Cilacap</p>
          <button class="btn btn-success " ><?= $user['jabatan']; ?></button>
          <button class="btn btn-warning  ml-1" ><?= $user['bidang']; ?></button>
        </div>
        <div class="col-16 col-sm-16 col-lg-9 col-xl-9 text-right d-flex">
          <div class="col col-sm-8 col-lg col-xl-8">
            <h4>Kinerja</h4>
            <h3><span class="text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>&nbsp;</h3>
          </div>
          <div class="col col-sm-4 col-lg col-xl-4 ">
            <h4>Laporan</h4>
            <h2>125</h2>
          </div>
          <div class="col col-sm-4 col-lg col-xl-4 ">
            <h4>Kegiatan</h4>
            <h2>143</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert"> Selamat Datang
  <strong><?= $user['name'];?></strong> di laman aplikasi Dinas Pendidikan & Kebudayaan Kab.Cilacap.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile">Aktivitas</a> </li>
      <li class="nav-item"> <a class="nav-link " href="<?= base_url('surat'); ?>">Surat</a> </li>
      <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan'); ?>">Laporan</a> </li>
      <li class="nav-item"> <a class="nav-link" href="<?= base_url(''); ?>">apayahh</a> </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="profile" role="tabpanel">
        <div class="row">
          <div class="col-lg-6">
             
                <?= $this->session->flashdata('message'); ?>

          </div>
          <div class="col-sm-16">
            <h3 class="mt-2" >Info Personal </h3>
            <hr>
          </div>
          <form class="col-sm-16">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-lg-8 col-md-8">
                    <label>Surat Masuk</label>
                    <input type="text" class="form-control text-dark" placeholder="Belum Ada" 
                     disabled>
                  </div>
                  <div class="col-lg-8 col-md-8">
                    <label>Email</label>
                    <input type="text" class="form-control text-dark" placeholder="" value="<?= $user['email'];?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-8 col-md-8">
                    <label>Jabatan</label>
                    <input type="text" class="form-control text-dark" placeholder="" value="<?= $user['jabatan'];?>" disabled>
                  </div>
                  <div class="col-lg-8 col-md-8">
                    <label>Bidang</label>
                    <input type="text" class="form-control text-dark" placeholder="" value="<?= $user['bidang'];?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-8 col-md-8">
                    <div class="row">
                      
                      <div class="col-lg-8">
                        <label>Akun Terverifikasi</label>
                        <input type="text" class="form-control text-dark" placeholder="" value="<?= $user['is_active'];?>" readonly>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
              </div>






 <div class="col-md-4">
  <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Pengumuman</div>
  <div class="card-body">
    <p class="card-text">
      <?php $i = 1; ?>
       <?php foreach($umum as $umum) : ?>
   <h5 class="text-dark"><?= date('d F Y', strtotime($umum['tanggal']));?></h5>

    <p class="text-light"><?= $umum['perihal']; ?></p>
               
                  <?php $i++; ?>
                  <?php endforeach; ?>
    </p>
  </div>
</div>
</div>

       
          </form>
        </div>
      </div>
<footer class="footer-content ">
    <div class="container ">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-16 col-lg-8 col-xl-8">Terdaftar sejak  <a href="" target="_blank" class=""><?= date('d F Y', $user['date_created']); ?></a></div>
        <div class="col-md-16 col-lg-8 col-xl-8 text-right"><a href="#" target="_blank" class="text-light">Dinas Pendidikan & Kebudayaan Kab. Cilacap <?= date('Y'); ?></a> 
      </div>
    </div>
  </footer>
      


  
