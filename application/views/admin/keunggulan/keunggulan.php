<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('ekeu'); ?>
    </div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
						<th>Kepuasan</th>
						<th>Kecepatan</th>
						<th>Project</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($keunggulan as $row) { ?>
						<tr>
                            <td><?= $row->judul_keunggulan; ?></td>
                            <td><?= $row->deskripsi_keunggulan; ?></td>
							<td><?= $row->kepuasan . "%"; ?></td>
							<td><?= $row->kecepatan . "%"; ?></td>
							<td><?= $row->project; ?></td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id_keunggulan ?>" href="" class="text-primary">Detail/Edit</a>
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
foreach ($keunggulan as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id_keunggulan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/keunggulan/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->id_keunggulan; ?>" name="id_keunggulan" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->judul_keunggulan; ?>" name="judul_keunggulan" placeholder="Judul">
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="deskripsi_keunggulan"><?= $row->deskripsi_keunggulan; ?></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="inputEmail4" value="<?= $row->kepuasan; ?>" name="kepuasan" placeholder="Title">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="inputEmail4" value="<?= $row->kecepatan; ?>" name="kecepatan" placeholder="Nama">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="inputEmail4" value="<?= $row->project; ?>" name="project" placeholder="Nama">
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