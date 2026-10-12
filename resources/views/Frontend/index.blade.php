<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nitto Mart | Online Shop</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome/css/all.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/slick-slider/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- responsive.css বন্ধ: নতুন style.css এ রেসপন্সিভ কোড আছে -->
    <!-- features.css এখন style.css এর ভেতরেই আছে -->
</head>

<body>
    <div class="topbar" aria-label="অফার ঘোষণা">
        <div class="marquee-track">
            <div class="marquee-group"><span><i class="fas fa-truck"></i> সারা বাংলাদেশে ক্যাশ অন
                    ডেলিভারি</span><span><i class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি
                    ডেলিভারি</span><span><i class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                        class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i
                        class="fas fa-phone-alt"></i> অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span><span><i
                        class="fas fa-truck"></i> সারা বাংলাদেশে ক্যাশ অন ডেলিভারি</span><span><i
                        class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি ডেলিভারি</span><span><i
                        class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                        class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i
                        class="fas fa-phone-alt"></i> অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span></div>
            <div class="marquee-group"><span><i class="fas fa-truck"></i> সারা বাংলাদেশে ক্যাশ অন
                    ডেলিভারি</span><span><i class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি
                    ডেলিভারি</span><span><i class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                        class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i
                        class="fas fa-phone-alt"></i> অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span><span><i
                        class="fas fa-truck"></i> সারা বাংলাদেশে ক্যাশ অন ডেলিভারি</span><span><i
                        class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি ডেলিভারি</span><span><i
                        class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                        class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i
                        class="fas fa-phone-alt"></i> অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span></div>
        </div>
    </div>

    <header class="header-section">
        <div class="container">
            <div class="header-top-wrapper">
                <a href="index.html" class="brand-logo-outer">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Nitto Mart">
                </a>
                <div class="search-form-outer">
                    <form action="" method="GET" class="form-group search-form">
                        <input type="text" name="search" class="form-control" placeholder="পণ্য খুঁজুন..."
                            aria-label="Search">
                        <button type="submit" aria-label="Search"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="header-top-right-outer">
                    <div class="res-search"><i class="fas fa-search"></i></div>
                    <button class="theme-toggle" aria-label="Dark mode"><i class="fas fa-moon"></i></button>
                    <div class="header-top-right-item dropdown">
                        <div class="header-top-right-item-link">
                            <span class="icon-outer">
                                <i class="fas fa-cart-plus"></i>
                                <span class="count-number">1</span>
                            </span>
                            Cart
                        </div>
                        <div class="cart-items-wrapper">
                            <div class="cart-items-outer">
                                <div class="cart-item-outer">
                                    <a href="#" class="cart-product-image"><img
                                            src="{{ asset('frontend/assets/images/product.png') }}" alt="product"></a>
                                    <div class="cart-product-name-price">
                                        <a href="#" class="product-name">Test Product</a>
                                        <span class="product-price">৳ 300</span>
                                    </div>
                                    <div class="cart-item-delete">
                                        <a href="#" class="delete-btn" aria-label="Remove"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="shopping-cart-footer">
                                <div class="shopping-cart-total">
                                    <h4>Total <span>৳ 300</span></h4>
                                </div>
                                <div class="shopping-cart-button">
                                    <a href="view-products.html" class="view-cart-link">View cart</a>
                                    <a href="checkout.html" class="checkout-link">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom-wrapper">
            <div class="container">
                <div class="header__bottom-outer">
                    <div class="header__category-outer">
                        <div class="header__category-items-wrapper">
                            <div class="header__category-icon-outer">
                                <i class="fas fa-bars"></i>
                                <span>Categories</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="header__category-items-outer">
                                <ul class="header__category-list">
                                    <li class="header__category-list-item item-has-submenu">
                                        <a href="category-product.html" class="header__category-list-item-link">
                                            <img src="{{ asset('frontend/assets/images/product.png') }}"
                                                alt="category">
                                            Test Category
                                        </a>
                                        <ul class="header__nav-item-category-submenu">
                                            <li class="header__category-submenu-item">
                                                <a href="sub-category-product.html"
                                                    class="header__category-submenu-item-link">Test Subcategory</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header__dynamic-page-wrapper">
                        <ul class="dynamic-page-list">
                            <li class="dynamic-page-list-item"><a href="index.html"
                                    class="dynamic-page-list-item-link active">Home</a></li>
                            <li class="dynamic-page-list-item"><a href="shop.html"
                                    class="dynamic-page-list-item-link">Shop</a></li>
                            <li class="dynamic-page-list-item"><a href="return-process.html"
                                    class="dynamic-page-list-item-link">Return Process</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Home Slider -->
        <section class="home-slider-section">
            <div class="container">
                <div class="home__slider-sec-wrap">
                    <div class="home__category-outer">
                        <ul class="header__category-list">
                            <li class="header__category-list-item item-has-submenu">
                                <a href="category-product.html" class="header__category-list-item-link">
                                    <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category">
                                    Test Category
                                </a>
                                <ul class="header__nav-item-category-submenu">
                                    <li class="header__category-submenu-item">
                                        <a href="sub-category-product.html"
                                            class="header__category-submenu-item-link">Test Subcategory</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="home__slider-items-wrapper hero">
                        <div class="hero-track">
                            <div class="home__slider-item-outer"><img
                                    src="{{ asset('frontend/assets/images/slider.jpg') }}" alt="Offer"
                                    class="home__slider-item-image"></div>
                            <div class="home__slider-item-outer"><img
                                    src="{{ asset('frontend/assets/images/slider.jpg') }}" alt="Offer"
                                    class="home__slider-item-image"></div>
                            <div class="home__slider-item-outer"><img
                                    src="{{ asset('frontend/assets/images/slider.jpg') }}" alt="Offer"
                                    class="home__slider-item-image"></div>
                        </div>
                        <button class="hero-arrow hero-prev" aria-label="Previous"><i
                                class="fas fa-chevron-left"></i></button>
                        <button class="hero-arrow hero-next" aria-label="Next"><i
                                class="fas fa-chevron-right"></i></button>
                        <div class="hero-dots"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="features-section">
            <div class="container">
                <div class="features-wrapper">
                    <div class="feature-item"><i class="fas fa-truck"></i>
                        <div>
                            <h6>দ্রুত ডেলিভারি</h6>
                            <p>২–৩ দিনের মধ্যে</p>
                        </div>
                    </div>
                    <div class="feature-item"><i class="fas fa-hand-holding-usd"></i>
                        <div>
                            <h6>ক্যাশ অন ডেলিভারি</h6>
                            <p>পণ্য হাতে পেয়ে পেমেন্ট</p>
                        </div>
                    </div>
                    <div class="feature-item"><i class="fas fa-undo-alt"></i>
                        <div>
                            <h6>সহজ রিটার্ন</h6>
                            <p>৭ দিনের মধ্যে</p>
                        </div>
                    </div>
                    <div class="feature-item"><i class="fas fa-headset"></i>
                        <div>
                            <h6>সাপোর্ট</h6>
                            <p>সকাল ১০টা – রাত ১০টা</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories -->
        <section class="categoris-slider-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">Categories</h2>
                </div>
                <div class="categoris-items-wrapper owl-carousel">
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                    <a href="#" class="categoris-item">
                        <img src="{{ asset('frontend/assets/images/product.png') }}" alt="category"
                            loading="lazy" />
                        <h6 class="categoris-name">Test Category</h6>
                        <span class="items-number">1 items</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Banner -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="banner-item-outer">
                            <img src="{{ asset('frontend/assets/images/banner.jpeg') }}" alt="banner"
                                loading="lazy" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="banner-item-outer">
                            <img src="{{ asset('frontend/assets/images/banner.jpeg') }}" alt="banner"
                                loading="lazy" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="banner-item-outer">
                            <img src="{{ asset('frontend/assets/images/banner.jpeg') }}" alt="banner"
                                loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products -->
        <section class="flash-section">
            <div class="container">
                <div class="flash-box">
                    <div>
                        <h3><i class="fas fa-bolt"></i> ফ্ল্যাশ সেল</h3>
                        <p>অফার শেষ হতে বাকি</p>
                    </div>
                    <div class="flash-timer">
                        <div><b id="cd-h">০০</b><small>ঘণ্টা</small></div>
                        <div><b id="cd-m">০০</b><small>মিনিট</small></div>
                        <div><b id="cd-s">০০</b><small>সেকেন্ড</small></div>
                    </div>
                    <a href="type-products.html" class="flash-btn">এখনই কিনুন</a>
                </div>
            </div>
        </section>
        <section class="product-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">Hot Products</h2>
                    <a href="type-products.html" class="product-view-all-btn">View All</a>
                </div>
                <div class="product-grid">
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Cotton Panjabi"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Cotton Panjabi</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 850</span></div>
                                <div class="product__item-discount-price"><del>৳ 1100</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Leather Wallet"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Leather Wallet</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 450</span></div>
                                <div class="product__item-discount-price"><del>৳ 600</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Wireless Earbuds"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Wireless Earbuds</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1250</span></div>
                                <div class="product__item-discount-price"><del>৳ 1800</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Smart Watch"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Smart Watch</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 2200</span></div>
                                <div class="product__item-discount-price"><del>৳ 2900</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Water Bottle"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Water Bottle</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 320</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Travel Backpack"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Travel Backpack</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1150</span></div>
                                <div class="product__item-discount-price"><del>৳ 1500</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Sunglasses"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Sunglasses</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 480</span></div>
                                <div class="product__item-discount-price"><del>৳ 650</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Bluetooth Speaker"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Bluetooth Speaker</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1450</span></div>
                                <div class="product__item-discount-price"><del>৳ 1950</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Kids T-Shirt"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Kids T-Shirt</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 280</span></div>
                                <div class="product__item-discount-price"><del>৳ 350</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Desk Lamp"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Desk Lamp</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 690</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">New Arrival</h2>
                    <a href="type-products.html" class="product-view-all-btn">View All</a>
                </div>
                <div class="product-grid">
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Smart Watch"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Smart Watch</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 2200</span></div>
                                <div class="product__item-discount-price"><del>৳ 2900</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Water Bottle"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Water Bottle</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 320</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Travel Backpack"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Travel Backpack</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1150</span></div>
                                <div class="product__item-discount-price"><del>৳ 1500</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Sunglasses"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Sunglasses</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 480</span></div>
                                <div class="product__item-discount-price"><del>৳ 650</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Bluetooth Speaker"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Bluetooth Speaker</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1450</span></div>
                                <div class="product__item-discount-price"><del>৳ 1950</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Kids T-Shirt"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Kids T-Shirt</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 280</span></div>
                                <div class="product__item-discount-price"><del>৳ 350</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Desk Lamp"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Desk Lamp</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 690</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Power Bank 10000mAh"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Power Bank 10000mAh</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1350</span></div>
                                <div class="product__item-discount-price"><del>৳ 1700</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Running Shoes"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Running Shoes</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1850</span></div>
                                <div class="product__item-discount-price"><del>৳ 2400</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Cotton Panjabi"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Cotton Panjabi</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 850</span></div>
                                <div class="product__item-discount-price"><del>৳ 1100</del></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">Best Sellers</h2>
                    <a href="type-products.html" class="product-view-all-btn">View All</a>
                </div>
                <div class="product-grid">
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Sunglasses"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Sunglasses</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 480</span></div>
                                <div class="product__item-discount-price"><del>৳ 650</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Bluetooth Speaker"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Bluetooth Speaker</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1450</span></div>
                                <div class="product__item-discount-price"><del>৳ 1950</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Kids T-Shirt"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Kids T-Shirt</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 280</span></div>
                                <div class="product__item-discount-price"><del>৳ 350</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Desk Lamp"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Desk Lamp</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 690</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Power Bank 10000mAh"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Power Bank 10000mAh</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1350</span></div>
                                <div class="product__item-discount-price"><del>৳ 1700</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Running Shoes"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Running Shoes</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1850</span></div>
                                <div class="product__item-discount-price"><del>৳ 2400</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Cotton Panjabi"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Cotton Panjabi</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 850</span></div>
                                <div class="product__item-discount-price"><del>৳ 1100</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Leather Wallet"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Leather Wallet</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 450</span></div>
                                <div class="product__item-discount-price"><del>৳ 600</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Wireless Earbuds"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Wireless Earbuds</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1250</span></div>
                                <div class="product__item-discount-price"><del>৳ 1800</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Smart Watch"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                            </div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Smart Watch</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 2200</span></div>
                                <div class="product__item-discount-price"><del>৳ 2900</del></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">Regular Products</h2>
                    <a href="type-products.html" class="product-view-all-btn">View All</a>
                </div>
                <div class="product-grid">
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Desk Lamp"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Desk Lamp</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 690</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Power Bank 10000mAh"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Power Bank 10000mAh</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1350</span></div>
                                <div class="product__item-discount-price"><del>৳ 1700</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Running Shoes"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Running Shoes</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1850</span></div>
                                <div class="product__item-discount-price"><del>৳ 2400</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Cotton Panjabi"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Cotton Panjabi</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 850</span></div>
                                <div class="product__item-discount-price"><del>৳ 1100</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Leather Wallet"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Leather Wallet</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 450</span></div>
                                <div class="product__item-discount-price"><del>৳ 600</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Wireless Earbuds"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Wireless Earbuds</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1250</span></div>
                                <div class="product__item-discount-price"><del>৳ 1800</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Smart Watch"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Smart Watch</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 2200</span></div>
                                <div class="product__item-discount-price"><del>৳ 2900</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Water Bottle"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Water Bottle</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 320</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Travel Backpack"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Travel Backpack</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1150</span></div>
                                <div class="product__item-discount-price"><del>৳ 1500</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Sunglasses"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Regular</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Sunglasses</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 480</span></div>
                                <div class="product__item-discount-price"><del>৳ 650</del></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">Trending Now</h2>
                    <a href="type-products.html" class="product-view-all-btn">View All</a>
                </div>
                <div class="product-grid">
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Leather Wallet"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Leather Wallet</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 450</span></div>
                                <div class="product__item-discount-price"><del>৳ 600</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Wireless Earbuds"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Wireless Earbuds</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1250</span></div>
                                <div class="product__item-discount-price"><del>৳ 1800</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Smart Watch"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Smart Watch</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 2200</span></div>
                                <div class="product__item-discount-price"><del>৳ 2900</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Water Bottle"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Water Bottle</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 320</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Travel Backpack"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Travel Backpack</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1150</span></div>
                                <div class="product__item-discount-price"><del>৳ 1500</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Sunglasses"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Sunglasses</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 480</span></div>
                                <div class="product__item-discount-price"><del>৳ 650</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Bluetooth Speaker"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Bluetooth Speaker</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1450</span></div>
                                <div class="product__item-discount-price"><del>৳ 1950</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Kids T-Shirt"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Kids T-Shirt</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 280</span></div>
                                <div class="product__item-discount-price"><del>৳ 350</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Desk Lamp"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Desk Lamp</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 690</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}"
                                    alt="Power Bank 10000mAh" loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Trending</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Power Bank 10000mAh</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1350</span></div>
                                <div class="product__item-discount-price"><del>৳ 1700</del></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">Discount Products</h2>
                    <a href="type-products.html" class="product-view-all-btn">View All</a>
                </div>
                <div class="product-grid">
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Water Bottle"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Water Bottle</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 320</span></div>
                                <div class="product__item-discount-price"><del>৳ 400</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Travel Backpack"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Travel Backpack</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1150</span></div>
                                <div class="product__item-discount-price"><del>৳ 1500</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Sunglasses"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Sunglasses</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 480</span></div>
                                <div class="product__item-discount-price"><del>৳ 650</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Bluetooth Speaker"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Bluetooth Speaker</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1450</span></div>
                                <div class="product__item-discount-price"><del>৳ 1950</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Kids T-Shirt"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Kids T-Shirt</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 280</span></div>
                                <div class="product__item-discount-price"><del>৳ 350</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Desk Lamp"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Desk Lamp</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 690</span></div>
                                <div class="product__item-discount-price"><del>৳ 860</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}"
                                    alt="Power Bank 10000mAh" loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Power Bank 10000mAh</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1350</span></div>
                                <div class="product__item-discount-price"><del>৳ 1700</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Running Shoes"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Running Shoes</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 1850</span></div>
                                <div class="product__item-discount-price"><del>৳ 2400</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Cotton Panjabi"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Cotton Panjabi</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 850</span></div>
                                <div class="product__item-discount-price"><del>৳ 1100</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__item-outer">
                        <div class="product__item-image-outer">
                            <a href="details.html" class="product__item-image-inner"><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Leather Wallet"
                                    loading="lazy" /></a>
                            <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                    class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                            <div class="product__type-badge-outer"><span
                                    class="product__type-badge-inner">Discount</span></div>
                        </div>
                        <div class="product__item-info-outer">
                            <a href="details.html" class="product__item-name">Leather Wallet</a>
                            <div class="product__item-price-outer">
                                <div class="product__item-regular-price"><span>৳ 450</span></div>
                                <div class="product__item-discount-price"><del>৳ 600</del></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews-section">
            <div class="container">
                <div class="section-title-outer">
                    <h2 class="title">ক্রেতাদের মতামত</h2>
                </div>
                <div class="review-track">
                    <div class="review-card">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>পণ্যের মান খুব ভালো, ডেলিভারি দ্রুত পেয়েছি। আবার কিনবো।</p>
                        <div class="review-user"><i class="fas fa-user"></i>
                            <div><b>রাকিব হাসান</b><small>ঢাকা</small></div>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>ছবির মতোই পণ্য পেয়েছি। দামও সাশ্রয়ী ছিল।</p>
                        <div class="review-user"><i class="fas fa-user"></i>
                            <div><b>সুমাইয়া আক্তার</b><small>গাজীপুর</small></div>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>ক্যাশ অন ডেলিভারি থাকায় ভরসা করে অর্ডার করেছি, ঝামেলা হয়নি।</p>
                        <div class="review-user"><i class="fas fa-user"></i>
                            <div><b>মাহমুদুল করিম</b><small>চট্টগ্রাম</small></div>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>সাপোর্ট টিম খুব সহযোগিতা করেছে। ধন্যবাদ নিত্য মার্ট।</p>
                        <div class="review-user"><i class="fas fa-user"></i>
                            <div><b>তানভীর আহমেদ</b><small>সিলেট</small></div>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>প্যাকেজিং চমৎকার ছিল, কোনো ক্ষতি হয়নি।</p>
                        <div class="review-user"><i class="fas fa-user"></i>
                            <div><b>নুসরাত জাহান</b><small>খুলনা</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newsletter-section">
            <div class="container">
                <div class="newsletter-box">
                    <div>
                        <h3>অফারের খবর সবার আগে পান</h3>
                        <p>ইমেইল দিন, নতুন ডিসকাউন্ট জানিয়ে দেব।</p>
                    </div>
                    <form class="newsletter-form" id="newsletterForm"><input type="email" required
                            placeholder="আপনার ইমেইল" aria-label="Email"><button
                            type="submit">সাবস্ক্রাইব</button></form>
                    <p class="newsletter-msg" id="nlMsg"></p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-section">
        <div class="footer__top-wrapper">
            <div class="container">
                <a href="index.html" class="footer__brand-logo-outer">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" class="footer__brand-logo-inner"
                        alt="Nitto Mart" />
                </a>
            </div>
        </div>
        <div class="footer__main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__item-wrap">
                            <h4 class="footer__item-title">Policy</h4>
                            <ul class="footer__list">
                                <li class="footer__list-item"><a href="privacy-policy.html"
                                        class="footer__list-item-link">Privacy Policy</a></li>
                                <li class="footer__list-item"><a href="#"
                                        class="footer__list-item-link">Terms &amp; Conditions</a></li>
                                <li class="footer__list-item"><a href="#"
                                        class="footer__list-item-link">Refund Policy</a></li>
                                <li class="footer__list-item"><a href="#"
                                        class="footer__list-item-link">Payment Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__item-wrap">
                            <h4 class="footer__item-title">Contacts</h4>
                            <ul class="footer__contact-info-list">
                                <li class="footer__contact-info-list-item">
                                    <p class="footer__contact-info-list-item-label">Address:</p>
                                    <p class="footer__contact-info-list-item-value">Uttara, Dhaka</p>
                                </li>
                                <li class="footer__contact-info-list-item">
                                    <p class="footer__contact-info-list-item-label">Phone:</p>
                                    <a href="tel:0123456857"
                                        class="footer__contact-info-list-item-value">0123456857</a>
                                </li>
                                <li class="footer__contact-info-list-item">
                                    <p class="footer__contact-info-list-item-label">Email:</p>
                                    <a href="mailto:info@gmail.com"
                                        class="footer__contact-info-list-item-value">info@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__item-wrap">
                            <h4 class="footer__item-title">Others</h4>
                            <ul class="footer__list">
                                <li class="footer__list-item"><a href="#"
                                        class="footer__list-item-link">About Us</a></li>
                                <li class="footer__list-item"><a href="#"
                                        class="footer__list-item-link">Contact Us</a></li>
                                <li class="footer__list-item"><a href="#"
                                        class="footer__list-item-link">Blog</a></li>
                                <li class="footer__list-item"><a href="#"
                                        class="footer__list-item-link">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__item-wrap">
                            <h4 class="footer__item-title">Follow Us</h4>
                            <ul class="footer__social-list">
                                <li class="footer__social-list-item"><a href="#"
                                        class="footer__social-list-item-lisk" aria-label="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-list-item"><a href="#"
                                        class="footer__social-list-item-lisk" aria-label="Twitter"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="footer__social-list-item"><a href="#"
                                        class="footer__social-list-item-lisk" aria-label="Instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="footer__social-list-item"><a href="#"
                                        class="footer__social-list-item-lisk" aria-label="YouTube"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom-wrapper">
            <div class="container">
                <p class="footer__bottom-text">© 2024, All rights reserved <strong class="text-brand">Nitto
                        Mart</strong></p>
            </div>
        </div>
    </footer>

    <div class="float-stack">
        <a href="https://wa.me/8801XXXXXXXXX" target="_blank" rel="noopener" class="fl-wa"
            aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        <a href="https://m.me/yourpage" target="_blank" rel="noopener" class="fl-ms"
            aria-label="Messenger"><i class="fab fa-facebook-messenger"></i></a>
        <button id="toTop" aria-label="Back to top"><i class="fas fa-chevron-up"></i></button>
    </div>
    <nav class="mobile-nav">
        <a href="index.html" class="active"><i class="fas fa-home"></i>Home</a>
        <a href="shop.html"><i class="fas fa-th-large"></i>Categories</a>
        <a href="view-products.html"><i class="fas fa-shopping-cart"></i>Cart<span
                class="count-number">1</span></a>
        <a href="#"><i class="fas fa-user"></i>Account</a>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/assets/plugins/slick-slider/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script>
        new WOW().init();
        $('.res-search').on('click', function() {
            $('.search-form-outer').toggleClass('show');
        });
        $('.categoris-items-wrapper').owlCarousel({
            loop: false,
            margin: 12,
            nav: true,
            dots: false,
            navText: ['‹', '›'],
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 6
                }
            }
        });
    </script>
    <script>
        (function() {
            var h = document.getElementById('cd-h'),
                m = document.getElementById('cd-m'),
                c = document.getElementById('cd-s');
            if (!h) return;
            var bn = function(n) {
                return String(n).replace(/[0-9]/g, function(d) {
                    return '০১২৩৪৫৬৭৮৯'.charAt(d);
                });
            };
            var p = function(x) {
                return bn((x < 10 ? '0' : '') + x);
            };

            function tick() {
                var n = new Date(),
                    e = new Date(n);
                e.setHours(23, 59, 59, 999);
                var t = Math.floor((e - n) / 1000);
                h.textContent = p(Math.floor(t / 3600));
                m.textContent = p(Math.floor(t % 3600 / 60));
                c.textContent = p(t % 60);
            }
            tick();
            setInterval(tick, 1000);
        })();
    </script>
    <script src="{{ asset('frontend/assets/js/features.js') }}"></script>
</body>

</html>
