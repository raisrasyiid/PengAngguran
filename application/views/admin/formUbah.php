<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Ganti Password</h1>
                                </div>
                                <form class="user" action="<?php echo site_url('adminpanel/save_change_pass');?>" method="post" autocomplete="off"> 
                                <input type="hidden" name="id" value="<?php echo $admin->idAdmin; ?>">    
                               
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"  placeholder="Ganti Password" value="<?php echo $admin->password;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"  placeholder="Ganti Password " name="passNew" required>
                                    </div>
                                    
                                    <button class="btn btn-primary btn-user btn-block">
                                        Ganti Password
                                    </button>
                                    
                                </form>
                                <hr>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>