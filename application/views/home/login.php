<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Login</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form"> 
                    <form name="sentMessage"  method="post" action="<?php echo site_url('main/login_member');?>" autocomplete="off">
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
                        <div>
                            <p>Belum punya akun ? <a href="<?php echo site_url('main/register');?>">Daftar</a></p><br>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
