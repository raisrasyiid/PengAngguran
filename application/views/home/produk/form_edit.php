<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Form Edit Produk</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('produk/save_edit'); ?>" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="idToko" value="<?php echo $produk->idToko; ?>">
                    <input type="hidden" name="idProduk" value="<?php echo $produk->idProduk; ?>">
                    <div class="control-group">
                        <select class="form-control mb-4" name="kategori">
                            <?php foreach ($kategori as $val) { ?>
                                <option value="<?php echo $val->idKat; ?>"><?php echo $val->namaKat; ?></option>
                            <?php } ?>
                        </select>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label for="">Nama Produk</label>
                        <input type="text" class="form-control" id="name" name="namaProduk" placeholder="Nama Produk" value="<?php echo $produk->namaProduk; ?>" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <img src="<?php echo base_url() . './assets/foto_produk/' . $produk->foto; ?>" width="150" height="110">
                        <input type="file" class="form-control" id="password" name="gambar" placeholder="Gambar Produk" data-validation-required-message="Please enter your logo"  required/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="">Harga Produk</label>
                        <input type="text" class="form-control" id="name" name="hargaProduk" placeholder="Harga Produk" value="<?php echo $produk->harga; ?>" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="">Jumlah produk yang tersedia</label>
                        <input type="text" class="form-control" id="name" name="jumlahProduk" placeholder="Jumlah Produk" value="<?php echo $produk->stok; ?>" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="">Berat Produk</label>
                        <input type="text" class="form-control" id="name" name="beratProduk" placeholder="Berat Produk" value="<?php echo $produk->berat; ?>" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="">Deskripsi Produk</label>
                        <textarea type="text" class="form-control" id="name" name="deskripsi" placeholder="Deskripsi Produk" value="<?php echo $produk->deskripsiProduk; ?>" required="required" data-validation-required-message="Please enter your name"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="">Informasi Produk</label>
                        <textarea type="text" class="form-control" id="name" name="informasi" placeholder="Informasi Produk" value="<?php echo $produk->informasi; ?>" required="required" data-validation-required-message="Please enter your name"></textarea>
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