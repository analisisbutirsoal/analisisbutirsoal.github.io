<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <div id="dropzone1" class="pro-ad">
                        <h3>Tambah Mata Pelajaran</h3>
                        <form action="<?= site_url("admin/addMapel")?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input name="nama_mapel" type="text" class="form-control" required placeholder="Nama Mata Pelajaran">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <select name="guru" data-placeholder="Pilih Guru" class="chosen-select" tabindex="-1" required>
                                            <?php foreach($guru as $guru) : ?>
                                            <option value=""></option>
                                            <option value="<?= $guru['nip_nik']?>"><?= $guru{'nama'}?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <select multiple name="kelas[]" data-placeholder="Pilih Kelas" class="chosen-select" tabindex="-1" required>
                                            <?php foreach($kelas as $kls) :?>
                                            <option value=""></option>
                                            <option value="<?= $kls['kd_kelas']?>"><?= $kls['kelas'].' '.$kls['tahun']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="payment-adress">
                                        <input class="btn btn-danger" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Batal"/>
                                        <button name="submit" type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
