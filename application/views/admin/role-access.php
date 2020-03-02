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
 
        <h5>Jenis Akun : <?= $role['role']; ?></h5>

         <?= $this->session->flashdata('message'); ?>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Menu</th>
                    <th>Akses</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $i = 1; ?>
                	<?php foreach($menu as $m) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $m['menu']; ?></td>
                    <td>

                     <div class="form-check">
                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                  </div> 

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
	

  
