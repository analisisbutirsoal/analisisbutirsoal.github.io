<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <div id="dropzone1" class="pro-ad">
                        <h3>Edit Data Guru</h3>
                        <?php foreach ($edit as $guru) : ?>
                        <form action="<?= site_url("admin/editGuru/".$guru['nip_nik'])?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload" enctype= "multipart/form-data">
                            <div class="row h-100 justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
                                    <div class="form-group">
                                        <label for="username">NIP/NIK</label>
                                        <input name="username" type="text" class="form-control" value="<?= $guru['nip_nik']?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input name="nama" type="text" class="form-control" value="<?= $guru['nama'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" value="<?= ($guru['alamat'] == null) ? 'Alamat' : $guru['alamat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" value="<?= ($guru['email'] == null) ? 'E-mail' : $guru['email'];?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Nomor Handphone</label>
                                        <input name="phone" type="text" class="form-control" value="<?= ($guru['phone'] == null) ? 'Phone' : $guru['phone'];?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img id="foto" class="img-circle m-b" src="<?= ($guru['foto'] == null) ? base_url()."asset/themee/img/user.png" : base_url()."upload/guru/".$guru['foto'];?>"/>
                                        </label>
                                        <input name="foto" class="form-control" id="file-input" type="file" onchange="document.getElementById('foto').src = window.URL.createObjectURL(this.files[0])"/>
                                    </div>
                                    <p style="text-align: center;">Klik pada gambar untuk mengubah.</p>
                                </div>
                            </div>
                            <?php endforeach;?>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="payment-adress">
                                        <a class="btn btn-danger" href="<?= site_url("admin/daftarGuru")?>">Batal</a>
                                        <button name="submitEdit" type="submit" class="btn btn-primary waves-effect waves-light">Edit</button>
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
