    <div class="wrapper">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-6 m-b-30">
                    <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">TAMBAH DATA SISWA</div>
                    <div class="card m-b-30 position-static">
                        <div class="card-body">
                            <p class="m-b-30 m-t-10">Mohon untuk mengisi data dengan baik dan benar</p>
                            <form method="POST" id="form_tambah" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">NIS</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nis" placeholder="Masukan Nomor Induk Siswa" />
                                        <span id="nis_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama" />
                                        <span id="nama_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Jenis kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="jk" id="exampleFormControlSelect1">
                                            <option value="">...</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <span id="jk_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tempat lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" />
                                        <span id="tempat_lahir_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tanggal_lahir" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                        <span id="tanggal_lahir_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" placeholder="Sawojajar wanasari brebes" />
                                        <span id="alamat_error" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <input type="reset" name="reset" id="reset" class="btn btn-secondary" value="Reset">
                                    <input type="submit" name="submit_tambah" id="submit_tambah" class="btn btn-primary" value="Simpan">
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">UPLOAD DATA SISWA</div>
                    <div class="card m-b-30 position-static">
                        <div class="card-body">

                            <div class="m-t-10">
                                <a type="button" href="<?= base_url('asset/fileimport/master.xlsx'); ?>" class="btn btn-success waves-effect waves-light text-light"><i class="mdi mdi-file-excel"></i> Download Template</a>
                            </div>
                            <p class="m-b-10">Silahkan download template berikut lalu isi data sesuai instruksi dari file tersebut!</p>

                            <div class="row align-items-center m-b-10">
                                <div class="col">
                                    <div id="file-progress-bar" class="progress-bar progress-bar-striped progress-bar-animated"></div>

                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <div id="uploaded_file"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="m-b-30">

                                        <form id="upload-form" class="upload-form" method="post" enctype="multipart/form-data">
                                            <div class="input-group-prepend custom-file">
                                                <input name="importfile" type="file" class="custom-file-input" id="customFileLangHTML" accept=".xls,.xlsx" required>
                                                <label class="custom-file-label" for="customFileLangHTML" data-browse="Browse"></label>
                                            </div>
                                            <p class="text-muted ">Silahkan upload file excel yang sudah diisi
                                            </p>
                                            <div class="text-center">
                                                <button type="submit" id="btnUploadsiswa" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-cloud-upload"></i> Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">DATA SISWA</div>
                    <div class="card position-static m-b-30">
                        <div class="card-body">
                            <table id="table-siswa" class="table table-hover table-borderless" style="border-collapse: collapse;  border-spacing: 0; width: 100%;">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                            <!-- end row -->
                        </div>
                        <!-- Modal -->
                    </div>
                    <div class="modal fade" id="modalSiswa" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <p class="m-b-30 m-t-10">Mohon untuk mengisi data dengan baik dan benar</p>
                                    <form method="POST" id="formSiswa" enctype="multipart/form-data">
                                        <input type="hidden" name="id_siswa">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">NIS</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="enis" placeholder="Masukan Nomor Induk Siswa" />
                                                <span id="enis_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="enama" placeholder="Masukan nama" />
                                                <span id="enama_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Jenis kelamin</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="ejk" id="exampleFormControlSelect1">
                                                    <option value="">...</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <span id="ejk_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tempat lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="etempat_lahir" placeholder="Tempat lahir" />
                                                <span id="etempat_lahir_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="etanggal_lahir" placeholder="mm/dd/yyyy" id="datepicker-autocloses" />
                                                <span id="etanggal_lahir_error" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="ealamat" placeholder="Sawojajar wanasari brebes" />
                                                <span id="ealamat_error" class="text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="form-group text-right">
                                            <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close">
                                            <button type="submit" name="update_siswa" id="update_siswa" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->