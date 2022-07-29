<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('clients'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('gclients'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('hclients'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('eclients'); ?>
    </div>
	<div class="card-header py-3">
		<a data-bs-toggle="modal" type="button" data-bs-target="#tambah" href="" class="btn btn-primary">Tambah</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Logo</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1; 
					foreach ($clients as $row) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td>
								<img src="<?= base_url('assets/images/') . $row->logo_clients; ?>" alt="" width="100" height="50">
							</td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id_clients ?>" href="" class="text-primary mr-1">Edit</a>
								<a href="<?= base_url('admin/clients/hapus/') . $row->id_clients; ?>" onclick="return confirm('Yakin akan menghapus data??')" class="text-danger ml-1">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/clients/tambah/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_clients" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputEmail4" name="userfile" placeholder="Title" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<!-- Modal Update -->
<?php 
$no = 0;
foreach ($clients as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id_clients ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/clients/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_clients" value="<?= $row->id_clients; ?>" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputEmail4" name="userfile" placeholder="Title" required>
                    </div>
                    <img src="<?= base_url('assets/images/') . $row->logo_clients; ?>" width="100" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<?php } ?>