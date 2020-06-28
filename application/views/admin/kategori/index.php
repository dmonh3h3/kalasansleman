<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
	<?= $this->session->flashdata('pesan'); ?>

	<!-- Tabel Data Siswa -->
	<?php echo $this->session->flashdata('notif') ?>
	<div class="card shadow mb-4 mt-3">
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<!-- judul card data siswa -->
			<h6 class="m-0 font-weight-bold text-primary">Data Postingan Kecamatan Kalasan</h6>
			<a href="<?= base_url('posting/tambah');?>" class="btn btn-success btn-icon-split btn-sm mb-0"
				data-toggle="modal" data-target="#exampleModalCenter">
				<span class="icon text-white-50">
					<i class="fas fa-user-plus fa-sm"></i>
				</span>
				<span class="text">Tambah Kategori</span>
			</a>
		</div>
		<div class="card-body">
			<div class="table-responsive mt-3">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<?php $i = 1; ?>
					<thead>
						<tr>
							<th>NO</th>
							<th>KATEGORI</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $key) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $key['nama']; ?></td>
							<td align="center">
								<a href="<?=base_url('kategori/hapus/')?><?=$key['id']?>"
									class="btn btn-danger btn-icon-split btn-sm tombol-hapus">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
									</span>
									<span class="text">Hapus</span>
								</a>
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
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<?=form_open_multipart('kategori/tambah');?>
				<div class="modal-header">
					<h5 class="modal-title" id="modaluedit">Tambah Kategori</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="nama">Nama Kategori</label>
						<input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama"
							placeholder="Masukkan Nama">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>
