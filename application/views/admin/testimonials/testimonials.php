<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('testimonials'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('gtestimonials'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('htestimonials'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('etestimonials'); ?>
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
						<th>Nama</th>
						<th>Foto</th>
						<th>Profesi</th>
						<th>Deskripsi</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($testimonials as $row) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row->nama_testi; ?></td>
							<td>
								<img src="<?= base_url('assets/images/') . $row->foto_testi; ?>" alt="" width="100" height="100">
							</td>
							<td><?= $row->profesi; ?></td>
							<td><?= $row->deskripsi_testi; ?></td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id_testi ?>" href="" class="text-primary mr-1">Edit</a>
								<a href="<?= base_url('Admin/testimonials/hapus/') . $row->id_testi; ?>" onclick="return confirm('Yakin akan menghapus data??')" class="text-danger ml-1">Hapus</a>
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
                <?php echo form_open_multipart('Admin/testimonials/tambah/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_testi" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="nama_testi" placeholder="Nama" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputEmail4" name="userfile" placeholder="Title" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="profesi" placeholder="Profesi">
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="deskripsi_testi" value="Deskripsi" class="form-control"></textarea>
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
foreach ($testimonials as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id_testi ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/testimonials/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_testi" value="<?= $row->id_testi; ?>" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="nama_testi" value="<?= $row->nama_testi; ?>" placeholder="Nama" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputEmail4" name="userfile" placeholder="Title">
                    </div>
                    <img src="<?= base_url('assets/images/') . $row->foto_testi; ?>" width="100" alt="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="profesi" value="<?= $row->profesi; ?>" placeholder="Profesi">
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="deskripsi_testi" value="Deskripsi" class="form-control"><?= $row->deskripsi_testi; ?></textarea>
                    </div>
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