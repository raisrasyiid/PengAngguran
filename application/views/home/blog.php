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
<section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/breadcrumb1.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Blog</h2>
                    <div class="breadcrumb__option">
                        <a href="=" <?php echo site_url('/'); ?>">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="related-blog spad">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row">
                    <?php 
                        $no=1;
                        foreach($blog as $val) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <a href="<?php echo site_url('main/blog_details/'.$val->idBlog  );?>"><img src="<?php echo base_url('assets/blog/'.$val->cover_blog); ?>" alt=""></a>
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> <?php echo $val->tanggal; ?></li>
                                            <!-- <li><i class="fa fa-comment-o"></i> 5</li> -->
                                        </ul>
                                        <h5><a href="<?php echo site_url('main/blog_details/'.$val->idBlog  );?>"><?php echo $val->judul_blog; ?></a></h5>
                                        <!-- <p><?php echo $val->isi_blog; ?> </p> -->
                                        <a href="<?php echo site_url('main/blog_details/'.$val->idBlog  );?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->