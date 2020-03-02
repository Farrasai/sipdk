<div class="container">
<!--Page Heading-->
<br>

<h2 class="mt-5"><?= $title; ?></h2>
<hr class="mr-9">

<div class="row">
	<div class="col-lg-8">

		<?= form_open_multipart('user/edit'); ?>
		<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-dark" id="email" name="email" value="<?= $user['email'];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];?>">

<?= form_error('name', '<div class="alert alert-danger col-lg-6" role="alert">','</div>'); ?>

    </div>
  </div>

   <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $user['jabatan'];?>">

<?= form_error('name', '<div class="alert alert-danger col-lg-6" role="alert">','</div>'); ?>

    </div>
  </div>

 <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Bidang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bidang" name="bidang" value="<?= $user['bidang'];?>">

<?= form_error('name', '<div class="alert alert-danger col-lg-6" role="alert">','</div>'); ?>

    </div>
  </div>

  <div class="form-group row">
    	<div class="col-sm-2">Foto </div>
    	<div class="col-sm-10">
    		<div class="row">
    			<div class="col-sm-3">
    				<img src="<?= base_url('assets/img/profile/'). $user['image']; ?>" class="img-thumbnail">
    			</div>
    		<div class="col-sm-12">
    			<div class="custom-file">
  	<input type="file" class="custom-file-input" id="image" name="image">
  	<label class="custom-file-label" for="image">Unggah Foto</label>
					</div>
    			</div>
    		</div>
    	</div>
  </div>
  			<div class="form-group row justify-content-end">
  				<div class="col-sm-10">
  					<button type="submit" class="btn btn-primary">Simpan</button>
  				</div>
  			</div>


		</form>

</div>
</div>



  
