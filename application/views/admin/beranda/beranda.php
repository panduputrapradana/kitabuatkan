<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('eber'); ?>
    </div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Kata1</th>
						<th>Kata2</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($beranda as $row) { ?>
						<tr>
							<td><?= $row->kata1; ?></td>
							<td><?= $row->kata2; ?></td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id ?>" href="" class="text-primary">Detail/Edit</a>
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
foreach ($beranda as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/beranda/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->id; ?>" name="id" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->kata1; ?>" name="kata1" placeholder="Title">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->kata2; ?>" name="kata2" placeholder="Nama">
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