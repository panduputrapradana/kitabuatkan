<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('usr'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('eusr'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('husr'); ?>
    </div>
	<div class="card-header py-3">
		<a type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#tambah" href="" class="btn btn-primary">Tambah</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($user as $row) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row->username; ?></td>
							<td><?= $row->nama_user; ?></td>
							<td><?= $row->level; ?></td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id_user ?>" href="" class="text-primary mr-1">Edit</a>
								<a href="<?= base_url('admin/user/hapus/') . $row->id_user; ?>" onclick="return confirm('Yakin akan menghapus data??')" class="text-danger ml-1">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal Insert -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/user/tambah/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_user" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="username" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="nama_user" placeholder="Nama">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="inputEmail4" name="password" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select form-select-md form-control" name="level" aria-label=".form-select-sm example" required>
                            <option value="1" selected>- Pilih Level -</option>
                                <option value="Admin">Admin</option>     
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>


<!-- Modal Update -->
<?php 
$no = 0;
foreach ($user as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/user/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_user" value="<?= $row->id_user; ?>" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="username" value="<?= $row->username; ?>" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="nama_user" value="<?= $row->nama_user; ?>" placeholder="Nama">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select form-select-md form-control" name="level" aria-label=".form-select-sm example" required>
                            <option value="<?= $row->level; ?>" selected><?= $row->level; ?></option>
                                <option value="Admin">Admin</option>     
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin akan mengedit data??')">Edit</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<?php } ?>