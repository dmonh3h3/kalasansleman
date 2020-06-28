const flashData = $('.flash-data').data('flashdata');
console.log(flashData);

if (flashData) {
	Swal.fire({
		position: 'top',
		type: 'success',
		title: 'Data berhasil ' + flashData,
		showConfirmButton: false,
		timer: 1500
	});
}


//tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "data akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonText: 'Batal',
		cancelButtonColor: '#17a2b8',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});


//tombol-ubah-rencana
$('.tombol-ubah-rencana').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "data rencana penilaian awal akan dihapus dan anda harus mengisi rencana penilaian lagi dari awal.",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonText: 'Batal',
		cancelButtonColor: '#17a2b8',
		confirmButtonText: 'Yakin!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
