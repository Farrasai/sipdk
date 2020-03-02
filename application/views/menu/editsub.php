<div class="container">
<!--Page Heading-->
<br>

<h2 class="mt-5"><?= $title; ?></h2>
<hr class="mr-9">

<div class="row">
	<div class="col-lg-8">

	
	<?= form_open_multipart('menu/editsub/'.$this->uri->segment(3)); ?>
  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Ubah</label>
    <div class="col-sm-10">
      <input type="hidden" name="id" >
      <input type="text" class="form-control" id="title" name="title">

<?= form_error('title', '<div class="alert alert-danger col-lg-6" role="alert">','</div>'); ?>
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



  
