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


           <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahSubMenu">
  			Tambah Sub Menu
		</button>
         <br>

         <?php if (validation_errors()) : ?> 
       <div class="alert alert-danger col-lg-6" role="alert"> 
	       <?= validation_errors(); ?>
       </div>
        <?php endif; ?>
        
         <?= $this->session->flashdata('message'); ?>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Menu</th>
                    <th>Url</th>
                    <th>Icon</th>
                    <th>Active</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                	<?php $i = 1; ?>
                	<?php foreach($subMenu as $sm) : ?>
                  <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $sm['title']; ?></td>
                    <td><?= $sm['menu']; ?></td>
                    <td><?= $sm['url']; ?></td>
                    <td><?= $sm['icon']; ?></td>
                    <td><?= $sm['is_active']; ?></td>
                    <td>
                    	<a class="btn btn-sm btn-warning text-light" href="<?= base_url('menu/editsub/') . $sm['id']; ?>">edit</a>

                    	<a class="btn btn-sm btn-danger text-light" href="<?= base_url(); ?>menu/hapusSubmenu/<?= $sm ['id']; ?>" class="btn-sm btn-danger"  onclick="return confirm('Yakin untuk menghapus?');">hapus</a>

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
<div class="modal fade" id="tambahSubMenu" tabindex="-1" role="dialog" aria-labelledby="tambahSubMenu" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="tambahSubMenu">Tambah Sub Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">

        <form action="<?= base_url('menu/submenu'); ?>" method="post">
 		 <div class="form-group">
    		<label class="text-light" for="">TITLE</label>
   			 <input type="text" class="form-control border-light" id="title" name="title" placeholder="Masukan Title">
  		</div>
    <div class="form-group">
         <select name="menu_id" id="menu_id" class="form-control text-warning border-light">
           <option value="">Pilih Menu</option>
           <?php foreach($menu as $m) : ?>
           <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
           <?php endforeach; ?>
         </select>
      </div>
    <div class="form-group">
      <label class="text-light" for="">URL</label>
      <input type="text" class="form-control border-light" id="url" name="url" placeholder="Submenu URL">
      </div>
     <div class="form-group">
      <label class="text-light" for="">ICON</label>
      <input type="text" class="form-control border-light" id="icon" name="icon" placeholder="Submenu URL">
      </div>
      <div class="form-group">
		 <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active">
    <label class="text-light" for="is_active">Active?</label>
    </div>
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




  
