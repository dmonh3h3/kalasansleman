<div class="container-fluid">
	<!-- Tabel Data Siswa -->
	<div class="card shadow mb-4 mt-3 ">
		<?= form_open_multipart('informasi/update'); ?>
		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Lihat Posting</h6>
			<!-- Upload btn -->
			<!-- <button type="button" class="btn btn-info btn-icon-split btn-sm mb-0 ml-auto mr-2" data-toggle="modal"
    				data-target="#modalupload">
    				<span class="icon text-white-50">
    					<i class="fas fa-arrow-right"></i>
    				</span>
    				<span class="text">Upload File</span>
				</button> -->
			<a href="<?= base_url('informasi'); ?>" class="btn btn-primary btn-icon-split ml-auto mr-3 btn-sm mb-0">
				<span class="icon text-white-50">
					<i class="fas fa-undo fa-sm"></i>
				</span>
				<span class="text">Kembali</span>
			</a>
			<button form="buka-kunci" onclick="js_lock()" id="lock"
				class="btn btn-info btn-icon-split btn-sm bd-highlight mr-3 lock">
				<span id="icon_kunci" class="icon text-white-50">
					<i class="fas fa-lock fa-sm"></i>
				</span>
				<span class="text">Edit Data</span>
			</button>
			<button type="submit" id="save" class="btn btn-success btn-icon-split btn-sm mb-0" disabled>
				<span id="icon_kunci" class="icon text-white-50">
					<i class="fas fa-save fa-sm"></i>
				</span>
				<span class="text">Simpan</span>
			</button>

		</div>
		<div class="card-body">
			<?= form_error('id', '<small class="text-danger">', '</small>'); ?>
			<div class="form-group">
				<label for="exampleFormControlInput1">ID</label>
				<input type="text" class="form-control" id="id" placeholder="Masukkan Judul" value="<?=$data[0]['id']?>"
					disabled>
				<input type="hidden" class="form-control" id="id" placeholder="Masukkan Judul" name="id"
					value="<?=$data[0]['id']?>">
			</div>
			<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
			<div class="form-group">
				<label for="exampleFormControlInput1">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Masukkan Judul" name="nama"
					value="<?=$data[0]['nama']?>" disabled>
			</div>
			<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Masukkan Isi" rows="3" name="email"
					disabled value="<?=$data[0]['email']?>"></input>
			</div>
			<?= form_error('telp', '<small class="text-danger">', '</small>'); ?>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Telp</label>
				<input type="text" class="form-control" id="telp" placeholder="Masukkan Isi" rows="3" name="telp" value="<?=$data[0]['telp']?>"
					disabled></input>
			</div>
			<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Alamat</label>
				<textarea class="form-control" id="alamat" placeholder="Masukkan Isi" rows="3" name="alamat"
					disabled><?=$data[0]['alamat']?></textarea>
			</div>
			</form>
		</div>
	</div>
</div>


<script>
	var i = 1;

	function js_lock() {
		if (i % 2 == 0) {
			document.getElementById("icon_kunci").innerHTML = '<i class="fas fa-lock fa-sm"></i>';
			document.getElementById('lock').setAttribute("class", "btn btn-info btn-icon-split btn-sm mr-3 mb-0");
			document.getElementById('nama').setAttribute("disabled", 0);
			document.getElementById('telp').setAttribute("disabled", 0);
			document.getElementById('alamat').setAttribute("disabled", 0);
			document.getElementById('email').setAttribute("disabled", 0);
			document.getElementById('save').removeAttribute("disabled", 0);
			const y = document.querySelectorAll('.form-control');
			var x;
			for (x = 0; x < y.length; x++) {
				y[x].setAttribute("readonly", 0);
			}
			i += 1;
		} else {
			document.getElementById("icon_kunci").innerHTML = '<i class="fas fa-lock-open fa-sm"></i>';
			document.getElementById('lock').setAttribute("class", "btn btn-warning btn-icon-split btn-sm  mr-3 mb-0");
			document.getElementById('nama').removeAttribute("disabled", 0);
			document.getElementById('telp').removeAttribute("disabled", 0);
			document.getElementById('alamat').removeAttribute("disabled", 0);
			document.getElementById('email').removeAttribute("disabled", 0);
			document.getElementById('save').removeAttribute("disabled", 0);
			const y = document.querySelectorAll('.form-control');
			var x;
			for (x = 0; x < y.length; x++) {
				y[x].removeAttribute("readonly", 0);
			}
			i += 1;
		}
	}
	// Submit form
	$(document).ready(function () {
		$('#import_form').on('submit', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url(); ?>excel/import",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					$('#file').val('');
					load_data();
					alert(data);
				}
			})
		});
	});

</script>
</div> <!-- End of Main Content -->
