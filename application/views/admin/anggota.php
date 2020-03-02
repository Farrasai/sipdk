<div class="container">
<!--Page Heading-->
<br>

<h2 class="mt-5">Daftar Anggota</h2>
<hr class="mr-9">


<div class="row">
      <div class="col-16">
        <div class="card full-screen-container">
          <div class="card-header align-items-start justify-content-between flex">
            <h5 class="card-title  pull-left">Halaman Anggota</h5>
          </div>
          <div class="card-body">
            <div class="list-unstyled member-list row">

            	<?php $i = 1; ?>
                	<?php foreach($anggota as $a) : ?>

              <div class="col-lg-4 col-sm-8 col-xs-16 ">
                <div class="media flex-column "> <span class="message_userpic large"><img class="d-flex mr-3" src="<?= base_url('assets/img/profile/') . $a['image']; ?>" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><?= $a['name']; ?></h6>
                    
                
                    <?= $a['bidang']; ?>

                    <p class="description">Terakhir Login :  <?= date('d M H:i',$a['last_login']);?> WIB</p>




                   <!-- <button class="btn btn-outline-success btn-round">Info</button> -->
                  </div>
                </div>
              </div>


              <?php $i++; ?>
                 	<?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </div>


</div>

      


  
