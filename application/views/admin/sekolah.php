    <div class="wrapper">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-6 m-b-30">
                    <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">DATA SEKOLAH</div>
                    <div class="card m-b-30 position-static">
                        <div class="card-body">
                            <p class="m-b-30 m-t-10">Mohon untuk mengisi data dengan baik dan benar</p>
                            <form method="POST" id="formSekolah" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $sekolah['id']; ?>">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Sekolah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sekolah" value="<?= $sekolah['sekolah']; ?>" placeholder="SMKN 1 Tunas Bangsa" />
                                        <span id="sekolah_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Lembaga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="lembaga" value="<?= $sekolah['lembaga']; ?>" placeholder="Dinas pendidikan/Lembaga pendidikan" />
                                        <span id="lembaga_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kecematan atau Desa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="lokasi" value="<?= $sekolah['lokasi']; ?>" placeholder="Wanasari" />
                                        <span id="lokasi_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" value="<?= $sekolah['alamat']; ?>" placeholder="Jalan MT haryono No.28 Semarang" />
                                        <span id="alamat_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Pilih</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="domisili" id="exampleFormControlSelect1">
                                            <option value="">Kota/Kabupaten</option>
                                            <option value="Kota">Kota</option>
                                            <option value="Kabupaten">Kabupaten</option>
                                        </select>
                                        <span id="domisili_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kota/ Kabupaten</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kota" value="<?= $sekolah['kota']; ?>" placeholder="Semarang" />
                                        <span id="kota_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kode Pos</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="kode_pos" value="<?= $sekolah['kode_pos']; ?>" placeholder="52252" />
                                        <span id="kode_pos_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telepon" value="<?= $sekolah['telepon']; ?>" placeholder="0283 124578" />
                                        <span id="telepon_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" value="<?= $sekolah['email']; ?>" placeholder="smksmp@sekolah.sch.id" />
                                        <span id="email_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="website" value="<?= $sekolah['website']; ?>" placeholder="sekolah.sch.id" />
                                        <span id="website_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kepala Sekolah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kepsek" value="<?= $sekolah['kepsek']; ?>" placeholder="Nama kepala sekolah" />
                                        <span id="kepsek_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" id="btnSekolah" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">EDIT TATA TERTIB</div>
                    <div class="card m-b-30 p-3 position-static">
                        <div class="clearfix">
                            <div class="container">
                                <div class="form-group">
                                    <form name="add_name" id="add_name">
                                        <table class="table table-borderless" id="dynamic_field">
                                            <tr>
                                                <td>1</td>
                                                <td><input type="text" name="name[]" placeholder="Masukan tata tertib" class="form-control name_list" /></td>
                                                <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                                            </tr>
                                        </table>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td>
                                                    <input type="button" name="submit" id="submit" class="btn btn-info text-right" value="Simpan" />
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">TATA TERTIB SEKOLAH</div>
                    <div class="card m-b-10 position-static">
                        <div class="card-body">
                            <ol>
                                <?= $sekolah['visi_misi']; ?>
                            </ol>
                        </div>
                        </p>
                    </div>
                    <div class="row p-3">
                        <div class="card p-3">
                            <img src="<?= base_url('asset/kartu/desain/') .  $sekolah['desain']; ?>" alt="backgroun-kartu" style="margin: 0mm 0mm 0mm 0mm;">
                            <div class="clearfix">
                                <h6 class="text-uppercase mt-10 text-center text-white-50">
                                    Desain kartu yang dipilih <a href="<?= base_url('cetak'); ?>" title="Lihat contoh"> <i class="h4 dripicons-export"></i></a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat text-white">
                                <div class="mini-stat-desc">
                                    <div class="text-center">
                                        <input name="logo" type="file" class="custom-file-input" id="logo">
                                        <label id="labe-logo" for="logo">
                                            <img id="gambar_logo" src="<?= base_url('asset/kartu/logo/') . $sekolah['logo']; ?>" width="60px" height="55px">
                                        </label>
                                    </div>
                                    <div class="clearfix">
                                        <div id="logo-bar" class="progress-bar progress-bar-striped progress-bar-animated"></div>
                                        <h6 class="text-uppercase mt-10 text-center text-white-50">
                                            Logo
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary mini-stat text-white">
                                <div class="mini-stat-desc">
                                    <div class="text-center">
                                        <input name="dinas" type="file" class="custom-file-input" id="dinas">
                                        <label id="labe-dinas" for="dinas">
                                            <img id="gambar_dinas" src="<?= base_url('asset/kartu/dinas/') . $sekolah['dinas']; ?>" width="60px" height="55px">
                                        </label>
                                    </div>
                                    <div class="clearfix">
                                        <div id="dinas-bar" class="progress-bar progress-bar-striped progress-bar-animated"></div>
                                        <h6 class="text-uppercase mt-10 text-center text-white-50">
                                            Dinas
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info mini-stat text-white">
                                <div class="mini-stat-desc">
                                    <div class="text-center">
                                        <input name="ttd" type="file" class="custom-file-input" id="ttd">
                                        <label id="labe-ttd" for="ttd">
                                            <img id="gambar_ttd" src="<?= base_url('asset/kartu/ttd/') . $sekolah['tanda_tangan']; ?>" width="60px" height="55px">
                                        </label>
                                    </div>
                                    <div class="clearfix">
                                        <div id="ttd-bar" class="progress-bar progress-bar-striped progress-bar-animated"></div>
                                        <h6 class="text-uppercase mt-10 text-center text-white-50">
                                            TTD
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success mini-stat text-white">
                                <div class="mini-stat-desc">
                                    <div class="text-center">
                                        <input name="stempel" type="file" class="custom-file-input" id="stempel">
                                        <label id="labe-stempel" for="stempel">
                                            <img id="gambar_stempel" src="<?= base_url('asset/kartu/stempel/') . $sekolah['stempel']; ?>" width="60px" height="55px">
                                        </label>
                                    </div>

                                    <div class="clearfix">
                                        <div id="stempel-bar" class="progress-bar progress-bar-striped progress-bar-animated"></div>
                                        <h6 class="text-uppercase mt-10 text-center text-white-50">
                                            Stempel
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->