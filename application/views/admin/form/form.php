<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="container">
        <?= $this->session->flashdata('hform'); ?>
    </div>
    <div class="container">
        <?= $this->session->flashdata('ghform'); ?>
    </div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Pesan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($form as $row) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row->nama_form; ?></td>
							<td><?= $row->email_form; ?></td>
							<td><?= $row->pesan; ?></td>
							<td class="text-center">
								<a href="<?= base_url('Admin/form/hapus') . $row->id_form; ?>" onclick="return confirm('Yakin akan menghapus data??')" class="text-danger ml-1">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>