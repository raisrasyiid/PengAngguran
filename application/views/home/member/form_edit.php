<!-- Contact Start -->
<div class="container-fluid pt-5">
<div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Form Edit Member</h4>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('member/save_edit_member_profile');?>" enctype="multipart/form-data">
                <input type="hidden" name="idKonsumen" value="<?php echo $memberEdit->idKonsumen; ?>">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="username" value="<?php echo $memberEdit->username; ?>" placeholder=" Username" 
                         data-validation-required-message="Please enter your name" required/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="password" value="<?php echo $memberEdit->password; ?>" placeholder=" Password"
                         data-validation-required-message="Please enter your name" required/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="nama" value="<?php echo $memberEdit->namaKonsumen; ?>" placeholder=" Nama"
                         data-validation-required-message="Please enter your name" required/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="name" name="email" value="<?php echo $memberEdit->email; ?>" placeholder=" Email"
                         data-validation-required-message="Please enter your name" required/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="notlp" value="<?php echo $memberEdit->tlpn; ?>" placeholder=" Nomor Telepon"
                         data-validation-required-message="Please enter your name" required/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" name="alamat" value="<?php echo $memberEdit->alamat; ?>" placeholder=" Password"
                         data-validation-required-message="Please enter your name" required/>
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