<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="container">
        <?= $this->session->flashdata('ebas'); ?>
    </div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Title</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($basic as $row) { ?>
						<tr>
							<td><?= $row->nama_basic; ?></td>
							<td><?= $row->title_basic; ?></td>
							<td><?= $row->alamat_basic; ?></td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id_basic ?>" href="" class="text-primary">Detail/Edit</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal Update -->
<?php 
$no = 0;
foreach ($basic as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id_basic ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/basic/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->id_basic; ?>" name="id_basic" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->nama_basic; ?>" name="nama_basic" placeholder="Title">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->title_basic; ?>" name="title_basic" placeholder="Nama">
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="alamat_basic"><?= $row->alamat_basic; ?></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin Akan Mengedit Data??')">Edit</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<?php } ?>