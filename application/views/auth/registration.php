
<div class="wrapper-content-sign-in p-0">
  <div class="col-md-8 offset-md-8 text-left side_signing_full">


    <form class="form-signin1 full_side text-white" method="post" action="<?= base_url('auth/registration'); ?>">
      <h2 class="tex-black mb-4">Daftar </h2>
      <label  class="sr-only">Nama Lengkap</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nama" 
      value="<?= set_value('name'); ?>">
      <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
      <br>
      <label  class="sr-only">Alamat Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email" 
      value="<?= set_value('email'); ?>">
      <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
      <br>
      <label class="sr-only">Password</label>
      <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukan password" >
        <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?>
       <br>
      <label class="sr-only">Ulangi Password</label>
      <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi password" >
      
     <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
     <br>
     <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Login</a>
    </form>
    <br>
  </div>

  <footer class="footer-content row  justify-content-between align-items-center">
    <div class="col-sm-8">2019. Dinas Pendidikan dan Kebudayaan Kab. Cilacap<a href="http://www.maxartkiller.in/" target="_blank" class=""></a></div>
    <div class="col-sm-8 text-right"><a href="#" target="_blank" class="text-white">Panduan</a> | <a href="#" target="_blank" class="text-white">Tentang</a> </div>
  </footer>
</div>
 
