const flashData = $('.flash-data').data('flashdata');
const flashDataerror = $('.flash-data-error').data('flashdata');


if (flashData) {
    Swal({
        title: 'Berhasil',
        text: flashData,
        type: 'success',
    });
}
if (flashDataerror) {
    Swal({
        title: 'Gagal',
        text: flashDataerror,
        type: 'error'
    });
}

//TOMBOL HAPUS

$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "Data mahasiswa akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});