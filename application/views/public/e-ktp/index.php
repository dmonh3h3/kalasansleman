<header>
	<h4>Kecamatan <b>Kalasan</b></h4>
	<p>JL. SOLO KM 13 KRAJAN TIRTOMARTINI KALASAN 55571</p>
</header>
<div class="container">
	<div class="row mt-5 mb-5 p-3 mb-5 shadow-sm">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header text-center">
					<h1>E-KTP Pendaftaran</h1>
				</div>
				<div class="card-body">
					<?php if($this->session->flashdata('pesan')=="Data Berhasi Terdaftar"){?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?=$this->session->flashdata('pesan')?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php } else if($this->session->flashdata('pesan')=="Data Gagal Terdaftar"){?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?=$this->session->flashdata('pesan')?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php }?>
					<form method="post" action="<?= base_url('page/e_ktp/'); ?>">
						<div class="row">
							<div class="col-4">
								<div class="form-group"><label for="nama">NIK</label><input type="text"
										class="form-control" id="nama" name="nik" placeholder="Contoh : 34192837483***"
										value="<?=$id?>">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group"><label for="nama">No.KK</label><input type="text"
										class="form-control" id="nama" name="kk" placeholder="Contoh : 34192837483***"
										value="<?=$kk?>">
									<?= form_error('kk', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group"><label for="nama">email</label><input type="text"
										class="form-control" id="nama" name="email"
										placeholder="Contoh : awqarinqueen@mail.com" value="<?=$email?>">
									<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group"><label for="nama">Nama Lengkap</label><input type="text"
										class="form-control" id="nama" name="nama" placeholder="Contoh : Awqarin Queen"
										value="<?=$nama?>">

									<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group"><label for="tempat">Tempat Lahir</label><input type="text"
										class="form-control" id="tempat" name="tempat" placeholder="Contoh : Kalasan"
										value="<?=$tempat_lahir?>">
									<?= form_error('tempat', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col">
								<div class="form-group"><label for="tgl">Tanggal Lahir</label><input type="date"
										class="form-control" id="tgl" name="tgl" value="<?=$tgl_lahir?>">
									<?= form_error('tgl', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>

							<div class="col">
								<div class="row">
									<div class="col-12"><label for="jk">Jenis Kelamin</label>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-12">
										<div class="form-check form-check-inline"><input class="form-check-input"
												type="radio" name="jk" id="inlineRadio1" value="male"
												<?php if ($jenis_kelamin=="male") echo "checked"?>><label
												class="form-check-label" for="inlineRadio1">Laki-Laki</label>
										</div>
										<div class="form-check form-check-inline"><input class="form-check-input"
												type="radio" name="jk" id="inlineRadio2" value="female"
												<?php if ($jenis_kelamin=="female") echo "checked"?>><label
												class="form-check-label" for="inlineRadio2">Perempuan</label>
										</div>
									</div>
								</div>
								<?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
							</div>
						</div>
						<label for="tempat">Alamat</label>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<textarea class="form-control" id="tempat" name="alamat"
										placeholder="Contoh : Kalasan, Sleman"><?=$alamat?></textarea>
									<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="tgl">RT</label>
									<input type="text" class="form-control" id="tgl" name="rt"
										placeholder="Contoh : 001" value="<?=$rt?>">
									<?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col">
								<div class="form-group"><label for="tgl">RW</label><input type="text"
										class="form-control" id="tgl" name="rw" placeholder="Contoh : 001"
										value="<?=$rw?>">
									<?= form_error('rw', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col">
								<div class="form-group"><label for="tgl">Desa</label><input type="text"
										class="form-control" id="tgl" name="desa" placeholder="Contoh : Kedundang"
										value="<?=$desa?>">
									<?= form_error('desa', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="col">
								<div class="form-group"><label for="tgl">Kecamatan</label>
									<input type="text" class="form-control" id="tgl" name="kecamatan"
										placeholder="Contoh : Kalasan" value="<?=$kecamatan?>">
									<?= form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group"><label for="tgl">Agama</label>
									<select class="form-control" name="agama">
										<option value="" selected>Pilih Agama</option>
										<option value="Islam" <?php if ($agama=="islam")echo "selected"?>>Islam
										</option>
										<option value="Protestan" <?php if ($agama=="Protestan")echo "selected"?>>
											Protestan</option>
										<option value="Katolik" <?php if ($agama=="Katolik")echo "selected"?>>
											Katolik</option>
										<option value="Hindu" <?php if ($agama=="Hindu")echo "selected"?>>Hindu
										</option>
										<option value="Buddha" <?php if ($agama=="Buddha")echo "selected"?>>
											Buddha</option>
										<option value="Khonghucu" <?php if ($agama=="Khonghucu")echo "selected"?>>
											Khonghucu</option>
									</select>
									<?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group"><label for="tgl">Status</label>
									<select class="form-control" name="status">
										<option value="" selected>Pilih Status</option>
										<option value="Kawin" <?php if ($status=="Kawin")echo "selected"?>>Kawin
										</option>
										<option value="Belum Kawin" <?php if ($status=="Belum Kawin")echo "selected"?>>
											Belum Kawin
										</option>
									</select>
									<?= form_error('status', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group"><label for="tgl">Pekerjaan</label>
									<input type="text" class="form-control" id="tgl" name="pekerjaan"
										placeholder="Contoh : PNS" value="<?=$pekerjaan?>">
									<?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group"><label for="tgl">Kewarga Negaraan</label>
									<select class="form-control" name="negaraan">
										<option value="" selected>Pilih Status</option>
										<option value="WNI" <?php if ($kewarga_negaraan=="WNI")echo "selected"?>>WNI
										</option>
										<option value="WNA" <?php if ($kewarga_negaraan=="WNA")echo "selected"?>>WNA
										</option>
									</select>
									<?= form_error('negaraan', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col text-center ">
								<button type="submit" class="btn btn-primary pl-5 pr-5">Daftar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
