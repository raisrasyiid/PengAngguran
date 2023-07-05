<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Kategori</span>
                    </div>
                    <ul>
                        <?php foreach ($kategori as $val) { ?>
                            <li><a href="<?php echo site_url('main/produk_by_kategori/' . $val->idKat); ?>"><?php echo $val->namaKat; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+62 818 0232 6693</h5>
                            <span>09.00 - 20.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/breadcrumb.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo site_url('/'); ?>">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Form Checkout</h4>
            <form action="<?php echo site_url('main/save_checkout'); ?>" method="post">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nama Depan<span>*</span></p>
                                    <input type="text" name="namadepan">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nama Belakang<span>*</span></p>
                                    <input type="text" name="namabelakang">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Alamat<span>*</span></p>
                            <textarea class="form-control" rows="3" id="message" name="alamat" placeholder="Alamat" data-validation-required-message="Please enter your message"></textarea>
                        </div>
                        <div class="checkout__input">
                            <p>Kecamatan<span>*</span></p>
                            <input type="text" name="kec">
                        </div>
                        <div class="checkout__input">
                            <p>Provinsi<span>*</span></p>
                            <input type="text" name="prov">
                        </div>
                        <div class="checkout__input">
                            <p>Kode Pos<span>*</span></p>
                            <input type="text" name="kodepos">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>No telp<span>*</span></p>
                                    <input type="text" name="notlp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email">
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Produk <span>Total</span></div>
                            <ul>
                                <li>Anggur<span>Rp. 100.000</span></li>
                            </ul>
                            <div class="checkout__order__total">Total <span>Rp 500.000</span></div>
                            <button type="submit" class="site-btn">ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->