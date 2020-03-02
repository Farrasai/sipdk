<header class="navbar-fixed">

<nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">
  <div class="sidebar-left">
    <img class="navbar-brand" src="<?= base_url('assets/'); ?>img/logo_headerr.png">
  </a>
    <button class="btn btn-link icon-header mr-sm-2 pull-right menu-collapse" ><span class="fa fa-bars"></span></button>
  </div>
  <div class="d-flex mr-auto"> &nbsp;</div>
  <ul class="navbar-nav content-right">
    <li class="align-self-center hidden-md-down"> <a  href="#" class="btn btn-sm btn-primary mr-2"><span class="fa fa-download "></span> Panduan</a> </li>
    <li class="v-devider"></li>
    
    </li>
    <li class="v-devider"></li>
    <li class="nav-item "> <a class="btn btn-link icon-header menu-collapse-right" href="#"><span class="fa fa-podcast"></span> </a> </li>
  </ul>
  <div class="sidebar-right pull-right " >
    <ul class="navbar-nav  justify-content-end">
      <li class="nav-item">
        <button class="btn-link btn userprofile"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="userpic"><img src="<?= base_url('assets/img/profile/'). $user['image']; ?>" alt="user pic"></span> <span class="text"><?= $user['name']; ?></span></button>
        <div class="dropdown-menu"> <a class="dropdown-item" href="<?= base_url('user'); ?>">Profil</a> 
          <a class="dropdown-item" href="<?= base_url('user/edit'); ?>">Edit Profil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Keluar</a> </div>
      </li>
      
    </ul>
  </div>
</nav>
</header>