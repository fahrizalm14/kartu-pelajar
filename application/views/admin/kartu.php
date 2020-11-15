<div class="wrapper">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-6">
                <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">UPLOAD BACKGROUND DESAIN</div>
                <div class="card m-b-30 p-3 position-static">
                    <p class="text-center m-b-30 m-t-10">Klik gambar untuk pilih desain tata letak tulisan</p>
                    <form method="POST" id="uploadkartu" enctype="multipart/form-data">
                        <input type="hidden" name="kartu_jenis">
                        <div id="thumbs" class="text-center  m-b-30">
                            <!-- Dynamically created thumbnails start -->
                            <img id="1" class="m-b-10" src="<?= base_url('asset/kartu/contoh.png'); ?> " width="300px">
                            <img id="2" src="<?= base_url('asset/kartu/contoh2.png'); ?> " width="300px">
                            <!-- Dynamically created thumbnails end -->
                        </div>
                        <span id="kartu_error" class="text-danger text-center"></span>
                        <p class="text-center m-b-30 m-t-10">Pilih file untuk gambar dari backgound desain, sesuai layout yang dipilih</p>
                        <div class="text-center">
                            <div class="input-group-prepend custom-file col-8 m-b-30">
                                <input name="filekartu" id="filekartu" type="file" class="custom-file-input" id="customFileLangHTML" required>
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="Browse"></label>
                            </div>
                            <div id="filekartu-bar" class="progress-bar progress-bar-striped progress-bar-animated m-b-30"></div>
                        </div>
                        <div class="text-center m-b-30">
                            <button type="submit" id="btnKartu" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-cloud-upload"></i> Upload</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="btn font-weight shadow rounded-0 text-light position-absolute" style="background:#172f5f ;margin-top: -20px; margin-left:-5px">PILIH BACKGROUND DESAIN</div>
                <div class="card m-b-30 p-3 position-static">
                    <?php foreach ($desain as $d) : ?>
                        <div class="card m-t-30">
                            <img src="<?= base_url('asset/kartu/desain/') . $d->desain; ?>" alt="backgroun-kartu" style="margin: 0mm 0mm 0mm 0mm;">
                            <div class="clearfix">
                                <h6 class="text-uppercase mt-10 text-center text-white-50">
                                    <button type="button" id="<?= $d->id_desain; ?>" value="<?= $d->desain; ?>" class="kartu btn btn-primary btn-lg btn-block waves-effect waves-light">Pilih Desain ini</button>
                                </h6>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

        </div>
    </div>