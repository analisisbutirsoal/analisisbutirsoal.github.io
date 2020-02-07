<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <div id="dropzone1" class="pro-ad">
                        <h3>Tambahkan Data Guru</h3>
                        <form action="<?= site_url("admin/addSiswa")?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input name="username" type="text" class="form-control" placeholder="Nomor Induk (Username)">
                                    </div>
                                    <div class="form-group">
                                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                                        <select name="kelas" data-placeholder="Kelas" class="chosen-select" tabindex="-1" required>
                                            <?php foreach($kelas as $kls) : ?>
                                            <option value=""></option>
                                            <option value="<?= $kls['kelas']?>"><?= $kls['kelas']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
                                        <select name="tahun" data-placeholder="Tahun Ajaran" class="chosen-select" tabindex="-1" required>
                                            <?php foreach($tahun as $thn) : ?>
                                            <option value=""></option>
                                            <option value="<?= $thn['tahun']?>"><?= $thn['tahun']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="payment-adress">
                                        <button name="submit" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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