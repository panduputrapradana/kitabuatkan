<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('ekon'); ?>
    </div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Whatsapp</th>
						<th>Email</th>
						<th>Instagram</th>
						<th>Facebook</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($kontak as $row) { ?>
						<tr>
							<td><?= $row->whatsapp; ?></td>
							<td><?= $row->email; ?></td>
							<td><?= $row->instagram; ?></td>
							<td><?= $row->facebook; ?></td>
							<td class="text-center">
								<a data-bs-toggle="modal" type="button" data-bs-target="#edit<?= $row->id_kontak ?>" href="" class="text-primary">Detail/Edit</a>
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
foreach ($kontak as $row) { $no++; ?>

<div class="modal fade" id="edit<?= $row->id_kontak ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/kontak/edit/');
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                    <div class="input-group mb-3" hidden>
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->id_kontak; ?>" name="id_kontak" placeholder="ID">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->whatsapp; ?>" name="whatsapp" placeholder="Whatsapp">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->email; ?>" name="email" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->instagram; ?>" name="instagram" placeholder="Instagram">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputEmail4" value="<?= $row->facebook; ?>" name="facebook" placeholder="Facebook">
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