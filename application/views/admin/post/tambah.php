    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Tabel Data Siswa -->
    	<div class="card shadow mb-4 mt-3 ">
    		<?= form_open_multipart('posting/tambah'); ?>
    		<div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
    			<h6 class="m-0 font-weight-bold text-primary">Tambah Posting</h6>
    			<!-- Upload btn -->
    			<!-- <button type="button" class="btn btn-info btn-icon-split btn-sm mb-0 ml-auto mr-2" data-toggle="modal"
    				data-target="#modalupload">
    				<span class="icon text-white-50">
    					<i class="fas fa-arrow-right"></i>
    				</span>
    				<span class="text">Upload File</span>
				</button> -->
    			<a href="<?= base_url('posting'); ?>" class="btn btn-primary btn-icon-split ml-auto mr-3 btn-sm mb-0">
    				<span class="icon text-white-50">
    					<i class="fas fa-undo fa-sm"></i>
    				</span>
    				<span class="text">Kembali</span>
    			</a>
    			<button type="submit" id="save" class="btn btn-success btn-icon-split btn-sm mb-0">
    				<span id="icon_kunci" class="icon text-white-50">
    					<i class="fas fa-save fa-sm"></i>
    				</span>
    				<span class="text">Simpan</span>
    			</button>

    		</div>
    		<div class="card-body">
    			<div class="form-group">
    				<label for="exampleFormControlInput1">Judul</label>
    				<input type="text" class="form-control" id="" placeholder="Masukkan Judul" name="judul">
    				<?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
    			</div>
    			<div class="form-group">
    				<label for="exampleFormControlTextarea1">Isi</label>
    				<textarea class="form-control" id="" placeholder="Masukkan Isi" rows="3" name="isi"></textarea>
    				<?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
    			</div>
    			<div class="row">
    				<div class="col">
    					<div class="form-group">
    						<label for="exampleFormControlSelect2">Kategori</label>
    						<select class="form-control" id="kategori" name="kategori">
    							<?php foreach($kategori as $key) :
								if($key['id']==$data['kategori']){?>
    							<option selected value="<?=$key['id']?>"><?=$key['nama']?></option>
    							<?php }else{?>
    							<option value="<?=$key['id']?>"><?=$key['nama']?></option>
    							<?php } endforeach ?>
    						</select>
    					</div>
    					<?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
    				</div>
    				<div class="col">
    					<!-- Judul Foto Peserta Didik -->
    					<div class="form-group row">
    						<div class="col">
    							<label for="exampleFormControlSelect2">Thumbnail</label>
    							<div class="custom-file">
    								<input type="file" class="custom-file-input" id="validatedCustomFile" name="userfile" >
    								<label class="custom-file-label" for="validatedCustomFile" >Choose file...</label>
    							</div>
    						</div>
    						<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
    					</div>
    				</div>
    			</div>
    			</form>
    		</div>
    	</div>
    </div>


    <script>
    	var i = 1;

    	function js_lock() {
    		if (i % 2 == 0) {
    			document.getElementById("icon_kunci").innerHTML = ' <i class="fas fa-lock fa-sm"></i>';
    			document.getElementById('lock').setAttribute("class", "btn btn-info btn-icon-split btn-sm mb-0");
    			document.getElementById('agama').setAttribute("disabled", 0);
    			document.getElementById('foto').setAttribute("disabled", 0);
    			const y = document.querySelectorAll('.form-control');
    			var x;
    			for (x = 0; x < y.length; x++) {
    				y[x].setAttribute("readonly", 0);
    			}
    			i += 1;
    		} else {
    			document.getElementById("icon_kunci").innerHTML = '<i class="fas fa-lock-open fa-sm"></i>';
    			document.getElementById('lock').setAttribute("class", "btn btn-warning btn-icon-split btn-sm mb-0");
    			document.getElementById('agama').removeAttribute("disabled", 0);
    			document.getElementById('foto').removeAttribute("disabled", 0);
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
