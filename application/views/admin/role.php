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


           <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRole">
  			Tambah Role
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
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $i = 1; ?>
                	<?php foreach($role as $r) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $r['role']; ?></td>
                    <td>
                      <a class="btn btn-sm btn-warning text-light" href="<?= base_url('admin/roleaccess/') . $r['id']; ?>">akses</a>
                    	<a class="btn btn-sm btn-primary text-light" href="">edit</a>
                    	<a class="btn btn-sm btn-danger text-light" href="">delete</a>

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
	

<!-- Modal -->
<div class="modal fade" id="tambahRole" tabindex="-1" role="dialog" aria-labelledby="tambahRole" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="tambahRole">Tambah Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-light">

        <form action="<?= base_url('admin/role'); ?>" method="post">
 		 <div class="form-group">
    		<label for="">Tambahkan role disini</label>
   			 <input type="text" class="form-control" id="role" name="role" placeholder="Masukan Role">
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




  
