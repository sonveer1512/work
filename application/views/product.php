<?php include('includes/header.php'); ?>
        <main class="main-content">

            <!--== Start Page Header Area Wrapper ==-->
            <section class="page-header-area" data-bg-color="#F1FAEE">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="page-header-content">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                                <h2 class="page-header-title">All Trending Products</h2>
                            </div>
                        </div>
                        <div class="col-sm-4 d-sm-flex justify-content-end align-items-end">
                            <h5 class="showing-pagination-results">Showing 09 Results</h5>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area section-space pt-md-max-0">
                <div class="container">
                    <div class="row flex-lg-row-reverse">
                        <div class="col-lg-8">
                            <!--== Start Shop Top Bar Area Wrapper ==-->
                            <div class="shop-top-bar-area top-bar-two mb-10">
                                <div class="shop-top-bar">
                                    <select class="select-shoing">
                                        <option data-display="Trending">Trending</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Best Selling</option>
                                        <option value="5">Price: low to high</option>
                                        <option value="6">Price: high to low</option>
                                    </select>

                                    <div class="select-on-sale d-flex d-md-none">
                                        <h5>On Sale :</h5>
                                        <select class="select-on-sale-form">
                                            <option selected>Yes</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>

                                    <div class="select-price-range">
                                        <h4 class="title">Pricing</h4>
                                        <div class="select-price-range-slider">
                                            <div class="slider-range" id="slider-range"></div>
                                            <div class="slider-labels">
                                                <span id="slider-range-value1"></span>
                                                <span>-</span>
                                                <span id="slider-range-value2"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="select-on-sale d-none d-md-flex">
                                        <h5>On Sale :</h5>
                                        <select class="select-on-sale-form">
                                            <option selected>Yes</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--== End Shop Top Bar Area Wrapper ==-->
                            <div class="row mb-n6">
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/13.png" width="300" height="286" alt="Image-HasTech">
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
                                            <h4 class="title"><a href="shop-single-product.html">Casual Prince</a></h4>
                                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/19.jpg" width="300" height="286" alt="Image-HasTech">
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
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/20.jpg" width="300" height="286" alt="Image-HasTech">
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
                                            <h4 class="title"><a href="shop-single-product.html">Slightly jackets</a></h4>
                                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/16.jpg" width="300" height="286" alt="Image-HasTech">
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
                                            <h4 class="title"><a href="shop-single-product.html">Red Perspiciatis</a></h4>
                                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/21.jpg" width="300" height="286" alt="Image-HasTech">
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
                                            <h4 class="title"><a href="shop-single-product.html">Style Modern Dress</a></h4>
                                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/22.jpg" width="300" height="286" alt="Image-HasTech">
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
                                            <h4 class="title"><a href="shop-single-product.html">Star Women pants</a></h4>
                                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/23.jpg" width="300" height="286" alt="Image-HasTech">
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
                                            <h4 class="title"><a href="shop-single-product.html">Flower Print dress</a></h4>
                                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                <div class="col-sm-6 col-lg-6 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-thumb" href="shop-single-product.html">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/17.jpg" width="300" height="286" alt="Image-HasTech">
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
                                            <h4 class="title"><a href="shop-single-product.html">Winter Sprit</a></h4>
                                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                <div class="col-12 mb-6">
                                    <nav class="pagination-area">
                                        <ul class="page-numbers">
                                            <li>
                                                <a class="page-number active" href="shop-left-sidebar.html">1</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="shop-left-sidebar.html">2</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="shop-left-sidebar.html">3</a>
                                            </li>
                                            <li>
                                                <a class="page-number next" href="shop-left-sidebar.html">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar-area mt-10 mt-lg-n1 pe-lg-10">
                                <div class="widget-item">
                                    <form class="widget-search-box" action="#" method="post">
                                        <input type="text" id="search2" placeholder="Search">
                                        <button type="button" class="btn-src">
                                            <img src="<?= base_url()?>/assets/assets/images/icons/search.png" width="16" height="16" alt="Icon">
                                        </button>
                                    </form>
                                </div>
                                <div class="widget-item pt-3">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="widget-categories">
                                        <a href="shop.html">Fashion</a>
                                        <a href="shop.html">Clothing</a>
                                        <a href="shop.html">Men Jacket</a>
                                        <a href="shop.html">Women Shoe</a>
                                        <a href="shop.html">KID</a>
                                        <a href="shop.html">Lifestyle</a>
                                    </div>
                                </div>
                                <div class="widget-item pt-3">
                                    <h3 class="widget-title">Popular Product</h3>
                                    <a href="shop.html" class="widget-product-item">
                                        <div class="thumb">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/w1.jpg" width="85" height="85" alt="Image">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Hot Summer Fashion for Women new arrive</h4>
                                            <span class="product-price">$650.00</span>
                                            <span class="btn-text">View More</span>
                                        </div>
                                    </a>
                                    <a href="shop.html" class="widget-product-item">
                                        <div class="thumb">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/w2.jpg" width="85" height="85" alt="Image">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">My Favorite White Sneakers From Splurge</h4>
                                            <span class="product-price">$650.00</span>
                                            <span class="btn-text">View More</span>
                                        </div>
                                    </a>
                                    <a href="shop.html" class="widget-product-item">
                                        <div class="thumb">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/w3.jpg" width="85" height="85" alt="Image">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Style Modern Dress Meta Dress Slightly Hoody</h4>
                                            <span class="product-price">$650.00</span>
                                            <span class="btn-text">View More</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-item pt-2">
                                    <h3 class="widget-title">Top Sale</h3>
                                    <a href="shop.html" class="widget-product-item">
                                        <div class="thumb">
                                            <img src="<?= base_url()?>/assets/assets/images/shop/w4.jpg" width="85" height="85" alt="Image">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Literature Classical Ruffled Classic Modern Dress</h4>
                                            <span class="product-price">$650.00</span>
                                            <span class="btn-text">View More</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="widget-item mb-10">
                                    <h3 class="widget-title mb-3">Newsletter</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                                    <form class="widget-newsletter-box" action="#" method="post">
                                        <input type="text" id="search3" placeholder="Enter your email">
                                        <button type="button" class="btn-src">
                                            <img src="<?= base_url()?>/assets/assets/images/icons/mail.png" width="16" height="16" alt="Icon">
                                        </button>
                                    </form>
                                </div>
                                <div class="widget-item mb-0">
                                    <a class="widget-banner product-banner-item" href="shop.html">
                                        <img class="w-100" src="<?= base_url()?>/assets/assets/images/shop/banner/w1.jpg" width="320" height="320" alt="Image-HasTech">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

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

     <?php include('includes/footer.php'); ?>