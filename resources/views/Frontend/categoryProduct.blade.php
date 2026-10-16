@extends('frontend.master')
@section('title', 'Test Category | Nitto Mart')
@section('contant')
    <style>
        .cat-banner {
            text-align: left;
            padding: 26px 0
        }

        .cat-banner-inner {
            display: flex;
            align-items: center;
            gap: 18px
        }

        .cat-banner-img {
            width: 78px;
            height: 78px;
            border-radius: 50%;
            object-fit: cover;
            background: #fff;
            border: 4px solid rgba(255, 255, 255, .35)
        }

        .cat-banner-text {
            flex: 1
        }

        .cat-banner-text h1 {
            font-size: 28px
        }

        .cat-total {
            text-align: center;
            background: rgba(255, 255, 255, .16);
            border: 1px solid rgba(255, 255, 255, .3);
            border-radius: var(--r-md);
            padding: 8px 22px;
            line-height: 1.2
        }

        .cat-total small {
            display: block;
            font-size: 12px;
            opacity: .9
        }

        .cat-total b {
            font-size: 26px
        }

        .subcat-section {
            padding-top: 22px
        }

        .subcat-strip {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 4px 2px 10px;
            scrollbar-width: thin
        }

        .subcat-chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
            background: var(--card);
            color: var(--ink);
            font-weight: 600;
            font-size: 14px;
            padding: 7px 18px 7px 8px;
            border-radius: 50px;
            box-shadow: var(--shadow);
            transition: .2s
        }

        .subcat-chip i {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--brand-soft);
            color: var(--brand);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 13px
        }

        .subcat-chip img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover
        }

        .subcat-chip:hover,
        .subcat-chip.active {
            background: var(--brand);
            color: #fff
        }

        .subcat-chip.active i,
        .subcat-chip:hover i {
            background: rgba(255, 255, 255, .2);
            color: #fff
        }
        .shop-layout {
    display: grid;
    grid-template-columns: 270px 1fr;
    gap: 26px;
    align-items: start
}
/*=== Fillter ===*/
.shop-sidebar {
    background: var(--card);
    border-radius: var(--r-md);
    box-shadow: var(--shadow);
    padding: 6px 20px 20px;
    position: sticky;
    top: 130px
}

.sidebar-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 0;
    border-bottom: 1px solid var(--line)
}

.sidebar-head h4 {
    margin: 0;
    font-size: 18px;
    font-weight: 700
}

.sidebar-head h4 i {
    color: var(--brand);
    margin-right: 6px
}

.filter-close,
.filter-open {
    display: none
}

.filter-box {
    padding: 16px 0;
    border-bottom: 1px solid var(--line)
}

.filter-box h5 {
    font-size: 15px;
    font-weight: 700;
    margin: 0 0 12px
}

.filter-cats li {
    margin-bottom: 8px
}

.filter-cats label,
.f-radio {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    font-weight: 500;
    margin: 0 0 8px
}

.filter-cats label span {
    flex: 1
}

.filter-cats em {
    font-style: normal;
    font-size: 12px;
    color: var(--muted);
    background: var(--bg);
    padding: 1px 9px;
    border-radius: 20px
}

.shop-sidebar input[type=checkbox],
.shop-sidebar input[type=radio],
#priceRange {
    accent-color: var(--brand)
}

.shop-sidebar input[type=checkbox],
.shop-sidebar input[type=radio] {
    width: 17px;
    height: 17px
}

#priceRange {
    width: 100%
}

.price-vals {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    color: var(--muted);
    margin-top: 6px
}

.price-vals b {
    color: var(--brand)
}

.f-radio i {
    color: var(--accent);
    margin-right: 3px
}

.filter-reset {
    width: 100%;
    margin-top: 16px;
    border: 2px solid var(--brand);
    background: transparent;
    color: var(--brand);
    font-weight: 700;
    border-radius: 50px;
    padding: 9px;
    cursor: pointer;
    transition: .2s
}

.filter-reset:hover {
    background: var(--brand);
    color: #fff
}

.shop-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    flex-wrap: wrap;
    background: var(--card);
    border-radius: var(--r-md);
    box-shadow: var(--shadow);
    padding: 12px 18px;
    margin-bottom: 16px
}

.result-count {
    margin: 0;
    color: var(--muted);
    font-size: 14px
}

.result-count b {
    color: var(--ink)
}

.toolbar-right {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap
}

.shop-search {
    position: relative
}

.shop-search i {
    position: absolute;
    left: 13px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--muted);
    font-size: 13px
}

.shop-search input,
#shopSort {
    height: 40px;
    border: 2px solid var(--line);
    border-radius: 50px;
    background: var(--bg);
    color: var(--ink);
    padding: 0 16px;
    font-weight: 500;
    outline: 0;
    transition: .2s
}

.shop-search input {
    padding-left: 36px;
    width: 190px
}

.shop-search input:focus,
#shopSort:focus {
    border-color: var(--brand)
}

.view-toggle {
    display: flex;
    gap: 6px
}

.view-toggle button {
    width: 40px;
    height: 40px;
    border: 0;
    border-radius: 50%;
    background: var(--bg);
    color: var(--ink);
    cursor: pointer;
    transition: .2s
}

.view-toggle button.active,
.view-toggle button:hover {
    background: var(--brand);
    color: #fff
}

.active-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 14px
}

.active-filters:empty {
    display: none
}

.active-filters button {
    border: 0;
    background: var(--brand-soft);
    color: var(--brand-dark);
    font-weight: 600;
    font-size: 13px;
    padding: 5px 12px;
    border-radius: 50px;
    cursor: pointer
}

.active-filters button i {
    font-size: 10px;
    margin-left: 5px
}

.active-filters button:hover {
    background: #fdecec;
    color: var(--danger)
}

.shop-grid {
    grid-template-columns: repeat(auto-fill, minmax(205px, 1fr))
}

.shop-grid.list-view {
    grid-template-columns: 1fr
}

.shop-grid.list-view .product__item-outer {
    display: grid;
    grid-template-columns: 210px 1fr
}

.shop-grid.list-view .product__item-info-outer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 18px 24px
}

.shop-grid.list-view .product__item-name {
    font-size: 18px
}

.no-result {
    text-align: center;
    padding: 60px 20px;
    background: var(--card);
    border-radius: var(--r-md);
    box-shadow: var(--shadow)
}

.no-result[hidden] {
    display: none
}

.no-result i {
    font-size: 50px;
    color: var(--line)
}

.no-result h4 {
    margin: 12px 0 4px;
    font-weight: 700
}

.no-result p {
    color: var(--muted)
}

.no-result .filter-reset {
    width: auto;
    padding: 9px 26px
}

.shop-pagination {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin: 34px 0 10px
}

.shop-pagination button {
    min-width: 42px;
    height: 42px;
    border: 0;
    border-radius: 50%;
    background: var(--card);
    color: var(--ink);
    font-weight: 700;
    box-shadow: var(--shadow);
    cursor: pointer;
    transition: .2s
}

.shop-pagination button:hover:not(:disabled),
.shop-pagination button.active {
    background: var(--brand);
    color: #fff
}

.shop-pagination button:disabled {
    opacity: .4;
    cursor: not-allowed
}

.filter-overlay {
    display: none
}

@media (max-width:991px) {
    .shop-layout {
        grid-template-columns: 1fr
    }

    .filter-open {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 0;
        border-radius: 50px;
        background: var(--brand);
        color: #fff;
        font-weight: 700;
        padding: 9px 18px;
        cursor: pointer
    }

    .filter-close {
        display: block;
        width: 36px;
        height: 36px;
        border: 0;
        border-radius: 50%;
        background: var(--bg);
        color: var(--ink)
    }

    .shop-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        width: 310px;
        max-width: 88vw;
        overflow-y: auto;
        z-index: 2600;
        border-radius: 0;
        transform: translateX(-105%);
        transition: transform .35s
    }

    .shop-sidebar.open {
        transform: none
    }

    .filter-overlay {
        display: block;
        position: fixed;
        inset: 0;
        background: rgba(10, 20, 15, .55);
        opacity: 0;
        visibility: hidden;
        transition: .3s;
        z-index: 2500
    }

    .filter-overlay.open {
        opacity: 1;
        visibility: visible
    }
}

@media (max-width:767px) {
    .page-banner {
        padding: 24px 0
    }

    .page-banner h1 {
        font-size: 26px
    }

    .shop-toolbar {
        padding: 12px
    }

    .toolbar-right {
        width: 100%
    }

    .shop-search {
        flex: 1
    }

    .shop-search input {
        width: 100%
    }

    #shopSort {
        flex: 1 1 100%;
        order: 3
    }

    .shop-grid {
        grid-template-columns: repeat(2, 1fr)
    }

    .shop-grid.list-view {
        grid-template-columns: 1fr
    }

    .shop-grid.list-view .product__item-outer {
        grid-template-columns: 120px 1fr
    }

    .shop-grid.list-view .product__item-info-outer {
        padding: 10px 14px
    }

    .shop-grid.list-view .product__item-name {
        font-size: 15px
    }
}

        @media (max-width:767px) {
            .cat-banner-inner {
                flex-wrap: wrap
            }

            .cat-banner-img {
                width: 60px;
                height: 60px
            }

            .cat-banner-text h1 {
                font-size: 22px
            }

            .cat-total {
                padding: 6px 16px
            }

            .cat-total b {
                font-size: 20px
            }
        }
    </style>
    <section class="page-banner cat-banner">
        <div class="container">
            <div class="cat-banner-inner">
                <img src="{{ asset('frontend/assets/images/product.png') }}" alt="Test Category" class="cat-banner-img">
                <div class="cat-banner-text">
                    <h1>Test Category</h1>
                    <nav class="breadcrumb-nav" aria-label="breadcrumb"><a href="index.html">Home</a><i
                            class="fas fa-chevron-right"></i><a href="shop.html">Categories</a><i
                            class="fas fa-chevron-right"></i><span>Test Category</span></nav>
                </div>
                <div class="cat-total"><small>মোট পণ্য</small><b id="catTotal">২৪</b></div>
            </div>
        </div>
    </section>

    <section class="subcat-section">
        <div class="container">
            <div class="subcat-strip">
                <a href="category-product.html" class="subcat-chip active"><i class="fas fa-th-large"></i> সব পণ্য</a>
                <a href="sub-category-product.html" class="subcat-chip"><img
                        src="{{ asset('frontend/assets/images/product.png') }}" alt="">Test Subcategory 1</a>
                <a href="sub-category-product.html" class="subcat-chip"><img
                        src="{{ asset('frontend/assets/images/product.png') }}" alt="">Test Subcategory 2</a>
                <a href="sub-category-product.html" class="subcat-chip"><img
                        src="{{ asset('frontend/assets/images/product.png') }}" alt="">Test Subcategory 3</a>
                <a href="sub-category-product.html" class="subcat-chip"><img
                        src="{{ asset('frontend/assets/images/product.png') }}" alt="">Test Subcategory 4</a>
                <a href="sub-category-product.html" class="subcat-chip"><img
                        src="{{ asset('frontend/assets/images/product.png') }}" alt="">Test Subcategory 5</a>
            </div>
        </div>
    </section>

    <section class="shop-section">
        <div class="container">
            <div class="shop-layout">
                <aside class="shop-sidebar" id="shopSidebar">
                    <div class="sidebar-head">
                        <h4><i class="fas fa-sliders-h"></i> ফিল্টার</h4><button type="button" class="filter-close"
                            id="filterClose" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="filter-box">
                        <h5>সর্বোচ্চ দাম</h5>
                        <input type="range" id="priceRange" min="0" max="3000" step="50" value="3000"
                            aria-label="Max price">
                        <div class="price-vals"><span>৳ ০</span><b id="priceLabel">৳ ৩০০০</b></div>
                    </div>
                    <div class="filter-box">
                        <h5>রেটিং</h5>
                        <label class="f-radio"><input type="radio" name="rating" value="0" checked><span>সব
                                রেটিং</span></label>
                        <label class="f-radio"><input type="radio" name="rating" value="4"><span><i
                                    class="fas fa-star"></i> ৪ ও তার উপরে</span></label>
                        <label class="f-radio"><input type="radio" name="rating" value="4.5"><span><i
                                    class="fas fa-star"></i> ৪.৫ ও তার উপরে</span></label>
                    </div>
                    <div class="filter-box">
                        <h5>অফার</h5>
                        <label class="f-radio"><input type="checkbox" id="onlyDisc"><span>শুধু ছাড়ের পণ্য</span></label>
                    </div>
                    <button type="button" class="filter-reset" id="filterReset"><i class="fas fa-undo-alt"></i> ফিল্টার
                        রিসেট</button>
                </aside>

                <div class="shop-main">
                    <div class="shop-toolbar">
                        <button type="button" class="filter-open" id="filterOpen"><i class="fas fa-sliders-h"></i>
                            ফিল্টার</button>
                        <p class="result-count" id="resultCount"></p>
                        <div class="toolbar-right">
                            <div class="shop-search"><i class="fas fa-search"></i><input type="search" id="shopSearch"
                                    placeholder="পণ্য খুঁজুন..." aria-label="Search products"></div>
                            <select id="shopSort" aria-label="Sort">
                                <option value="default">ডিফল্ট সাজানো</option>
                                <option value="plh">দাম: কম থেকে বেশি</option>
                                <option value="phl">দাম: বেশি থেকে কম</option>
                                <option value="name">নাম: A–Z</option>
                                <option value="rating">সেরা রেটিং</option>
                                <option value="disc">সবচেয়ে বেশি ছাড়</option>
                            </select>
                            <div class="view-toggle">
                                <button type="button" class="active" data-view="grid" aria-label="Grid view"><i
                                        class="fas fa-th-large"></i></button>
                                <button type="button" data-view="list" aria-label="List view"><i
                                        class="fas fa-list"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="active-filters" id="activeFilters"></div>

                    <div class="product-grid shop-grid" id="shopGrid">
                        <div class="product__item-outer" data-name="cotton panjabi" data-cat="fashion" data-price="850"
                            data-old="1100" data-rating="5" data-order="0">
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
                        <div class="product__item-outer" data-name="wireless earbuds" data-cat="electronics"
                            data-price="1250" data-old="1800" data-rating="4.5" data-order="1">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Wireless Earbuds"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
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
                        <div class="product__item-outer" data-name="leather wallet" data-cat="accessories"
                            data-price="450" data-old="600" data-rating="4" data-order="2">
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
                        <div class="product__item-outer" data-name="water bottle" data-cat="home" data-price="320"
                            data-old="0" data-rating="4.5" data-order="3">
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
                        <div class="product__item-outer" data-name="kids t-shirt" data-cat="kids" data-price="280"
                            data-old="350" data-rating="5" data-order="4">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Kids T-Shirt"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span
                                        class="product__type-badge-inner">Regular</span></div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Kids T-Shirt</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 280</span></div>
                                    <div class="product__item-discount-price"><del>৳ 350</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="smart watch" data-cat="electronics"
                            data-price="2200" data-old="2900" data-rating="4" data-order="5">
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
                        <div class="product__item-outer" data-name="running shoes" data-cat="fashion" data-price="1850"
                            data-old="2400" data-rating="5" data-order="6">
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
                        <div class="product__item-outer" data-name="travel backpack" data-cat="accessories"
                            data-price="1150" data-old="1500" data-rating="4.5" data-order="7">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Travel Backpack"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
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
                        <div class="product__item-outer" data-name="desk lamp" data-cat="home" data-price="690"
                            data-old="0" data-rating="4" data-order="8">
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
                        <div class="product__item-outer" data-name="baby toy set" data-cat="kids" data-price="650"
                            data-old="850" data-rating="4.5" data-order="9">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Baby Toy Set"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span
                                        class="product__type-badge-inner">Regular</span></div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Baby Toy Set</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 650</span></div>
                                    <div class="product__item-discount-price"><del>৳ 850</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="bluetooth speaker" data-cat="electronics"
                            data-price="1450" data-old="1950" data-rating="5" data-order="10">
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
                        <div class="product__item-outer" data-name="denim jacket" data-cat="fashion" data-price="1650"
                            data-old="2100" data-rating="4" data-order="11">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Denim Jacket"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                                </div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Denim Jacket</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 1650</span></div>
                                    <div class="product__item-discount-price"><del>৳ 2100</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="sunglasses" data-cat="accessories" data-price="480"
                            data-old="650" data-rating="5" data-order="12">
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
                        <div class="product__item-outer" data-name="cotton bedsheet" data-cat="home" data-price="1250"
                            data-old="1600" data-rating="4.5" data-order="13">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Cotton Bedsheet"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span
                                        class="product__type-badge-inner">Trending</span></div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Cotton Bedsheet</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 1250</span></div>
                                    <div class="product__item-discount-price"><del>৳ 1600</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="school bag" data-cat="kids" data-price="720"
                            data-old="950" data-rating="4" data-order="14">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="School Bag"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span
                                        class="product__type-badge-inner">Regular</span></div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">School Bag</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 720</span></div>
                                    <div class="product__item-discount-price"><del>৳ 950</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="power bank 10000mah" data-cat="electronics"
                            data-price="1350" data-old="1700" data-rating="4.5" data-order="15">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Power Bank 10000mAh"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
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
                        <div class="product__item-outer" data-name="formal shirt" data-cat="fashion" data-price="750"
                            data-old="950" data-rating="5" data-order="16">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Formal Shirt"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                                </div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Formal Shirt</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 750</span></div>
                                    <div class="product__item-discount-price"><del>৳ 950</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="ladies handbag" data-cat="accessories"
                            data-price="1350" data-old="1750" data-rating="4" data-order="17">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Ladies Handbag"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                                </div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Ladies Handbag</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 1350</span></div>
                                    <div class="product__item-discount-price"><del>৳ 1750</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="ceramic mug set" data-cat="home" data-price="420"
                            data-old="550" data-rating="5" data-order="18">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Ceramic Mug Set"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span
                                        class="product__type-badge-inner">Trending</span></div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Ceramic Mug Set</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 420</span></div>
                                    <div class="product__item-discount-price"><del>৳ 550</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="gaming mouse" data-cat="electronics"
                            data-price="890" data-old="1200" data-rating="4.5" data-order="19">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Gaming Mouse"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span
                                        class="product__type-badge-inner">Regular</span></div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Gaming Mouse</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 890</span></div>
                                    <div class="product__item-discount-price"><del>৳ 1200</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="silk saree" data-cat="fashion" data-price="2750"
                            data-old="3200" data-rating="4" data-order="20">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Silk Saree"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span>
                                </div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Silk Saree</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 2750</span></div>
                                    <div class="product__item-discount-price"><del>৳ 3200</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="wall clock" data-cat="home" data-price="560"
                            data-old="720" data-rating="4.5" data-order="21">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Wall Clock"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span>
                                </div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Wall Clock</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 560</span></div>
                                    <div class="product__item-discount-price"><del>৳ 720</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="usb hub" data-cat="electronics" data-price="540"
                            data-old="0" data-rating="5" data-order="22">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="USB Hub"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span>
                                </div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">USB Hub</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 540</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="product__item-outer" data-name="leather belt" data-cat="fashion" data-price="380"
                            data-old="0" data-rating="4" data-order="23">
                            <div class="product__item-image-outer">
                                <a href="details.html" class="product__item-image-inner"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Leather Belt"
                                        loading="lazy" /></a>
                                <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                        class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                                <div class="product__type-badge-outer"><span
                                        class="product__type-badge-inner">Trending</span></div>
                            </div>
                            <div class="product__item-info-outer">
                                <a href="details.html" class="product__item-name">Leather Belt</a>
                                <div class="product__item-price-outer">
                                    <div class="product__item-regular-price"><span>৳ 380</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="no-result" id="noResult" hidden>
                        <i class="fas fa-box-open"></i>
                        <h4>কোনো পণ্য পাওয়া যায়নি</h4>
                        <p>ফিল্টার বা সার্চ বদলে আবার চেষ্টা করুন।</p>
                        <button type="button" class="filter-reset" id="noResultReset">ফিল্টার রিসেট করুন</button>
                    </div>
                    <nav class="shop-pagination" id="pagination" aria-label="Pagination"></nav>
                </div>
            </div>
        </div>
    </section>
    <div class="filter-overlay" id="filterOverlay"></div>
    <script src="{{ asset('frontend/assets/js/shop.js') }}"></script>
        <script>
        /* shop.js – শপ পেজের ফিল্টার, সর্ট, সার্চ, ভিউ বদল ও পেজিনেশন */
(function () {
  var grid = document.getElementById('shopGrid');
  if (!grid) return;
  var bn = function (n) { return String(n).replace(/\d/g, function (d) { return '০১২৩৪৫৬৭৮৯'[d]; }); };
  var $ = function (id) { return document.getElementById(id); };
  var cards = [].slice.call(grid.children);
  var PER = 12, page = 1, MAXP = 3000;
  var catNames = {};
  [].forEach.call(document.querySelectorAll('.f-cat'), function (c) { catNames[c.value] = c.nextElementSibling.textContent; });
  var st = { cats: [], max: MAXP, rating: 0, disc: false, q: '', sort: 'default' };

  var num = function (c, k) { return parseFloat(c.getAttribute('data-' + k)) || 0; };
  var disc = function (c) { var o = num(c, 'old'), p = num(c, 'price'); return o > p ? (o - p) / o : 0; };
  var ok = function (c) {
    if (st.cats.length && st.cats.indexOf(c.getAttribute('data-cat')) < 0) return false;
    if (num(c, 'price') > st.max) return false;
    if (num(c, 'rating') < st.rating) return false;
    if (st.disc && !disc(c)) return false;
    if (st.q && c.getAttribute('data-name').indexOf(st.q) < 0) return false;
    return true;
  };
  var sorters = {
    default: function (a, b) { return num(a, 'order') - num(b, 'order'); },
    plh: function (a, b) { return num(a, 'price') - num(b, 'price'); },
    phl: function (a, b) { return num(b, 'price') - num(a, 'price'); },
    name: function (a, b) { return a.getAttribute('data-name') < b.getAttribute('data-name') ? -1 : 1; },
    rating: function (a, b) { return num(b, 'rating') - num(a, 'rating'); },
    disc: function (a, b) { return disc(b) - disc(a); }
  };

  function chips() {
    var h = '';
    st.cats.forEach(function (c) { h += '<button type="button" data-rm="cat:' + c + '">' + catNames[c] + ' <i class="fas fa-times"></i></button>'; });
    if (st.max < MAXP) h += '<button type="button" data-rm="price">৳ ' + bn(st.max) + ' পর্যন্ত <i class="fas fa-times"></i></button>';
    if (st.rating) h += '<button type="button" data-rm="rating">' + bn(st.rating) + '★+ <i class="fas fa-times"></i></button>';
    if (st.disc) h += '<button type="button" data-rm="disc">ছাড়ের পণ্য <i class="fas fa-times"></i></button>';
    if (st.q) h += '<button type="button" data-rm="q">"' + st.q.replace(/[<>&"]/g, '') + '" <i class="fas fa-times"></i></button>';
    $('activeFilters').innerHTML = h;
  }

  function pager(total) {
    var pages = Math.ceil(total / PER), nav = $('pagination');
    if (pages <= 1) { nav.innerHTML = ''; return; }
    var h = '<button type="button" data-p="' + (page - 1) + '"' + (page === 1 ? ' disabled' : '') + ' aria-label="Prev"><i class="fas fa-chevron-left"></i></button>';
    for (var i = 1; i <= pages; i++) h += '<button type="button" data-p="' + i + '"' + (i === page ? ' class="active"' : '') + '>' + bn(i) + '</button>';
    h += '<button type="button" data-p="' + (page + 1) + '"' + (page === pages ? ' disabled' : '') + ' aria-label="Next"><i class="fas fa-chevron-right"></i></button>';
    nav.innerHTML = h;
  }

  function render() {
    var list = cards.filter(ok).sort(sorters[st.sort]);
    var pages = Math.max(1, Math.ceil(list.length / PER));
    if (page > pages) page = pages;
    cards.forEach(function (c) { c.style.display = 'none'; });
    list.forEach(function (c) { grid.appendChild(c); });
    cards.forEach(function (c) { if (list.indexOf(c) < 0) grid.appendChild(c); });
    var s = (page - 1) * PER, shown = list.slice(s, s + PER);
    shown.forEach(function (c) { c.style.display = ''; });
    $('resultCount').innerHTML = list.length ? '<b>' + bn(list.length) + '</b>টি পণ্যের মধ্যে ' + bn(s + 1) + '–' + bn(s + shown.length) + ' দেখানো হচ্ছে' : '';
    $('noResult').hidden = list.length > 0;
    grid.style.display = list.length ? '' : 'none';
    pager(list.length); chips();
  }
  function reset() {
    st = { cats: [], max: MAXP, rating: 0, disc: false, q: '', sort: 'default' }; page = 1;
    [].forEach.call(document.querySelectorAll('.f-cat'), function (c) { c.checked = false; });
    $('priceRange').value = MAXP; $('priceLabel').textContent = '৳ ' + bn(MAXP);
    document.querySelector('input[name=rating][value="0"]').checked = true;
    $('onlyDisc').checked = false; $('shopSearch').value = ''; $('shopSort').value = 'default';
    render();
  }

  [].forEach.call(document.querySelectorAll('.f-cat'), function (c) {
    c.onchange = function () {
      st.cats = [].filter.call(document.querySelectorAll('.f-cat'), function (x) { return x.checked; }).map(function (x) { return x.value; });
      page = 1; render();
    };
  });
  $('priceRange').oninput = function () { st.max = +this.value; $('priceLabel').textContent = '৳ ' + bn(st.max); page = 1; render(); };
  [].forEach.call(document.querySelectorAll('input[name=rating]'), function (r) { r.onchange = function () { st.rating = +this.value; page = 1; render(); }; });
  $('onlyDisc').onchange = function () { st.disc = this.checked; page = 1; render(); };
  $('shopSearch').oninput = function () { st.q = this.value.trim().toLowerCase(); page = 1; render(); };
  $('shopSort').onchange = function () { st.sort = this.value; page = 1; render(); };
  $('filterReset').onclick = reset; $('noResultReset').onclick = reset;

  [].forEach.call(document.querySelectorAll('.view-toggle button'), function (b) {
    b.onclick = function () {
      [].forEach.call(document.querySelectorAll('.view-toggle button'), function (x) { x.classList.toggle('active', x === b); });
      grid.classList.toggle('list-view', b.getAttribute('data-view') === 'list');
    };
  });

  $('pagination').onclick = function (e) {
    var b = e.target.closest('button[data-p]'); if (!b || b.disabled) return;
    page = +b.getAttribute('data-p'); render();
    window.scrollTo({ top: grid.getBoundingClientRect().top + window.scrollY - 140, behavior: 'smooth' });
  };
  $('activeFilters').onclick = function (e) {
    var b = e.target.closest('button[data-rm]'); if (!b) return;
    var k = b.getAttribute('data-rm');
    if (k.indexOf('cat:') === 0) { var v = k.slice(4); [].forEach.call(document.querySelectorAll('.f-cat'), function (c) { if (c.value === v) { c.checked = false; c.onchange(); } }); return; }
    if (k === 'price') { $('priceRange').value = MAXP; $('priceRange').oninput(); }
    if (k === 'rating') { document.querySelector('input[name=rating][value="0"]').checked = true; st.rating = 0; page = 1; render(); }
    if (k === 'disc') { $('onlyDisc').checked = false; st.disc = false; page = 1; render(); }
    if (k === 'q') { $('shopSearch').value = ''; st.q = ''; page = 1; render(); }
  };

  /* মোবাইলে ফিল্টার ড্রয়ার */
  var sb = $('shopSidebar'), ov = $('filterOverlay');
  var openF = function () { sb.classList.add('open'); ov.classList.add('open'); };
  var closeF = function () { sb.classList.remove('open'); ov.classList.remove('open'); };
  $('filterOpen').onclick = openF; $('filterClose').onclick = closeF; ov.onclick = closeF;

  render();
})();
    </script>
@endsection
