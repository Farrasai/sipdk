<div class="sidebar-left">
<div class="user-menu-items">
  <div class="list-unstyled btn-group">
    <button class="media btn btn-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="message_userpic"><img class="d-flex" src="<?= base_url('assets/img/profile/'). $user['image']; ?>" alt="Generic user image"></span>
    <span class="media-body"> <span class="mt-0 mb-1"><?= $user['name']; ?></span>
      <small><?= $user['jabatan']; ?></small> </span>
    </button>
    <div class="dropdown-menu"> <a class="dropdown-item" href="customerprofile.html">Profile</a> <a class="dropdown-item" href="inbox.html">Mailbox</a> <a class="dropdown-item" href="#">Application</a> <a class="dropdown-item" href="#">Analytics Report</a> <a class="dropdown-item" href="#">Preferances</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Setting</a> </div>
  </div>
</div>

<ul class="nav flex-column in">
  <li class="title-nav mt-3 text-warning"><strong>Agenda Akan Datang</strong></li>
  <li class="nav-item "> 
<div class="nav-link">
    <h5>12:30 WIB, Selasa <span class="fa fa-bell-o pull-right"></span></h5>
    <span class="meeting-subject">Agenda: Team mnufacturing review meeting. Board Compulsory</span> 
  <hr>    
    </div>
  </li>
</ul>


<!-- query menu-->

<?php
$role_id   = $this->session->userdata('role_id');
$queryMenu = "SELECT `user_menu`.`id`,`menu`
              FROM   `user_menu` JOIN `user_access_menu`
              ON     `user_menu`.`id` = `user_access_menu`.`menu_id`
              WHERE  `user_access_menu`.`role_id` = $role_id
            ORDER BY `user_access_menu`.`menu_id` ASC 
";
$menu = $this->db->query($queryMenu)->result_array();

?>



<ul class="nav flex-column in" id="side-menu">


  <!-- Looping Menu-->
  <?php foreach ($menu as $m) : ?>
  <li class="title-nav text-info"><strong><?= $m['menu'];?></strong></li>
  


  <!-- Sub menu sesuai menu-->
  <?php
  $menuId    = $m['id'];
  $querySubMenu =  "SELECT *
                  FROM  `user_sub_menu` JOIN `user_menu`
                  ON    `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  WHERE `user_sub_menu`.`menu_id` = $menuId
                  AND   `user_sub_menu`.`is_active` = 1
    ";
  $subMenu = $this->db->query($querySubMenu)->result_array();
  ?>

  <?php foreach ($subMenu as $sm) : ?>
    
    <?php if ($title == $sm['title']) : ?>
    <li class="in nav-item active">
        <?php else : ?>
    <li class="in nav-item">
        <?php endif; ?>


    <a  href="<?= base_url($sm['url']); ?>" class="nav-link ">
    <?= $sm['title']; ?></a></li>
  
  <?php endforeach; ?>
  <?php endforeach; ?>
 
  
       
<hr>
<ul class="nav flex-column in" >
  <li class="title-nav">Activity States</li>
  <li class="nav-item "><a href="#" class="nav-link"><span><span class="dynamicsparkline2">Loading..</span> </span><br>
    Daily activity</a></li>
</ul>
<hr>
<ul class="nav flex-column in">
  <li class="title-nav">Rapat Internal</li>
  <li class="nav-item "> 
<div class="nav-link">
    <h5>12:30 PM, Today <span class="fa fa-bell-o pull-right"></span></h5>
    <span class="meeting-subject">Agenda: Team mnufacturing review meeting. Board Compulsory</span> 
    <div class="">
      <button class="btn btn-outline-success btn-round mr-sm-2">Snooz</button>
      <button class="btn btn-outline-danger btn-round ">Dismiss</button>
    </div>
    </div>
  </li>
</ul>
<br>
<br>
</div>

