<div class="container">
<!--Page Heading-->
<br>

<h2 class="mt-5">Dashboard Menu</h2>
<hr class="mr-9">

<!--tabel-->


	

	<div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">


           <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahMenu">
  			Tambah Menu
		</button>
         <br>
		<?= form_error('menu', '<div class="alert alert-danger col-lg-6" role="alert">','</div>'); ?>

         <?= $this->session->flashdata('message'); ?>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Menu</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $i = 1; ?>
                	<?php foreach($menu as $m) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $m['menu']; ?></td>
                    <td>
                    	<a class="btn btn-sm btn-warning text-light" href="<?= base_url(); ?>menu/edit/<?= $m ['id']; ?>" >edit</a>

                    	<a class="btn btn-sm btn-danger text-light" href="<?= base_url(); ?>menu/hapusmenu/<?= $m ['id']; ?>" class="btn-sm btn-danger"  onclick="return confirm('Yakin untuk menghapus?');">delete</a>

                    </td>
                  </tr>
                  	<?php $i++; ?>
                 	<?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
	

<!-- Modal Tambah -->
<div class="modal fade" id="tambahMenu" tabindex="-1" role="dialog" aria-labelledby="tambahMenu" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="tambahMenu">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-light">

        <form action="<?= base_url('menu'); ?>" method="post">
 		 <div class="form-group">
    		<label for="">Tambahkan menu disini</label>
   			 <input type="text" class="form-control" id="menu" name="menu" placeholder="Masukan Menu">
   			 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
  
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>


</div>




  
