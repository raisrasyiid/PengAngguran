<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Form Tambah Produk</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('produk/save'); ?>" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="idToko" value="<?php echo $idToko; ?>">
                    <div class="control-group">
                        <select class="form-control mb-4" name="kategori">
                            <?php foreach ($kategori as $val) { ?>
                                <option value="<?php echo $val->idKat; ?>"><?php echo $val->namaKat; ?></option>
                            <?php } ?>
                        </select>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="namaProduk" placeholder="Nama Produk" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="file" class="form-control" id="name" name="gambar" placeholder="Gambar Produk" required="required" data-validation-required-message="Please enter your logo" required/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="hargaProduk" placeholder="Harga Produk" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="jumlahProduk" placeholder="Jumlah Produk" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="beratProduk" placeholder="Berat Produk" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea type="text" class="form-control" id="name" name="deskripsi" placeholder="Deskripsi Produk" required="required" data-validation-required-message="Please enter your name"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea type="text" class="form-control" id="name" name="informasi" placeholder="Informasi Produk" required="required" data-validation-required-message="Please enter your name"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                       <button class="btn bnt-sm btn-info float-left" type="submit" id="sentMessageButton">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>