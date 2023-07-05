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
                            <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> -->
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
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo site_url('/'); ?>">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <!-- <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th> -->
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <!-- <tbody>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="<?php echo base_url('assets/home/ogani-master/img/cart/cart-1.jpg'); ?>" alt="err">
                                    <h5>Vegetable’s Package</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $55.00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $110.00
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                        </tbody> -->
                        <tbody class="align-middle">
                            <?php foreach ($cartItems as $item) { ?>
                                <tr>
                                    <td class="align-middle">
                                        <img src="<?php echo base_url('assets/foto_produk/' . $item['image']); ?>" alt="" style="width: 60px;">
                                        <?php echo $item["name"]; ?>
                                    </td>
                                    <td class="align-middle">Rp. <?php echo $item["price"]; ?></td>
                                    <td class="align-middle">
                                        <?php echo $item["qty"]; ?>
                                    </td>
                                    <td class="align-middle">Rp. <?php echo $item["price"] * $item["qty"]; ?></td>
                                    <td class="align-middle"><a href="<?php echo site_url('main/delete_cart/' . $item["rowid"]); ?>"><button class="btn btn-sm btn-outline-danger"><i class="fa fa-times"></i></button></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo site_url('/'); ?>" class="site-btn cart-btn">Kembali ke Home</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Update Cart</a>
                    </div>
                </div> -->
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Masukan Kode Kupon</h5>
                        <form action="<?php echo site_url(); ?>">
                            <input type="text" placeholder="Masukkan kode kupon...">
                            <button type="submit" class="site-btn">Masukkan Kupon</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total <span>Rp. 0</span></li>
                    </ul>
                    <a href="<?php echo site_url('main/check_out'); ?>" class="primary-btn">CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->