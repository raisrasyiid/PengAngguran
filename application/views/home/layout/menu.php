  <!-- Hero Section Begin -->
  <section class="hero">
      <div class="container-fluid">
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
                              <input type="text" placeholder="Apa yang kamu cari..?">
                              <button type="submit" class="site-btn">Cari...</button>
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
                  <div class="hero__item set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/hero/bg1.png'); ?>">
                      <div class="hero__text">
                          <span>Pecinta Anggur</span>
                          <h2>100% <br />Anggur Segar...</h2>
                          <p>Ceriakan Hidupmu! Dapatkan yang Terbaik Hanya dari Kami!</p>
                          <a href="#" class="primary-btn">Beli Sekarang</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Hero Section End -->

  <!-- Categories Section Begin -->
  <section class="categories">
      <div class="container">
          <div class="row">
              <div class="categories__slider owl-carousel">
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/categories/bibit1.jpg'); ?>">
                          <h5><a href="#">Bibit Anggur</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/categories/jadi.jpg'); ?>">
                          <h5><a href="#">Tanaman Anggur</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/categories/buah.jpg'); ?>">
                          <h5><a href="#">Buah Anggur</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/categories/pupuk.jpg'); ?>">
                          <h5><a href="#">Pupuk Tanaman</a></h5>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="categories__item set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/categories/alat.jpg'); ?>">
                          <h5><a href="#">Peralatan Kebun</a></h5>
                      </div>
                  </div>
                 
              </div>
          </div>
      </div>
  </section>
  <!-- Categories Section End -->

  <!-- Featured Section Begin -->
  <section class="featured spad">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title">
                      <h2>Produk Terkini</h2>
                  </div>
                  <div class="featured__controls">
                      <ul>
                          <li class="active" data-filter="*">All</li>
                          <?php foreach ($kategori as $val) { ?>
                              <li data-filter="<?php echo site_url('main/produk_by_kategori/' . $val->idKat); ?>"><?php echo $val->namaKat; ?></li>
                          <?php } ?>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row featured__filter">
              <?php foreach ($produk_toko as $val) { ?>
                  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges  <?php echo site_url('main/produk_by_kategori/' . $val->idKat); ?> ">
                      <div class="featured__item">
                          <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/foto_produk/' . $val->foto) ?>">
                              <ul class="featured__item__pic__hover">
                                  <li><a href="<?php echo site_url('main/detail_produk/' . $val->idProduk); ?>"><i class="fa fa-eye "></i></a></li>
                                  <li><a href="<?php echo site_url('main/add_cart/' . $val->idProduk); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                          </div>
                          <div class="featured__item__text ">
                              <h6 class="mb-2"><?php echo $val->namaProduk ?></h6>
                              <h6>Rp. <?php echo $val->harga ?></h6>
                          </div>
                          <div class="">
                              <h6 style="font-weight: 650; text-align:center;"><img src="<?php echo base_url('assets/logo_toko/' . $val->logo); ?>" alt="" width="35%"><?php echo $val->namaToko; ?></h6>
                          </div>
                      </div>
                  </div>
              <?php } ?>
          </div>
      </div>
  </section>
  <!-- Featured Section End -->

  <!-- Banner Begin -->
  <div class="banner">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="banner__pic">
                      <a href="#"><img src="<?php echo base_url('assets/home/ogani-master/img/banner/banner-1.png'); ?>" alt=""></a>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="banner__pic">
                      <a href="#"><img src="<?php echo base_url('assets/home/ogani-master/img/banner/banner-2.png'); ?>" alt=""></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Banner End -->


  <section class="from-blog spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title from-blog__title">
                      <h2>Produk</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <?php foreach ($produk_toko as $val) { ?>
                  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges  <?php echo site_url('main/produk_by_kategori/' . $val->idKat); ?> ">
                      <div class="featured__item">
                          <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/foto_produk/' . $val->foto) ?>">
                              <ul class="featured__item__pic__hover">
                                  <li><a href="<?php echo site_url('main/detail_produk/' . $val->idProduk); ?>"><i class="fa fa-eye "></i></a></li>
                                  <li><a href="<?php echo site_url('main/add_cart/' . $val->idProduk); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                          </div>
                          <div class="featured__item__text ">
                              <h6 class="mb-2"><?php echo $val->namaProduk ?></h6>
                              <h6>Rp. <?php echo $val->harga ?></h6>
                          </div>
                          <div class="">
                              <h6 style="font-weight: 650; text-align:center;"><img src="<?php echo base_url('assets/logo_toko/' . $val->logo); ?>" alt="" width="35%"><?php echo $val->namaToko; ?></h6>
                          </div>
                      </div>
                  </div>
              <?php } ?>
          </div>
      </div>
  </section>

  <!-- Blog Section Begin -->
  <section class="from-blog spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-title from-blog__title">
                      <h2>Edukasi</h2>
                  </div>
              </div>
          </div>
          <div class="row">

              <?php foreach ($blog as $val) { ?>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                      <div class="blog__item">
                          <div class="blog__item__pic">
                              <img src="<?php echo base_url('assets/blog/' . $val->cover_blog); ?>" alt="">
                          </div>
                          <div class="blog__item__text">
                              <ul>
                                  <li><i class="fa fa-calendar-o"></i> <?php echo $val->tanggal; ?></li>
                              </ul>
                              <h5><a href="<?php echo site_url('main/blog_details/' . $val->idBlog); ?>"><?php echo $val->judul_blog; ?></a></h5>
                              <a href="<?php echo site_url('main/blog_details/'.$val->idBlog  );?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                              <!-- <p><?php echo $val->isi_blog; ?></p> -->
                          </div>
                      </div>
                  </div>
              <?php } ?>
          </div>

      </div>
  </section>
  <!-- Blog Section End -->