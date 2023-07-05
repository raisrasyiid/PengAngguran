<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Form Edit Toko</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('toko/save_edit');?>" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="idToko" value="<?php echo $toko->idToko; ?>">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="namaToko" value="<?php echo $toko->namaToko; ?>" placeholder="Nama Toko"
                            required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <img src="<?php echo base_url() . './assets/logo_toko/'. $toko->logo; ?>" width="150" height="110">
                        <input type="file" class="form-control" id="password" name="logo" value="" placeholder="Logo"
                            required="required" data-validation-required-message="Please enter your logo" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="3" id="name" name="deskripsi" value="" placeholder="Deskripsi"
                            required="required" data-validation-required-message="Please enter your deskripsi"><?php echo $toko->deskripsi; ?></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn bnt-sm btn-info float-left" type="submit" id="sendMessageButton" >Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>