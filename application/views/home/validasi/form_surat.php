<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Form Perlengkapan Surat Toko</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('validasi/save_surat'); ?>" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="idToko" value="<?php echo $idToko; ?>">
                <div class="control-group">
                        <input type="text" class="form-control" id="name" name="namaPemilik" placeholder="Nama Pemilik" autofocus required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="tahunberdiri" placeholder="Tahun Berdiri" autofocus required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="file" class="form-control" id="password" name="foto_toko" placeholder="Foto Toko" required="required" data-validation-required-message="Please enter your logo" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="file" class="form-control" id="password" name="video_toko" placeholder="Video Toko" required="required" data-validation-required-message="Please enter your logo" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="3" id="name" name="alamat_toko" placeholder="Alamat" required="required" data-validation-required-message="Please enter your deskripsi"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn bnt-sm btn-info float-left" type="submit" id="sentMessageButton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>