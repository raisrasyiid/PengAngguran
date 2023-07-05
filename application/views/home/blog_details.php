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

 <!-- Blog Details Hero Begin -->
 <section class="blog-details-hero set-bg" data-setbg="<?php echo base_url('assets/home/ogani-master/img/blog/details/breadcrumb1.jpg'); ?>">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="blog__details__hero__text">
                     <input type="hidden" name="idBlog" value="<?php echo $blog->idBlog; ?>">
                     <h2><?php echo $blog->judul_blog; ?></h2>
                     <ul>
                         <li>By Admin</li>
                         <li><?php echo $blog->tanggal; ?></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Blog Details Hero End -->

 <!-- Blog Details Section Begin -->
 <section class="blog-details spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-5 order-md-1 order-2">
                 <div class="blog__sidebar">
                     <div class="blog__sidebar__item">
                         <h4>Recent News</h4>
                         <?php $no = 1;
                            foreach ($blog_all as $val) {; ?>
                             <div class="blog__sidebar__recent">
                                 <a href="#" class="blog__sidebar__recent__item">
                                     <div class="blog__sidebar__recent__item__pic">
                                         <a href="<?php echo site_url('main/blog_details/' . $val->idBlog); ?>">
                                             <img src="<?php echo base_url('assets/blog/' . $val->cover_blog); ?>" alt="" width="75px" height="75px">
                                         </a>
                                     </div>
                                     <div class="blog__sidebar__recent__item__text">
                                         <h5>
                                             <a href="<?php echo site_url('main/blog_details/' . $val->idBlog); ?>">
                                                 <h4><?php echo $val->judul_blog; ?></h4>
                                             </a>
                                         </h5>
                                         <span>
                                             <li><i class="fa fa-calendar-o"></i> <?php echo $val->tanggal; ?></li>
                                         </span>
                                     </div>
                                 </a>
                             </div>
                         <?php } ?>
                     </div>
                 </div>
             </div>

             <div class="col-lg-8 col-md-7 order-md-1 order-1">
                 <div class="blog__details__text">
                     <h2><b>~<?php echo $blog->judul_blog; ?>~</b></h2>
                     <img src="<?php echo base_url('assets/blog/' . $blog->cover_blog); ?>" width="auto" height="200" alt="">
                     <p><?php echo $blog->isi_blog; ?></p>
                 </div>
                 <div class="blog__details__content">
                     <div class="row">
                         <div class="col-lg-6">
                             <div class="blog__details__author">
                                 <div class="blog__details__author__text">
                                     <h6>Admin</h6>
                                     <span>Admin</span>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="blog__details__widget">
                                 <li>Kategori : </li>
                                 <?php
                                    foreach ($kategori as $val) { ?>
                                     <ul>
                                         <li><span><?php $val->namaKat; ?></span></li>
                                     </ul>
                                 <?php } ?>
                                 <li><span>Tags:</span> Semua, Trending, Cooking, Healthy Food, Life Style</li>
                                 <div class="blog__details__social">
                                     <a href="#"><i class="fa fa-facebook"></i></a>
                                     <a href="#"><i class="fa fa-twitter"></i></a>
                                     <a href="#"><i class="fa fa-google-plus"></i></a>
                                     <a href="#"><i class="fa fa-linkedin"></i></a>
                                     <a href="#"><i class="fa fa-envelope"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Blog Details Section End -->

 <!-- Related Blog Section Begin -->
 <section class="related-blog spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title related-blog-title">
                     <h2>Berita Lainnya</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <?php
                $no = 1;
                foreach ($blog_all as $val) { ?>
                 <div class="col-lg-4 col-md-4 col-sm-6">
                     <div class="blog__item">
                         <div class="blog__item__pic">
                             <a href="<?php echo site_url('main/blog_details/' . $val->idBlog); ?>"><img src="<?php echo base_url('assets/blog/' . $val->cover_blog); ?>" width="auto" height="300" alt=""></a>
                         </div>
                         <div class="blog__item__text">
                             <ul>
                                 <li><i class="fa fa-calendar-o"></i> <?php echo $val->tanggal; ?></li>
                                 <!-- <li><i class="fa fa-comment-o"></i> 5</li> -->
                             </ul>
                             <h5><a href="<?php echo site_url('main/blog_details/' . $val->idBlog); ?>"><?php echo $val->judul_blog; ?></a></h5>
                             <!-- <p><?php echo $val->isi_blog; ?> </p> -->
                             <a href="<?php echo site_url('main/blog_details/' . $val->idBlog); ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </section>
 <!-- Related Blog Section End -->