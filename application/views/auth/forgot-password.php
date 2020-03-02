
<div class="wrapper-content-sign-in p-0">
  <div class="col-md-8 offset-md-8 text-left side_signing_full">
    <form class="form-signin1 full_side text-white " method="post" action="<?= base_url('auth/forgotpassword'); ?>">
      <h2 class="tex-black mb-4">Lupa Password </h2>


    <?= $this->session->flashdata('message'); ?>


      <label  class="sr-only">Email address</label>
      <input type="text" class="form-control border" id="email" name="email" placeholder="Masukan email disini" value="<?= set_value('email'); ?>">
        <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
      
     

      <button type="submit" class="btn btn-lg btn-info">Reset Password</button>
    
      <br>
       <a class=" text-white" href="<?= base_url('auth'); ?>">&larr;Kembali Login</a>
    </form>
    <br>
  </div>
  <footer class="footer-content row  justify-content-between align-items-center">
    <div class="col-sm-8">2019. Dinas Pendidikan dan Kebudayaan Kab. Cilacap<a href="http://www.maxartkiller.in/" target="_blank" class=""></a></div>
    <div class="col-sm-8 text-right"><a href="#" target="_blank" class="text-white">Panduan</a> | <a href="#" target="_blank" class="text-white">Tentang</a> </div>
  </footer>
</div>
 
