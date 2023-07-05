<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Form Tambah Toko</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('toko/save'); ?>" enctype="multipart/form-data" autocomplete="off">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="namaToko" placeholder="Nama Toko" autofocus required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="file" class="form-control" id="password" name="logo" placeholder="Logo" required="required" data-validation-required-message="Please enter your logo" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="3" id="name" name="deskripsi" placeholder="Deskripsi" required="required" data-validation-required-message="Please enter your deskripsi"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn bnt-sm btn-info float-left" type="submit" id="sentMessageButton">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>