
<div class="wrapper-content-sign-in p-0">
  <div class="col-md-8 offset-md-8 text-left side_signing_full">
    <form class="form-signin1 full_side text-white " method="post" action="<?= base_url('auth/changepassword'); ?>">
      <h4 class=" mb-4">Ubah Password untuk :
        <u class="text-warning">
    <?= $this->session->userdata('reset_email'); ?>
        </u>
       </h4>


 <?= $this->session->flashdata('message'); ?>

      
      <input type="password" class="form-control border" id="password1" name="password1" placeholder="Masukan password baru...">

        <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?>

<br>

       <input type="password" class="form-control border" id="password2" name="password2" placeholder="Ulangi password baru...">

        <?= form_error('password2', '<small class="text-danger pl-3">','</small>'); ?>
     

      <button type="submit" class="btn btn-lg btn-info">Reset Password</button>
    
      <br>
       <a class=" text-white" href="<?= base_url('auth'); ?>">&larr;Kembali Login</a>
    </form>
   

    <br>
  </div>
  