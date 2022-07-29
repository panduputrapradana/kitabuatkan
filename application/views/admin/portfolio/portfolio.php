<?php 
	date_default_timezone_set('Asia/Jakarta');
	$waktu = date('Y-m-d H:i:s');
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('portfolio'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('gportfolio'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('hportfolio'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('eportfolio'); ?>
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
						<th>Waktu</th>
						<th>Judul</th>
						<th>Gambar</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($portfolio as $row) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row->waktu; ?></td>
							<td><?= $row->judul; ?></td>
							<td>
								<img src="<?= base_url('assets/images/') . $row->gambar_portfolio; ?>" alt="" width="100" height="50">
							</td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id_portfolio ?>" href="" class="text-primary mr-1">Edit</a>
								<a href="<?= base_url('admin/portfolio/hapus/') . $row->id_portfolio; ?>" onclick="return confirm('Yakin akan menghapus data??')" class="text-danger ml-1">Hapus</a>
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
                <?php echo form_open_multipart('Admin/portfolio/tambah/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_portfolio" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="judul" placeholder="Judul" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $waktu; ?>" name="waktu" placeholder="Waktu" readonly>
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
foreach ($portfolio as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id_portfolio ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/portfolio/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" name="id_portfolio" value="<?= $row->id_portfolio; ?>" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" name="judul" value="<?= $row->judul; ?>" placeholder="Judul" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $waktu; ?>" name="waktu" placeholder="Waktu" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputEmail4" name="userfile" placeholder="Title">
                    </div>
                    <img src="<?= base_url('assets/images/') . $row->gambar_portfolio; ?>" width="100" alt="">
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