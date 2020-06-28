<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>


	<!-- Tabel Data Siswa -->
	<?php echo $this->session->flashdata('notif') ?>
	<div class="card shadow mb-4 mt-3">
		<?= $this->session->flashdata('pesan'); ?>
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<!-- judul card data siswa -->
			<h6 class="m-0 font-weight-bold text-primary">Data Informasi Website</h6>
			<a href="<?=base_url()?>informasi/lihat/<?=$data[0]['id']?>"
				class="btn btn-info btn-icon-split btn-sm mr-3 edit_button">
				<span class="icon text-white-50">
					<i class="fas fa-user-edit"></i>
				</span>
				<span class="text">ubah</span>
			</a>
			</td>
		</div>
		<div class="card-body">
			<div class="table-responsive mt-3">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>NAMA</th>
							<th>EMAIL</th>
							<th>TELP</th>
							<th>ALAMAT</th>
						</tr>
					</thead>
					<!-- <tfoot>
						<tr>
							<th>NAMA WEBSITE</th>
							<th>EMAIL</th>
							<th>TELP</th>
							<th>ALAMAT</th>
						</tr>
					</tfoot> -->
					<tbody>
						<?php foreach ($data as $key) : ?>
						<tr>
							<td><?= $key['nama']; ?></td>
							<td><?= $key['email']; ?></td>
							<td><?= $key['telp']; ?></td>
							<td><?= $key['alamat']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
