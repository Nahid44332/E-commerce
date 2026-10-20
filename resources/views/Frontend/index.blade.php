@extends('Frontend.master')
@section('contant')
      <!-- Home Slider -->
        <section class="home-slider-section">
            <div class="container">
                <div class="home__slider-sec-wrap">
                    <div class="home__category-outer">
                        @foreach ($categoris as $category)
                            <ul class="header__category-list">
                            <li class="header__category-list-item item-has-submenu">
                                <a href="{{url('/category-product')}}" class="header__category-list-item-link">
                                    <img src="{{ asset($category->image) }}" alt="category">
                                    {{$category->name}}
                                </a>
                                <ul class="header__nav-item-category-submenu">
                                    <li class="header__category-submenu-item">
                                        <a href="sub-category-product.html"
                                            class="header__category-submenu-item-link">Test Subcategory</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @endforeach
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
                            <a href="{{url('/product-details')}}" class="product__item-image-inner"><img
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
@endsection