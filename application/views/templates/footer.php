<footer class="footer">
    2020 SMK MAARIF NU 01
    <span class="d-md-inline-block"> ©
        <a href="https://erzet.id" class="text-success">ERZET.ID</a></span>
</footer>
</div>
<!-- End Right content here -->
</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/modernizr.min.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/detect.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/fastclick.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.blockUI.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/waves.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/jquery.scrollTo.min.js"></script>
<!-- Sweet-Alert  -->
<script src="<?= base_url('vendor'); ?>/plugins/sweet-alert2/sweetalert2.min.js"></script>
<!-- Upload  -->
<script src="<?= base_url('vendor/vertical/'); ?>assets/pages/myscript.js"></script>
<!-- Required datatable js -->
<script src="<?= base_url('vendor'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url('vendor'); ?>/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url('vendor'); ?>/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/bootstrap.bundle.min.js"></script>
<!-- Plugins js -->
<script src="<?= base_url('vendor'); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
<!--Summernote js-->
<script src="<?= base_url('vendor'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- App js -->
<script src="<?= base_url('vendor/vertical/'); ?>assets/js/app.js"></script>
<!-- Plugins Init js -->
<script src="<?= base_url('vendor/vertical/'); ?>assets/pages/form-advanced.js"></script>
<script>
    $('#thumbs').delegate('img', 'click', function() {
        var $this = $(this);
        // Clear formatting
        $('#thumbs img').removeClass('border-highlight');

        // Highlight with coloured border
        $this.addClass('border-highlight');

        // Changes the value of the form field "animal" to the file name shown in the image.
        $('[name="kartu_jenis"]').val($this.attr('id').substring($this.attr('src').lastIndexOf('-') + 1));
    });
    $(document).on('submit', '#uploadkartu', function(e) {
        $("#btnKartu").html('<span class="spinner-border spinner-border-sm"></span> Loading...');
        $("#btnKartu").attr('disabled', true);
        $("#kartu_error").html("");
        $("#filekartu-bar").html("");
        jQuery("#chk-error").html('');
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(element) {
                    if (element.lengthComputable) {
                        $('#filekartu').html('');
                        var percentComplete = ((element.loaded / element.total) * 100);
                        $("#filekartu-bar").width(percentComplete + '%');
                        $("#filekartu-bar").html(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            url: '<?= base_url('kartu/upload') ?>',
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $("#filekartu-bar").width('0%');
            },
            success: function(json) {
                if (json.status == 'success') {
                    Swal({
                        html: "Kartu berhasil diupload",
                        type: 'success',

                    })
                    location.reload();
                } else {
                    $("#btnKartu").html('Simpan');
                    $("#btnKartu").attr('disabled', false);
                    $("#filekartu-bar").html("");
                    if (json.kartu_error != "") {
                        $("#kartu_error").html(json.kartu_error);
                    } else {
                        $("#kartu_error").html("");
                    }
                }
            },
            error: function() {
                $("#btnKartu").html('<i class="mdi mdi-cloud-upload"></i> Upload');
                $("#btnKartu").attr('disabled', false);
                $("#filekartu-bar").html("");
                Swal({
                    html: 'File atau ukuran gambar tidak sesuai !',
                    type: 'error',

                })
            }

        });

    });
</script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td>' + i + '</td><td><input type="text" name="name[]" placeholder="Masuk tata tertib" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            Swal({
                html: "Apakah anda yakin akan mengubah tata tertib?<br><b>PASTIKAN FORM TERISI</b>",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?= base_url('sekolah/tata'); ?>",
                        method: "POST",
                        data: $('#add_name').serialize(),
                        success: function(data) {
                            Swal({
                                html: 'Tata tertib berhasil disimpan!',
                                type: 'success',
                            });
                        }
                    });
                }
            });
        });
    });
</script>
<!-- Script Form Tambah Data Siswa -->
<script type="text/javascript">
    $('.custom-file-input').change(function(e) {
        $(this).next('.custom-file-label').html(e.target.files[0].name);
    });

    $(document).on('change', '#stempel', function(e) {
        var name = document.getElementById("stempel").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            Swal({
                html: 'File gambar salah!',
                type: 'warning',
            });
        } else {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("stempel").files[0]);
            var f = document.getElementById("stempel").files[0];
            var fsize = f.size || f.fileSize;
            if (fsize > 1000000) {
                Swal({
                    html: 'Ukuran File Gambar Terlalu Besar Maksimal 1MB',
                    type: 'warning',
                });
            } else {
                jQuery("#chk-error").html('');
                e.preventDefault();
                form_data.append("stempel", document.getElementById('stempel').files[0]);
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(element) {
                            if (element.lengthComputable) {
                                $('#stempel').html('');
                                var percentComplete = ((element.loaded / element.total) * 100);
                                $("#stempel-bar").width(percentComplete + '%');
                                $("#stempel-bar").html(percentComplete + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    url: '<?= base_url('sekolah/stempel') ?>',
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,

                    beforeSend: function() {
                        $("#stempel-bar").width('0%');
                    },
                    success: function(json) {
                        if (json.status == 'success') {
                            Swal({
                                html: "Stempel berhasil diupload",
                                type: 'success',

                            }).then(function() {
                                $("#gambar_stempel").attr('src', "<?= base_url('asset/kartu/stempel/'); ?>" + json.filename);

                                $("#stempel-bar").html('');
                            })
                        } else {
                            Swal({
                                html: 'Ooops, server error !',
                                type: 'error',

                            })
                        }
                    },
                    error: function() {
                        Swal({
                            html: 'Ooops, server error !',
                            type: 'error',

                        })
                    }
                });
            }

        }

    });
    $(document).on('change', '#dinas', function(e) {
        var name = document.getElementById("dinas").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            Swal({
                html: 'File gambar salah!',
                type: 'warning',
            });
        } else {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("dinas").files[0]);
            var f = document.getElementById("dinas").files[0];
            var fsize = f.size || f.fileSize;
            if (fsize > 1000000) {
                Swal({
                    html: 'Ukuran File Gambar Terlalu Besar Maksimal 1MB',
                    type: 'warning',
                });
            } else {
                jQuery("#chk-error").html('');
                e.preventDefault();
                form_data.append("dinas", document.getElementById('dinas').files[0]);
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(element) {
                            if (element.lengthComputable) {
                                $('#dinas').html('');
                                var percentComplete = ((element.loaded / element.total) * 100);
                                $("#dinas-bar").width(percentComplete + '%');
                                $("#dinas-bar").html(percentComplete + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    url: '<?= base_url('sekolah/dinas') ?>',
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,

                    beforeSend: function() {
                        $("#dinas-bar").width('0%');
                    },
                    success: function(json) {
                        if (json.status == 'success') {
                            Swal({
                                html: "Dinas berhasil diupload",
                                type: 'success',

                            }).then(function() {
                                $("#gambar_dinas").attr('src', "<?= base_url('asset/kartu/dinas/'); ?>" + json.filename);

                                $("#dinas-bar").html('');
                            })
                        } else {
                            Swal({
                                html: 'Ooops, server error !',
                                type: 'error',

                            })
                        }
                    },
                    error: function() {
                        Swal({
                            html: 'Ooops, server error !',
                            type: 'error',

                        })
                    }
                });
            }

        }

    });

    $(document).on('change', '#ttd', function(e) {
        var name = document.getElementById("ttd").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            Swal({
                html: 'File gambar salah!',
                type: 'warning',
            });
        } else {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("ttd").files[0]);
            var f = document.getElementById("ttd").files[0];
            var fsize = f.size || f.fileSize;
            if (fsize > 1000000) {
                Swal({
                    html: 'Ukuran File Gambar Terlalu Besar Maksimal 1MB',
                    type: 'warning',
                });
            } else {
                jQuery("#chk-error").html('');
                e.preventDefault();
                form_data.append("ttd", document.getElementById('ttd').files[0]);
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(element) {
                            if (element.lengthComputable) {
                                $('#ttd').html('');
                                var percentComplete = ((element.loaded / element.total) * 100);
                                $("#ttd-bar").width(percentComplete + '%');
                                $("#ttd-bar").html(percentComplete + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    url: '<?= base_url('sekolah/ttd') ?>',
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,

                    beforeSend: function() {
                        $("#ttd-bar").width('0%');
                    },
                    success: function(json) {
                        if (json.status == 'success') {
                            Swal({
                                html: "Tanda tangan berhasil diupload",
                                type: 'success',

                            }).then(function() {
                                $("#gambar_ttd").attr('src', "<?= base_url('asset/kartu/ttd/'); ?>" + json.filename);
                                $("#ttd-bar").html('');
                            })
                        } else {
                            Swal({
                                html: 'Ooops, server error !',
                                type: 'error',

                            })
                        }
                    },
                    error: function() {
                        Swal({
                            html: 'Ooops, server error!',
                            type: 'error',

                        })
                    }
                });
            }
        }
    });
    $(document).on('change', '#logo', function(e) {
        var name = document.getElementById("logo").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            Swal({
                html: 'File gambar salah!',
                type: 'warning',
            });
        } else {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("logo").files[0]);
            var f = document.getElementById("logo").files[0];
            var fsize = f.size || f.fileSize;
            if (fsize > 1000000) {
                Swal({
                    html: 'Ukuran File Gambar Terlalu Besar Maksimal 1MB',
                    type: 'warning',
                });
            } else {
                jQuery("#chk-error").html('');
                e.preventDefault();
                form_data.append("logo", document.getElementById('logo').files[0]);
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(element) {
                            if (element.lengthComputable) {
                                $('#logo').html('');
                                var percentComplete = ((element.loaded / element.total) * 100);
                                $("#logo-bar").width(percentComplete + '%');
                                $("#logo-bar").html(percentComplete + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    url: '<?= base_url('sekolah/logo') ?>',
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,

                    beforeSend: function() {
                        $("#logo-bar").width('0%');
                    },
                    success: function(json) {
                        if (json.status == 'success') {
                            Swal({
                                html: "Logo berhasil diupload",
                                type: 'success',

                            }).then(function() {
                                $("#gambar_logo").attr('src', "<?= base_url('asset/kartu/logo/'); ?>" + json.filename);
                                $("#logo-bar").html('');
                            })
                        } else {
                            Swal({
                                html: 'Ooops, server error !',
                                type: 'error',

                            })
                        }
                    },
                    error: function() {
                        Swal({
                            html: 'Ooops, server error!',
                            type: 'error',

                        })
                    }
                });
            }
        }
    });
</script>
<script>
    var btnEdit = $('#update_siswa');
    var modalSiswa = $('#modalSiswa');
    var formSiswa = $('#formSiswa');
    var tablesiswa = $('#table-siswa');
    $(document).ready(function() {
        tablesiswa.DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true,
            "scrollCollapse": true,
            "ajax": {
                "url": "<?php echo site_url('siswa/get_data_siswa') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [-3, -2, -1], //last column
                "orderable": false, //set not orderable
            }, ]
        });
    });
    $(document).ready(function() {
        $("#form_tambah").on("submit", function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>siswa/validasi",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    if (data.error) {
                        if (data.nis_error != "") {
                            $("#nis_error").html(data.nis_error);
                        } else {
                            $("#nis_error").html("");
                        }
                        if (data.nama_error != "") {
                            $("#nama_error").html(data.nama_error);
                        } else {
                            $("#nama_error").html("");
                        }
                        if (data.jk_error != "") {
                            $("#jk_error").html(data.jk_error);
                        } else {
                            $("#jk_error").html("");
                        }
                        if (data.tanggal_lahir_error != "") {
                            $("#tanggal_lahir_error").html(data.tanggal_lahir_error);
                        } else {
                            $("#tanggal_lahir_error").html("");
                        }
                        if (data.tempat_lahir_error != "") {
                            $("#tempat_lahir_error").html(data.tempat_lahir_error);
                        } else {
                            $("#tempat_lahir_error").html("");
                        }
                        if (data.alamat_error != "") {
                            $("#alamat_error").html(data.alamat_error);
                        } else {
                            $("#alamat_error").html("");
                        }
                    }
                    if (data.success) {
                        location.reload();
                    }
                },
            });
        });
    });
    jQuery(document).on('submit', '#upload-form', function(e) {
        jQuery("#chk-error").html('');
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(element) {
                    if (element.lengthComputable) {
                        $('#uploaded_file').html('');
                        var percentComplete = ((element.loaded / element.total) * 100);
                        $("#file-progress-bar").width(percentComplete + '%');
                        $("#file-progress-bar").html(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '<?= base_url('siswa/doimport') ?>',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',

            beforeSend: function() {
                $("#file-progress-bar").width('0%');
                $("#btnUploadsiswa").attr('disabled', true);
                $("#btnUploadsiswa").html('<span class="spinner-border spinner-border-sm"></span> Mohon tunggu...');
            },

            success: function(json) {
                if (json.status == 'success') {
                    Swal({
                        title: 'Berhasil',
                        html: json.data_berhasil + '<br>' + json.data_gagal,
                        type: 'success',

                    }).then(function() {
                        window.location.reload();
                    })
                } else {
                    $('#uploaded_file').html('<div class="alert alert-danger">Data gagal diupload! <br>' + json.data_gagal + '<br>' + json.data_berhasil + '</div>');
                    $("#btnUploadsiswa").attr('disabled', false);
                    $("#btnUploadsiswa").html('<i class="mdi mdi-cloud-upload"></i> Upload');

                }
            },
            error: function() {
                $('#uploaded_file').html('<div class="alert alert-danger">Data gagal diupload, pastikan file dan penulisan benar!</div>');
                $("#btnUploadsiswa").attr('disabled', false);
                $("#btnUploadsiswa").html('<i class="mdi mdi-cloud-upload"></i> Upload');

            }
        });
    });

    function byid(id, type) {
        if (type == 'edit') {
            formSiswa[0].reset();
            $("#enis_error").html("");
            $("#enama_error").html("");
            $("#etanggal_lahir_error").html("");
            $("#etempat_lahir_error").html("");
            $("#ealamat_error").html("");
        }
        $.ajax({
            type: "GET",
            url: "<?php echo site_url('siswa/byid/') ?>" + id,
            dataType: "json",
            success: function(response) {
                if (type == 'print') {
                    window.location = "<?php echo site_url('siswa/print/') ?>" + id;
                }
                if (type == 'edit') {
                    btnEdit.attr('disabled', false);
                    btnEdit.html('Update');
                    $('[name="id_siswa"]').val(response.id_siswa);
                    $('[name="enis"]').val(response.nis);
                    $('[name="enama"]').val(response.nama);
                    $('[name="ejk"]').val(response.jk);
                    $('[name="ealamat"]').val(response.alamat);
                    $('[name="etempat_lahir"]').val(response.tempat_lahir);
                    $('[name="etanggal_lahir"]').val(response.tanggal_lahir);
                    modalSiswa.modal('show');
                }

                if (type == 'hapus') {
                    Swal({
                        html: "Apakah anda yakin?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Hapus data",
                        cancelButtonText: "Batal",
                    }).then((result) => {
                        if (result.value) {
                            hapus_data_siswa(response.id_siswa);
                        }
                    });
                }
            }
        });
    }

    function hapus_data_siswa(id) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('siswa/hapus_data_siswa/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                Swal({
                    html: 'Data berhasil dihapus!',
                    type: 'success',

                }).then(function() {
                    window.location.reload();
                });
            },
            error: function(response) {
                Swal({
                    html: 'Ooops, server error!',
                    type: 'warning',
                }).then(function() {
                    window.location.reload();
                });
            }
        });
    }

    $(document).ready(function() {
        $("#formSiswa").on("submit", function(event) {
            btnEdit.html('<span class="spinner-border spinner-border-sm"></span> Loading...');
            btnEdit.attr('disabled', true);
            $("#enis_error").html("");
            $("#enama_error").html("");
            $("#etanggal_lahir_error").html("");
            $("#etempat_lahir_error").html("");
            $("#ealamat_error").html("");
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>siswa/update",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    if (data.error) {
                        btnEdit.html('Update');
                        btnEdit.attr('disabled', false);
                        if (data.enis_error != "") {
                            $("#enis_error").html(data.enis_error);
                        } else {
                            $("#enis_error").html("");
                        }
                        if (data.enama_error != "") {
                            $("#enama_error").html(data.enama_error);
                        } else {
                            $("#enama_error").html("");
                        }
                        if (data.ejk_error != "") {
                            $("#ejk_error").html(data.ejk_error);
                        } else {
                            $("#ejk_error").html("");
                        }
                        if (data.etanggal_lahir_error != "") {
                            $("#etanggal_lahir_error").html(data.etanggal_lahir_error);
                        } else {
                            $("#etanggal_lahir_error").html("");
                        }
                        if (data.etempat_lahir_error != "") {
                            $("#etempat_lahir_error").html(data.etempat_lahir_error);
                        } else {
                            $("#etempat_lahir_error").html("");
                        }
                        if (data.ealamat_error != "") {
                            $("#ealamat_error").html(data.ealamat_error);
                        } else {
                            $("#ealamat_error").html("");
                        }
                    }
                    if (data.success == false) {
                        Swal({
                            html: 'Tidak ada data yang diubah!',
                            type: 'warning',
                        });
                        btnEdit.html('Update');
                        btnEdit.attr('disabled', false);
                    }
                    if (data.success == true) {
                        Swal({
                            html: 'Data siswa berhasil disimpan!',
                            type: 'success',
                        }).then(function() {
                            location.reload();
                        });
                    }
                },
            });
        });
    });
</script>

<script>
    var btnSekolah = $('#btnSekolah');
    var formSekolah = $('#formSekolah');
    $(document).ready(function() {
        $("#formSekolah").on("submit", function(event) {
            btnSekolah.html('<span class="spinner-border spinner-border-sm"></span> Loading...');
            btnSekolah.attr('disabled', true);
            $("#sekolah_error").html("");
            $("#lembaga_error").html("");
            $("#lokasi_error").html("");
            $("#alamat_error").html("");
            $("#domisili_error").html("");
            $("#kota_error").html("");
            $("#kode_pos_error").html("");
            $("#telepon_error").html("");
            $("#email_error").html("");
            $("#website_error").html("");
            $("#kepsek_error").html("");
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>sekolah/edit_sekolah",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    if (data.error) {
                        btnSekolah.html('Simpan');
                        btnSekolah.attr('disabled', false);
                        if (data.sekolah_error != "") {
                            $("#sekolah_error").html(data.sekolah_error);
                        } else {
                            $("#sekolah_error").html("");
                        }
                        if (data.lembaga_error != "") {
                            $("#lembaga_error").html(data.lembaga_error);
                        } else {
                            $("#lembaga_error").html("");
                        }
                        if (data.lokasi_error != "") {
                            $("#lokasi_error").html(data.lokasi_error);
                        } else {
                            $("#lokasi_error").html("");
                        }
                        if (data.alamat_error != "") {
                            $("#alamat_error").html(data.alamat_error);
                        } else {
                            $("#alamat_error").html("");
                        }
                        if (data.domisili_error != "") {
                            $("#domisili_error").html(data.domisili_error);
                        } else {
                            $("#domisili_error").html("");
                        }
                        if (data.kota_error != "") {
                            $("#kota_error").html(data.kota_error);
                        } else {
                            $("#kota_error").html("");
                        }
                        if (data.kode_pos_error != "") {
                            $("#kode_pos_error").html(data.kode_pos_error);
                        } else {
                            $("#kode_pos_error").html("");
                        }
                        if (data.telepon_error != "") {
                            $("#telepon_error").html(data.telepon_error);
                        } else {
                            $("#telepon_error").html("");
                        }
                        if (data.email_error != "") {
                            $("#email_error").html(data.email_error);
                        } else {
                            $("#email_error").html("");
                        }
                        if (data.website_error != "") {
                            $("#website_error").html(data.website_error);
                        } else {
                            $("#website_error").html("");
                        }
                        if (data.kepsek_error != "") {
                            $("#kepsek_error").html(data.kepsek_error);
                        } else {
                            $("#kepsek_error").html("");
                        }
                    }
                    if (data.success == false) {
                        Swal({
                            html: 'Tidak ada data yang diubah!',
                            type: 'warning',
                        });
                        btnSekolah.html('Simpan');
                        btnSekolah.attr('disabled', false);
                    }
                    if (data.success == true) {
                        Swal({
                            html: 'Data sekolah berhasil disimpan!',
                            type: 'success',
                        }).then(function() {
                            location.reload();
                        });
                    }
                },
            });
        });
    });
</script>
<script>
    var btnKartu = $('.kartu');
    btnKartu.click(function(e) {
        e.preventDefault();
        var desain = $(this).val();
        var id_desain = $(this).attr('id');
        Swal({
            html: "Gunakan desain ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Iya",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?php echo site_url('kartu/pilih') ?>",
                    method: "POST",
                    data: {
                        desain: desain,
                        id_desain: id_desain
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status == "failed") {
                            Swal({
                                html: 'Tidak ada data yang diubah!',
                                type: 'warning',
                            });
                            btnEdit.html('Update');
                            btnEdit.attr('disabled', false);
                        }
                        if (data.status == "success") {
                            Swal({
                                html: 'Desain berhasil dirubah!',
                                type: 'success',
                            }).then(function() {
                                location.reload();
                            });
                        }
                    }
                });
            }
        });
    });
</script>
<!-- Script Export Data Siswa -->

</body>

</html>
