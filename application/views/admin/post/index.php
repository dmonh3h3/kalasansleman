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
			<h6 class="m-0 font-weight-bold text-primary">Data Postingan Kecamatan Kalasan</h6>
			<a href="<?= base_url('posting/tambah');?>" class="btn btn-success btn-icon-split btn-sm mb-0" >
				<span class="icon text-white-50">
					<i class="fas fa-user-plus fa-sm"></i>
				</span>
				<span class="text">Tambah Post</span>
			</a>
		</div>
		<div class="card-body">
			<div class="table-responsive mt-3">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<?php $i = 1; ?>
					<thead>
						<tr>
							<th>NO</th>
							<th>JUDUL</th>
							<th>TANGGAL</th>
							<th>KATEGORI</th>
							<th>THUMBNAIL</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>NO</th>
							<th>JUDUL</th>
							<th>TANGGAL</th>
							<th>KATEGORI</th>
							<th>THUMBNAIL</th>
							<th>AKSI</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($data as $key) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $key['judul']; ?></td>
							<td><?= $key['tanggal']; ?></td>
							<td><?php foreach ($kategori as $key2 ) {
								if($key['kategori']==$key2['id']){
									echo $key2['nama'];
								}
							}?>
							</td>
							<td><img src="<?=base_url('asset/img/')?><?= $key['thumbnail'];?>" alt=""></td>
							<td align="center">
								<a href="<?=base_url()?>posting/lihat/<?=$key['id']?>" 
									class="btn btn-info btn-icon-split btn-sm mr-3 edit_button">
									<span class="icon text-white-50">
										<i class="fas fa-user-edit"></i>
									</span>
									<span class="text">lihat</span>
								</a>
								<a href="<?=base_url('posting/delete/')?><?=$key['id']?>"
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
