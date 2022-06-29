<?php include('includes/header.php')?>
        <main class="main-content">

            <!--== Start Hero Area Wrapper ==-->
            <section class="hero-slider-area position-relative">
                <div class="swiper hero-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide hero-slide-item">
                            <div class="container">
                                <div class="row align-items-center position-relative">
                                    <div class="col-12 col-sm-6">
                                        <div class="hero-slide-content">
                                            <div class="hero-slide-shape-img"><img src="<?= base_url()?>/assets/assets/images/slider/shape1.png" width="180" height="180" alt="Image"></div>
                                            <h4 class="hero-slide-sub-title">HURRY UP!</h4>
                                            <h1 class="hero-slide-title">Let’s find your fashion outfit.</h1>
                                            <p class="hero-slide-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                                            <div class="hero-slide-meta">
                                                <a class="btn btn-border-primary" href="shop.html">Shop Now</a>
                                                <a class="ht-popup-video" data-fancybox data-type="iframe" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                                    <i class="fa fa-play icon"></i>
                                                    <span>Play Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="hero-slide-thumb">
                                            <img src="<?= base_url()?>/assets/assets/images/slider/slider1.png" width="555" height="550" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-social">
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener">fb</a>
                                    <a href="https://www.twitter.com/" target="_blank" rel="noopener">tw</a>
                                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener">in</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide hero-slide-item">
                            <div class="container">
                                <div class="row align-items-center position-relative">
                                    <div class="col-12 col-sm-6">
                                        <div class="hero-slide-content">
                                            <div class="hero-slide-shape-img"><img src="<?= base_url()?>/assets/assets/images/slider/shape1.png" width="180" height="180" alt="Image"></div>
                                            <h4 class="hero-slide-sub-title">HURRY UP!</h4>
                                            <h2 class="hero-slide-title">Let’s find your fashion outfit.</h2>
                                            <p class="hero-slide-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                                            <div class="hero-slide-meta">
                                                <a class="btn btn-border-primary" href="shop.html">Shop Now</a>
                                                <a class="ht-popup-video" data-fancybox data-type="iframe" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                                    <i class="fa fa-play icon"></i>
                                                    <span>Play Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="hero-slide-thumb">
                                            <img src="<?= base_url()?>/assets/assets/images/slider/slider1-man2.png" width="555" height="550" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-social">
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener">fb</a>
                                    <a href="https://www.twitter.com/" target="_blank" rel="noopener">tw</a>
                                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener">in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== Add Pagination ==-->
                    <div class="hero-slider-pagination"></div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->

            <!--== Start Product Banner Area Wrapper ==-->
            <section class="product-banner-area section-top-space">
                <div class="container">
                    <div class="swiper banner-slider-container">
                        <div class="swiper-wrapper">
                            <a href="shop.html" class="swiper-slide product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/01.png" width="370" height="294" alt="Image-HasTech">
                            </a>
                            <a href="shop.html" class="swiper-slide product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/02.png" width="370" height="294" alt="Image-HasTech">
                            </a>
                            <a href="shop.html" class="swiper-slide product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/03.png" width="370" height="294" alt="Image-HasTech">
                            </a>
                        </div>
                    </div>
                </div>
                <h6 class="visually-hidden">Banner Section</h6>
            </section>
            <!--== End Product Banner Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area section-space">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title">Best Products</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="row mb-n6">
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-item-border">
                                <a class="product-thumb" href="<?=base_url('product_details'); ?>">
                                    <img src="<?= base_url()?>/assets/assets/images/shop/1.png" width="300" height="286" alt="Image-HasTech">
                                </a>
                                <span class="badges">New</span>
                                <div class="product-action">
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="fa fa-exchange"></i>
                                    </button>
                                </div>
                                <div class="product-info">
                                    <h4 class="title"><a href="shop-single-product.html">Literature Classical</a></h4>
                                    <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                    <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </div>
                            </div>
                            <!--== End prPduct Item ==-->
                        </div>
                        
                        
                            <!--== End prPduct Item ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Product Banner Area Wrapper ==-->
            <section class="product-banner-area">
                <div class="container">
                    <div class="row mb-n6 mb-sm-n7">
                        <div class="col-sm-12 col-md-6 mb-6">
                            <!--== Start Product Banner Item ==-->
                            <a href="shop.html" class="product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/d1.png" width="570" height="266" alt="Image-HasTech">
                            </a>
                            <!--== End Product Banner Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-6">
                            <!--== Start Product Banner Item ==-->
                            <a href="shop.html" class="product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/d2.png" width="570" height="266" alt="Image-HasTech">
                            </a>
                            <!--== End Product Banner Item ==-->
                        </div>
                    </div>
                </div>
                <h6 class="visually-hidden">Product Banner Area</h6>
            </section>
            <!--== End Product Banner Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area section-space">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title">Tranding</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    
                    
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-item-border">
                                <a class="product-thumb" href="shop-single-product.html">
                                    <img src="<?= base_url()?>/assets/assets/images/shop/9.png" width="300" height="286" alt="Image-HasTech">
                                </a>
                                <span class="badges">New</span>
                                <div class="product-action">
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="fa fa-exchange"></i>
                                    </button>
                                </div>
                                <div class="product-info">
                                    <h4 class="title"><a href="shop-single-product.html">Fit Wool Suit</a></h4>
                                    <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                    <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </div>
                            </div>
                            <!--== End prPduct Item ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Product Banner Area Wrapper ==-->
            <section class="product-banner-area">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-sm-6 col-md-3 mb-6">
                            <!--== Start Product Banner Item ==-->
                            <a href="shop.html" class="product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/c1.jpg" width="270" height="419" alt="Image-HasTech">
                            </a>
                            <!--== End Product Banner Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <!--== Start Product Banner Item ==-->
                            <a href="shop.html" class="product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/c2.jpg" width="270" height="419" alt="Image-HasTech">
                            </a>
                            <!--== End Product Banner Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <!--== Start Product Banner Item ==-->
                            <a href="shop.html" class="product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/c3.png" width="270" height="419" alt="Image-HasTech">
                            </a>
                            <!--== End Product Banner Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <!--== Start Product Banner Item ==-->
                            <a href="shop.html" class="product-banner-item">
                                <img class="icon" src="<?= base_url()?>/assets/assets/images/shop/banner/c4.jpg" width="270" height="419" alt="Image-HasTech">
                            </a>
                            <!--== End Product Banner Item ==-->
                        </div>
                    </div>
                </div>
                <h6 class="visually-hidden">Product Banner Area</h6>
            </section>
            <!--== End Product Banner Area Wrapper ==-->

            <!--== Start Blog Area Wrapper ==-->
            <section class="blog-area section-space">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title">Latest Blog</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="row mb-n8">
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.html" class="thumb">
                                    <img class="w-100" src="<?= base_url()?>/assets/assets/images/blog/1.png" width="570" height="320" alt="Image-HasTech">
                                </a>
                                <div class="content">
                                    <a class="post-category" href="blog.html">Fashion</a>
                                    <h4 class="title"><a href="blog-details.html">Hot Summer Fashion for Women new collections arrives of Lorem Ipsum available.</a></h4>
                                    <ul class="meta">
                                        <li class="author-info"><img class="author-thumb" src="<?= base_url()?>/assets/assets/images/blog/author01.png" alt="Image-HasTech"> <a href="blog.html">Arry twentyk</a></li>
                                        <li class="post-date"><a href="blog.html">13 Feb 2021</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.html" class="thumb">
                                    <img class="w-100" src="<?= base_url()?>/assets/assets/images/blog/2.png" width="570" height="320" alt="Image-HasTech">
                                </a>
                                <div class="content">
                                    <a class="post-category" href="blog.html">Fashion</a>
                                    <h4 class="title"><a href="blog-details.html">My Favorite White Sneakers From Splurge To Save passages available amet suite.</a></h4>
                                    <ul class="meta">
                                        <li class="author-info"><img class="author-thumb" src="<?= base_url()?>/assets/assets/images/blog/author02.png" alt="Image-HasTech"> <a href="blog.html">Arry twentyk</a></li>
                                        <li class="post-date"><a href="blog.html">13 Feb 2021</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Blog Area Wrapper ==-->

            <!--== Start News Letter Area Wrapper ==-->
            <section class="news-letter-area section-bottom-space">
                <div class="container">
                    <div class="newsletter-content-wrap" data-bg-img="<?= base_url()?>/assets/assets/images/photos/bg1.jpg">
                        <div class="newsletter-content">
                            <h2 class="title">Connect with us | merier</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="newsletter-form">
                                <form>
                                    <input type="email" class="form-control" placeholder="Email address">
                                    <button class="btn-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End News Letter Area Wrapper ==-->

        </main>

       <?php include('includes/footer.php');?>