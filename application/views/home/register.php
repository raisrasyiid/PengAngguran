<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Register</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form"> 
                    <form name="sentMessage"  method="post" action="<?php echo site_url('main/register_member');?>" autocomplete="off">
                        <div class="control-group">
                            <label for="name">Username</label>
                            <input type="text" name="username" class="form-control" id="name" autofocus placeholder="Username"
                                required="required" data-validation-required-message="Please enter your username" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" class="form-control" id="pass" placeholder="Password"
                                required="required" data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div class="control-group">
                            <label for="pass">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="form-control" id="pass" placeholder="Nama Lengkap"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div class="control-group">
                            <label for="pass">Email</label>
                            <input type="text" name="email" class="form-control" id="pass" placeholder="Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div class="control-group">
                            <label for="pass">Alamat</label>
                            <textarea type="text" name="alamat" class="form-control" id="pass" placeholder="Alamat"
                                required="required" data-validation-required-message="Please enter your nomor alamat"></textarea>
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div class="control-group">
                            <label for="pass">Nomor Telepon</label>
                            <input type="text" name="nohp" class="form-control" id="pass" placeholder="Nomor Telepon"
                                required="required" data-validation-required-message="Please enter your nomor telepon" />
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
