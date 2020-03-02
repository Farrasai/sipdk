<div class="container">
<!--Page Heading-->
<br>

<h2 class="mt-5">Dashboard Admin</h2>
<hr class="mr-9">


<div class="row">
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block success" id="four">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament"><?= $hl; ?></span></h5>
              <p>Total Laporan Masuk</p>
            </div>
            <i class="fa fa-cubes"></i> </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Progress Bulanan</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span> </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-cubes"></i> </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block danger">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament"><?= $ha; ?></span></h5>
              <p>Anggota Aktif</p>
            </div>
            <i class="fa fa-users"></i> </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Progress Bulanan</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span> </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-users"></i> </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block warning">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament"><?= $hd; ?></span></h5>
              <p>Arsip Data</p>
            </div>
            <i class="fa fa-cart-arrow-down"></i> </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Progress Bulanan</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span> </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-cart-arrow-down"></i> </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block primary">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament"><?= $hp; ?></span></h5>
              <p>Pengumuman</p>
            </div>
            <i class="fa fa-comments"></i> </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Progress Bulanan</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span> </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-comments"></i> </div>
      </div>
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
      


  
