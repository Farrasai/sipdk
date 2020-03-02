
<div class="wrapper-content-sign-in p-0">
  <div class="col-md-8 offset-md-8 text-left side_signing_full">
    <form class="form-signin1 full_side text-white " method="post" action="<?= base_url('auth'); ?>">
      <h2 class="tex-black mb-4">Login </h2>
    <?= $this->session->flashdata('message'); ?>
      <label  class="sr-only">Email address</label>
      <input type="text" class="form-control border" id="email" name="email" placeholder="Masukan email disini" value="<?= set_value('email'); ?>">
        <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
      <br>
      <label class="sr-only">Password</label>
      <input type="password" class="form-control border" id="password" name="password" placeholder="Masukan password disini" >
       <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?>
      <button type="submit" class="btn btn-lg btn-info">Masuk</button>
    
      <br>
       <a class=" text-white" href="<?= base_url('auth/registration'); ?>">Daftar Akun</a>
    </form>
    <br>
  </div>
  <footer class="footer-content row  justify-content-between align-items-center">
    <div class="col-sm-8">2019. Dinas Pendidikan dan Kebudayaan Kab. Cilacap<a href="http://www.maxartkiller.in/" target="_blank" class=""></a></div>
    <div class="col-sm-8 text-right"><a href="#" target="_blank" class="text-white">Panduan</a> | <a href="#" target="_blank" class="text-white">Tentang</a> </div>
  </footer>
</div>
 
