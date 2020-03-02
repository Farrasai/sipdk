<!-- sidebar kanan-->

<div class="sidebar-right">
<ul class="nav flex-column " >
  <li class="nav-item text-center">
    


    
  </li>
</ul>
<hr>
<ul class="nav flex-column " >
  <li class="title-nav">Daftar Anggota</li>
  <li class="nav-item">


                  <?php foreach($anggota as $a) : ?>

    <div class="list-unstyled media-list">
      <div class="media"> <span class="message_userpic">
        <img class="d-flex" src="<?= base_url('assets/img/profile/'). $a['image']; ?>" alt="Generic user image"></span>
        <div class="media-body">
  <h6 class="mt-0 mb-1"><?= $a['name']; ?></h6>
          <?= $a['bidang']; ?></div>
      </div>
    </div>


                  <?php endforeach; ?>

  </li>
</ul>
<hr>
<ul class="nav flex-column " >
  <li class="title-nav">New Event Request</li>
  <li class="nav-item">
    <div class="list-unstyled media-list"> <a href="#" class="media">
      <div class="media-body">
        <h6 class="mt-0 mb-1">20 February, 2017</h6>
        New Jersey, UK <br>
        <p class="description">Musical night festival seasons, Drama and comedy cultural famil</p>
      </div>
      </a> <a href="#" class="media">
      <div class="media-body">
        <h6 class="mt-0 mb-1">20 February, 2017</h6>
        New Jersey, UK <br>
        <p class="description">Musical night festival seasons, Drama and comedy cultural famil</p>
        <p class="description"> <span>Privately invited by:</span> <span class="invites-by"><img src="../img/user-header.png" alt="complete profile"> <span class="user-status bg-success "></span></span> <span class="invites-by"><img src="../img/user-header.png" alt="complete profile"></span> <span class="invites-by"><img src="../img/user-header.png" alt="complete profile"></span> </p>
      </div>
      </a> </div>
  </li>
</ul>
<hr>
<ul class="nav flex-column " >
  <li class="title-nav">Last Message</li>
  <li class="nav-item">
    <div class="list-unstyled media-list">
      <div class="media"> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"></span>
        <div class="media-body">
          <h6 class="mt-0 mb-1">Rahul Akshay</h6>
          2:00 pm, 20 January, 2017 <br>
          <p class="description">Hi! Are you ready for Musical night festival seasons, Drama and comedy cultural family show.</p>
          <button class="btn btn-outline-primary btn-round mr-sm-2"><i class="fa fa-reply"></i> Reply</button>
          <button class="btn btn-outline-danger btn-round ">Close</button>
        </div>
      </div>
    </div>
    <div class="nav-link"></div>
  </li>
</ul>
<hr>
<ul class="nav flex-column " >
  <li class="title-nav text-center">Advertising space</li>
  <li class="nav-item">
    <div class="list-unstyled"> <a href="http://www.maxartkiller.in/" target="_blank" class="media text-center"> <span class="col text-center"><img class="" src="../img/advertise_maxartkiller_ui-ux.png" alt="advertise maxartkiller ui ux creative design"></span> <br>
      </a> </div>
    <a href="http://www.maxartkiller.in/" target="_blank" class="nav-link text-center">www.maxartkiller.in</a> </li>
</ul>
<br>
<br>

</div>