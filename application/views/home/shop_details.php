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
                        <h2>SHOP DETAILS</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo site_url('/'); ?>">Home</a>
                            <!-- <a href="./index.html">Vegetables</a> -->
                            <span>SHOP DETAILS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="<?php echo base_url('assets/foto_produk/' . $produk->foto); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $produk->namaProduk; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">Rp. <?php echo $produk->harga; ?></div>
                        <p><?php echo $produk->deskripsiProduk; ?></p>
                        <a href="<?php echo site_url('main/add_cart/' . $produk->idProduk); ?>" class="primary-btn">ADD TO CART</a>
                        <ul>
                            <li><b>Status Barang</b> <span>Tersedia</span></li>
                            <li><b>Sistem Pembelian</b> <span>COD, <samp>Transfer</samp></span></li>
                            <li><b>Berat</b> <span>0.5 kg </span></li>
                            <li><b>Bagikan</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Informasi Produk</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Deskripsi Produk</h6> -->
                                    <p><?php echo $produk->informasi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Produk Rekomendasi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($produk_all as $val) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('assets/foto_produk/' . $val->foto) ?>">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="<?php echo site_url(); ?>"><?php echo $val->namaProduk; ?></a></h6>
                                <h5>Rp. <?php echo $val->harga; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->