<div class="wrapper">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                Siswa
                            </h6>
                            <h4 class="mb-3 mt-0 float-right"><?= $total_siswa; ?></h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="<?= base_url('siswa'); ?>" class="text-white-50"><i class="mdi dripicons-user h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Jumlah Siswa</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-info mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                Jumlah Print
                            </h6>
                            <h4 class="mb-3 mt-0 float-right"><?= $total_siswa; ?></h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="<?= base_url('cetak/semua'); ?>" class="text-white-50"><i class="dripicons-print h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Print Semua</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                Sekolah
                            </h6>
                            <h4 class="mb-3 mt-0 float-right"></h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="<?= base_url('siswa'); ?>" class="text-white-50"><i class="dripicons-store h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Pengaturan Sekolah</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                KARTU
                            </h6>
                            <h4 class="mb-3 mt-0 float-right"></h4>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="<?= base_url('kartu'); ?>" class="text-white-50"><i class="dripicons-card h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Pengaturan Kartu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>