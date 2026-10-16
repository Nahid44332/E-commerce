@extends('frontend.master')
@section('title', 'Test Product | Nitto Mart')
@section('contant')
    @verbatim
        <style>
            /* =========================================================
           PRODUCT DETAILS PAGE
           ========================================================= */
            .pd-crumb {
                background: var(--card);
                border-bottom: 1px solid var(--line);
                padding: 12px 0
            }

            .pd-crumb .breadcrumb-nav {
                color: var(--muted);
                font-size: 14px
            }

            .pd-crumb .breadcrumb-nav span {
                color: var(--ink);
                font-weight: 600
            }

            .pd-section {
                padding: 26px 0 10px
            }

            .pd-layout {
                display: grid;
                grid-template-columns: 1fr 290px;
                gap: 24px;
                align-items: start
            }

            .pd-top {
                display: grid;
                grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
                gap: 30px;
                background: var(--card);
                border-radius: var(--r-lg);
                box-shadow: var(--shadow);
                padding: 26px
            }

            .pd-main {
                position: relative;
                overflow: hidden;
                border-radius: var(--r-md);
                background: #f1f3f5;
                cursor: zoom-in
            }

            .pd-main img {
                width: 100%;
                aspect-ratio: 1/1;
                object-fit: cover;
                transition: transform .3s
            }

            .pd-main:hover img {
                transform: scale(1.8)
            }

            .pd-badge {
                position: absolute;
                top: 14px;
                left: 14px;
                z-index: 2;
                background: var(--danger);
                color: #fff;
                font-weight: 700;
                font-size: 13px;
                padding: 4px 14px;
                border-radius: 50px
            }

            .pd-thumbs {
                display: flex;
                gap: 10px;
                margin-top: 12px
            }

            .pd-thumb {
                width: 70px;
                height: 70px;
                padding: 0;
                border: 2px solid var(--line);
                border-radius: var(--r-sm);
                overflow: hidden;
                background: #f1f3f5;
                cursor: pointer;
                transition: .2s
            }

            .pd-thumb img {
                width: 100%;
                height: 100%;
                object-fit: cover
            }

            .pd-thumb.active,
            .pd-thumb:hover {
                border-color: var(--brand)
            }

            .pd-title {
                font-size: 26px;
                font-weight: 700;
                margin: 0 0 8px
            }

            .pd-meta {
                display: flex;
                align-items: center;
                gap: 10px;
                flex-wrap: wrap;
                font-size: 14px;
                color: var(--muted);
                margin-bottom: 12px
            }

            .pd-stars {
                color: var(--accent);
                font-size: 13px
            }

            .pd-sep {
                width: 1px;
                height: 14px;
                background: var(--line)
            }

            .pd-price {
                display: flex;
                align-items: baseline;
                gap: 12px;
                flex-wrap: wrap;
                margin-bottom: 6px
            }

            .pd-price b {
                font-size: 34px;
                color: var(--brand)
            }

            .pd-price del {
                font-size: 18px;
                color: var(--muted)
            }

            .pd-save {
                background: #fdecec;
                color: var(--danger);
                font-weight: 700;
                font-size: 13px;
                padding: 3px 12px;
                border-radius: 50px
            }

            .pd-stock {
                color: var(--brand);
                font-weight: 700;
                margin: 0 0 16px
            }

            .pd-stock small {
                color: var(--danger);
                font-weight: 600
            }

            .pd-opt-group {
                margin-bottom: 14px
            }

            .pd-opt-group h6 {
                font-size: 14px;
                font-weight: 600;
                margin: 0 0 8px;
                color: var(--muted)
            }

            .pd-opt-group h6 b {
                color: var(--ink)
            }

            .pd-opt {
                min-width: 48px;
                border: 2px solid var(--line);
                background: var(--card);
                color: var(--ink);
                font-weight: 600;
                border-radius: var(--r-sm);
                padding: 7px 16px;
                margin: 0 8px 6px 0;
                cursor: pointer;
                transition: .2s
            }

            .pd-opt:hover {
                border-color: var(--brand)
            }

            .pd-opt.active {
                border-color: var(--brand);
                background: var(--brand-soft);
                color: var(--brand-dark)
            }

            .pd-buy {
                display: flex;
                align-items: center;
                gap: 10px;
                flex-wrap: wrap;
                margin: 18px 0 12px
            }

            .pd-qty {
                display: inline-flex;
                align-items: center;
                border: 2px solid var(--line);
                border-radius: 50px;
                overflow: hidden
            }

            .pd-qty button {
                width: 40px;
                height: 44px;
                border: 0;
                background: transparent;
                color: var(--ink);
                cursor: pointer
            }

            .pd-qty button:hover {
                background: var(--brand-soft)
            }

            .pd-qty input {
                width: 46px;
                height: 44px;
                border: 0;
                text-align: center;
                font-weight: 700;
                background: transparent;
                color: var(--ink);
                outline: 0;
                -moz-appearance: textfield
            }

            .pd-qty input::-webkit-outer-spin-button,
            .pd-qty input::-webkit-inner-spin-button {
                -webkit-appearance: none
            }

            .pd-btn {
                border: 0;
                border-radius: 50px;
                font-weight: 700;
                padding: 12px 24px;
                color: #fff;
                cursor: pointer;
                transition: .2s
            }

            .pd-btn.primary {
                background: var(--brand)
            }

            .pd-btn.primary:hover {
                background: var(--brand-dark)
            }

            .pd-btn.accent {
                background: var(--accent)
            }

            .pd-btn.accent:hover {
                filter: brightness(.92)
            }

            .pd-heart {
                width: 46px;
                height: 46px;
                border: 2px solid var(--line);
                border-radius: 50%;
                background: var(--card);
                color: var(--danger);
                font-size: 18px;
                cursor: pointer;
                transition: .2s
            }

            .pd-heart:hover,
            .pd-heart.active {
                background: var(--danger);
                border-color: var(--danger);
                color: #fff
            }

            .pd-call {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: var(--brand-soft);
                color: var(--brand-dark);
                font-weight: 700;
                padding: 10px 22px;
                border-radius: 50px
            }

            .pd-call:hover {
                background: var(--brand);
                color: #fff
            }

            .pd-trust {
                display: flex;
                gap: 16px;
                flex-wrap: wrap;
                margin-top: 18px;
                padding-top: 16px;
                border-top: 1px solid var(--line);
                font-size: 13px;
                font-weight: 600;
                color: var(--muted)
            }

            .pd-trust i {
                color: var(--brand);
                margin-right: 5px
            }

            .pd-tabs-box {
                background: var(--card);
                border-radius: var(--r-lg);
                box-shadow: var(--shadow);
                padding: 22px 26px;
                margin-top: 24px
            }

            .pd-tabs {
                display: flex;
                gap: 8px;
                flex-wrap: wrap;
                margin-bottom: 18px
            }

            .pd-tabs button {
                border: 0;
                background: var(--bg);
                color: var(--ink);
                font-weight: 700;
                border-radius: var(--r-sm);
                padding: 10px 20px;
                cursor: pointer;
                transition: .2s
            }

            .pd-tabs button.active,
            .pd-tabs button:hover {
                background: var(--brand);
                color: #fff
            }

            .pd-panel {
                display: none
            }

            .pd-panel.active {
                display: block
            }

            .pd-spec {
                width: 100%;
                margin-top: 14px;
                border-collapse: collapse
            }

            .pd-spec th,
            .pd-spec td {
                padding: 10px 14px;
                border: 1px solid var(--line);
                text-align: left
            }

            .pd-spec th {
                width: 34%;
                background: var(--bg);
                font-weight: 600
            }

            .pd-rv-summary {
                display: grid;
                grid-template-columns: 150px 1fr;
                gap: 24px;
                align-items: center;
                margin-bottom: 20px
            }

            .pd-rv-score {
                text-align: center
            }

            .pd-rv-score b {
                display: block;
                font-size: 44px;
                line-height: 1;
                color: var(--brand)
            }

            .pd-rv-score small {
                display: block;
                color: var(--muted)
            }

            .pd-bar {
                display: grid;
                grid-template-columns: 34px 1fr 40px;
                align-items: center;
                gap: 10px;
                font-size: 13px;
                margin-bottom: 5px
            }

            .pd-bar div {
                height: 8px;
                border-radius: 8px;
                background: var(--line);
                overflow: hidden
            }

            .pd-bar i {
                display: block;
                height: 100%;
                background: var(--accent)
            }

            .pd-bar em {
                font-style: normal;
                color: var(--muted)
            }

            .pd-review {
                padding: 16px 0;
                border-top: 1px solid var(--line)
            }

            .pd-rv-head {
                display: flex;
                align-items: center;
                gap: 12px;
                margin-bottom: 6px
            }

            .pd-rv-head>div {
                flex: 1;
                line-height: 1.3
            }

            .pd-rv-head small {
                display: block;
                color: var(--muted)
            }

            .pd-avatar {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: var(--brand-soft);
                color: var(--brand);
                display: flex;
                align-items: center;
                justify-content: center
            }

            .pd-rv-stars {
                color: var(--accent);
                font-size: 12px
            }

            .pd-review p {
                margin: 0;
                color: var(--muted)
            }

            .pd-rv-form {
                margin-top: 18px;
                padding-top: 18px;
                border-top: 1px solid var(--line);
                display: grid;
                gap: 10px
            }

            .pd-rv-form h5 {
                margin: 0;
                font-weight: 700
            }

            .pd-rv-form input,
            .pd-rv-form textarea {
                border: 2px solid var(--line);
                border-radius: var(--r-sm);
                background: var(--bg);
                color: var(--ink);
                padding: 10px 14px;
                outline: 0;
                width: 100%
            }

            .pd-rv-form input:focus,
            .pd-rv-form textarea:focus {
                border-color: var(--brand)
            }

            .pd-rv-form .pd-btn {
                justify-self: start
            }

            .pd-rate-input button {
                border: 0;
                background: transparent;
                color: var(--accent);
                font-size: 22px;
                cursor: pointer;
                padding: 0 3px
            }

            .pd-policy li {
                display: flex;
                gap: 14px;
                padding: 14px 0;
                border-bottom: 1px solid var(--line)
            }

            .pd-policy li:last-child {
                border: 0
            }

            .pd-policy i {
                width: 44px;
                height: 44px;
                border-radius: 50%;
                background: var(--brand-soft);
                color: var(--brand);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0
            }

            .pd-policy p {
                margin: 2px 0 0;
                color: var(--muted)
            }

            .pd-side {
                position: sticky;
                top: 130px;
                display: grid;
                gap: 18px
            }

            .pd-side-box {
                background: var(--card);
                border-radius: var(--r-lg);
                box-shadow: var(--shadow);
                padding: 20px
            }

            .pd-side-box h4 {
                font-size: 19px;
                font-weight: 700;
                margin: 0 0 14px;
                padding-bottom: 10px;
                border-bottom: 2px solid var(--brand);
                display: inline-block
            }

            .pd-cats a {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 9px 10px;
                border-radius: var(--r-sm);
                font-weight: 600;
                transition: .2s
            }

            .pd-cats a:hover {
                background: var(--brand-soft)
            }

            .pd-cats img {
                width: 38px;
                height: 38px;
                border-radius: 8px;
                object-fit: cover
            }

            .pd-cats span {
                flex: 1
            }

            .pd-cats em {
                font-style: normal;
                font-size: 12px;
                color: var(--muted);
                background: var(--bg);
                padding: 1px 9px;
                border-radius: 20px
            }

            .pd-help {
                text-align: center;
                background: linear-gradient(135deg, var(--brand-dark), var(--brand));
                color: #fff;
                border-radius: var(--r-lg);
                padding: 24px 18px
            }

            .pd-help i {
                font-size: 30px;
                color: var(--accent)
            }

            .pd-help h5 {
                margin: 8px 0 2px;
                font-weight: 700
            }

            .pd-help p {
                margin: 0 0 10px;
                opacity: .9
            }

            .pd-help a {
                display: inline-block;
                background: #fff;
                color: var(--brand-dark);
                font-weight: 700;
                padding: 8px 22px;
                border-radius: 50px
            }

            @media (max-width:991px) {
                .pd-layout {
                    grid-template-columns: 1fr
                }

                .pd-side {
                    position: static;
                    grid-template-columns: 1fr 1fr
                }
            }

            @media (max-width:767px) {
                .pd-top {
                    grid-template-columns: 1fr;
                    padding: 16px;
                    gap: 18px
                }

                .pd-title {
                    font-size: 21px
                }

                .pd-price b {
                    font-size: 28px
                }

                .pd-main:hover img {
                    transform: none
                }

                .pd-tabs-box {
                    padding: 16px
                }

                .pd-rv-summary {
                    grid-template-columns: 1fr
                }

                .pd-side {
                    grid-template-columns: 1fr
                }

                .pd-buy .pd-btn {
                    flex: 1
                }
            }
        </style>
    @endverbatim
    <div class="pd-crumb">
        <div class="container">
            <nav class="breadcrumb-nav" aria-label="breadcrumb"><a href="index.html">Home</a><i
                    class="fas fa-chevron-right"></i><a href="category-product.html">Test Category</a><i
                    class="fas fa-chevron-right"></i><span>Test Product</span></nav>
        </div>
    </div>

    <section class="pd-section">
        <div class="container">
            <div class="pd-layout">
                <div class="pd-main-col">
                    <div class="pd-top">
                        <div class="pd-gallery">
                            <div class="pd-main" id="pdMain"><span class="pd-badge">-২৫%</span><img
                                    src="{{ asset('frontend/assets/images/product.png') }}" alt="Test Product"
                                    id="pdMainImg"></div>
                            <div class="pd-thumbs"><button type="button" class="pd-thumb active"
                                    data-src="{{ asset('frontend/assets/images/product.png') }}"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}"
                                        alt="Thumb 1"></button><button type="button" class="pd-thumb"
                                    data-src="{{ asset('frontend/assets/images/product.png') }}"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}"
                                        alt="Thumb 2"></button><button type="button" class="pd-thumb"
                                    data-src="{{ asset('frontend/assets/images/product.png') }}"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}"
                                        alt="Thumb 3"></button><button type="button" class="pd-thumb"
                                    data-src="{{ asset('frontend/assets/images/product.png') }}"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt="Thumb 4"></button>
                            </div>
                        </div>
                        <div class="pd-info">
                            <h1 class="pd-title" id="pdTitle">Test Product</h1>
                            <div class="pd-meta">
                                <span class="pd-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i></span><span>৪.৮ (১২টি রিভিউ)</span><span
                                    class="pd-sep"></span><span>SKU: NM-1001</span>
                            </div>
                            <div class="pd-price"><b id="pdPrice">৳ 300</b><del>৳ 400</del><span class="pd-save">৳ ১০০
                                    সাশ্রয়</span></div>
                            <p class="pd-stock"><i class="fas fa-check-circle"></i> স্টকে আছে <small>(মাত্র ১২টি
                                    বাকি)</small></p>

                            <div class="pd-opt-group" data-group="color">
                                <h6>রঙ: <b>Red</b></h6>
                                <button type="button" class="pd-opt active" data-v="">None</button>
                                <button type="button" class="pd-opt" data-v="Red">Red</button>
                                <button type="button" class="pd-opt" data-v="Green">Green</button>
                                <button type="button" class="pd-opt" data-v="Black">Black</button>
                            </div>
                            <div class="pd-opt-group" data-group="size">
                                <h6>সাইজ: <b>M</b></h6>
                                <button type="button" class="pd-opt active" data-v="">None</button>
                                <button type="button" class="pd-opt" data-v="M">M</button>
                                <button type="button" class="pd-opt" data-v="L">L</button>
                                <button type="button" class="pd-opt" data-v="XL">XL</button>
                                <button type="button" class="pd-opt" data-v="XXL">XXL</button>
                            </div>
                            <div class="pd-opt-group" data-group="size">
                                <h6>কেজি: <b>M</b></h6>
                                <button type="button" class="pd-opt active" data-v="">None</button>
                                <button type="button" class="pd-opt" data-v="500 Gram">500 Gram</button>
                                <button type="button" class="pd-opt" data-v="1Kg">1 Kg</button>
                                <button type="button" class="pd-opt" data-v="2Kg">2 Kg</button>
                            </div>

                            <div class="pd-buy">
                                <div class="pd-qty"><button type="button" id="qtyMinus" aria-label="Minus"><i
                                            class="fas fa-minus"></i></button><input type="number" id="qtyInput"
                                        value="1" min="1" max="12" aria-label="Quantity"><button
                                        type="button" id="qtyPlus" aria-label="Plus"><i class="fas fa-plus"></i></button>
                                </div>
                                <button type="button" class="pd-btn primary" id="btnCart"><i
                                        class="fas fa-shopping-cart"></i> Add to Cart</button>
                                <button type="button" class="pd-btn accent" id="btnQuick"><i
                                        class="fas fa-shipping-fast"></i> Quick Order</button>
                                <button type="button" class="pd-heart" id="btnWish" aria-label="Wishlist"><i
                                        class="far fa-heart"></i></button>
                            </div>
                            <a href="tel:0123456854" class="pd-call"><i class="fas fa-phone-alt"></i> For Call :
                                0123456854</a>

                            <ul class="pd-trust">
                                <li><i class="fas fa-hand-holding-usd"></i> ক্যাশ অন ডেলিভারি</li>
                                <li><i class="fas fa-undo-alt"></i> ৭ দিনে রিটার্ন</li>
                                <li><i class="fas fa-shield-alt"></i> ১০০% অরিজিনাল</li>
                            </ul>
                        </div>
                    </div>

                    <div class="pd-tabs-box">
                        <div class="pd-tabs" role="tablist">
                            <button type="button" class="active" data-tab="desc">Description</button>
                            <button type="button" data-tab="review">Review (১২)</button>
                            <button type="button" data-tab="policy">Product Policy</button>
                        </div>
                        <div class="pd-panel active" id="tab-desc">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis minus, ut unde laudantium
                                accusamus odio nam officia aperiam excepturi quis nesciunt eveniet eligendi, corrupti
                                voluptatibus. Similique doloremque velit optio aliquam.</p>
                            <table class="pd-spec">
                                <tr>
                                    <th>ব্র্যান্ড</th>
                                    <td>Nitto Mart</td>
                                </tr>
                                <tr>
                                    <th>ক্যাটাগরি</th>
                                    <td>Test Category</td>
                                </tr>
                                <tr>
                                    <th>উপাদান</th>
                                    <td>প্রিমিয়াম মানের</td>
                                </tr>
                                <tr>
                                    <th>ওয়ারেন্টি</th>
                                    <td>৭ দিনের রিপ্লেসমেন্ট</td>
                                </tr>
                            </table>
                        </div>
                        <div class="pd-panel" id="tab-review">
                            <div class="pd-rv-summary">
                                <div class="pd-rv-score"><b>৪.৮</b><span class="pd-stars"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i></span><small>১২টি
                                        রিভিউ</small></div>
                                <div class="pd-bars">
                                    <div class="pd-bar"><span>৫★</span>
                                        <div><i style="width:68%"></i></div><em>68%</em>
                                    </div>
                                    <div class="pd-bar"><span>৪★</span>
                                        <div><i style="width:20%"></i></div><em>20%</em>
                                    </div>
                                    <div class="pd-bar"><span>৩★</span>
                                        <div><i style="width:8%"></i></div><em>8%</em>
                                    </div>
                                    <div class="pd-bar"><span>২★</span>
                                        <div><i style="width:3%"></i></div><em>3%</em>
                                    </div>
                                    <div class="pd-bar"><span>১★</span>
                                        <div><i style="width:1%"></i></div><em>1%</em>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-review">
                                <div class="pd-rv-head"><span class="pd-avatar"><i class="fas fa-user"></i></span>
                                    <div><b>রাকিব হাসান</b><small>১২ অক্টোবর, ২০২৬</small></div><span
                                        class="pd-rv-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                </div>
                                <p>পণ্যের মান দারুণ, ছবির সাথে হুবহু মিল। দ্রুত ডেলিভারি পেয়েছি।</p>
                            </div>
                            <div class="pd-review">
                                <div class="pd-rv-head"><span class="pd-avatar"><i class="fas fa-user"></i></span>
                                    <div><b>সুমাইয়া আক্তার</b><small>৮ অক্টোবর, ২০২৬</small></div><span
                                        class="pd-rv-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="far fa-star"></i></span>
                                </div>
                                <p>দামের তুলনায় ভালো। প্যাকেজিং আরেকটু ভালো হলে ভালো হতো।</p>
                            </div>
                            <div class="pd-review">
                                <div class="pd-rv-head"><span class="pd-avatar"><i class="fas fa-user"></i></span>
                                    <div><b>তানভীর আহমেদ</b><small>৩ অক্টোবর, ২০২৬</small></div><span
                                        class="pd-rv-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                </div>
                                <p>ক্যাশ অন ডেলিভারিতে নিয়েছি, কোনো ঝামেলা হয়নি। সবাইকে রেকমেন্ড করছি।</p>
                            </div>
                            <form class="pd-rv-form" id="rvForm">
                                <h5>আপনার মতামত দিন</h5>
                                <div class="pd-rate-input" id="rateInput"><button type="button" data-r="1"><i
                                            class="far fa-star"></i></button><button type="button" data-r="2"><i
                                            class="far fa-star"></i></button><button type="button" data-r="3"><i
                                            class="far fa-star"></i></button><button type="button" data-r="4"><i
                                            class="far fa-star"></i></button><button type="button" data-r="5"><i
                                            class="far fa-star"></i></button></div>
                                <input type="text" placeholder="আপনার নাম" required>
                                <textarea rows="3" placeholder="আপনার অভিজ্ঞতা লিখুন..." required></textarea>
                                <button type="submit" class="pd-btn primary">রিভিউ জমা দিন</button>
                            </form>
                        </div>
                        <div class="pd-panel" id="tab-policy">
                            <ul class="pd-policy">
                                <li><i class="fas fa-truck"></i>
                                    <div><b>ডেলিভারি</b>
                                        <p>ঢাকার ভেতরে ১–২ দিন (৮০ টাকা), ঢাকার বাইরে ২–৪ দিন (১৫০ টাকা)।</p>
                                    </div>
                                </li>
                                <li><i class="fas fa-undo-alt"></i>
                                    <div><b>রিটার্ন ও রিফান্ড</b>
                                        <p>পণ্য হাতে পাওয়ার ৭ দিনের মধ্যে ত্রুটি থাকলে ফেরত বা বদলে নিতে পারবেন।</p>
                                    </div>
                                </li>
                                <li><i class="fas fa-hand-holding-usd"></i>
                                    <div><b>পেমেন্ট</b>
                                        <p>ক্যাশ অন ডেলিভারি, বিকাশ ও নগদে মূল্য পরিশোধ করা যাবে।</p>
                                    </div>
                                </li>
                                <li><i class="fas fa-headset"></i>
                                    <div><b>সাপোর্ট</b>
                                        <p>যেকোনো সমস্যায় সকাল ১০টা থেকে রাত ১০টা পর্যন্ত ফোনে জানান।</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <aside class="pd-side">
                    <div class="pd-side-box">
                        <h4>Category</h4>
                        <ul class="pd-cats">
                            <li><a href="category-product.html"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt=""><span>Test
                                        Category</span><em>২৪</em></a></li>
                            <li><a href="category-product.html"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}"
                                        alt=""><span>পোশাক ও জুতা</span><em>৬</em></a></li>
                            <li><a href="category-product.html"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}"
                                        alt=""><span>ইলেকট্রনিক্স</span><em>৭</em></a></li>
                            <li><a href="category-product.html"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}"
                                        alt=""><span>ব্যাগ ও এক্সেসরিজ</span><em>৪</em></a></li>
                            <li><a href="category-product.html"><img
                                        src="{{ asset('frontend/assets/images/product.png') }}" alt=""><span>হোম
                                        ও লাইফস্টাইল</span><em>৫</em></a></li>
                        </ul>
                    </div>
                    <div class="pd-help">
                        <i class="fas fa-headset"></i>
                        <h5>সাহায্য লাগবে?</h5>
                        <p>অর্ডার করতে ফোন করুন</p>
                        <a href="tel:0123456854">0123456854</a>
                    </div>
                </aside>
            </div>

            <div class="section-title-outer">
                <h2 class="title">সম্পর্কিত পণ্য</h2><a href="category-product.html" class="product-view-all-btn">View
                    All</a>
            </div>
            <div class="product-grid">
                <div class="product__item-outer">
                    <div class="product__item-image-outer">
                        <a href="details.html" class="product__item-image-inner"><img
                                src="{{ asset('frontend/assets/images/product.png') }}" alt="Cotton Panjabi"
                                loading="lazy" /></a>
                        <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                        <div class="product__type-badge-outer"><span class="product__type-badge-inner">Hot</span></div>
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
                        <div class="product__type-badge-outer"><span class="product__type-badge-inner">New</span></div>
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
                                src="{{ asset('frontend/assets/images/product.png') }}" alt="Smart Watch"
                                loading="lazy" /></a>
                        <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                        <div class="product__type-badge-outer"><span class="product__type-badge-inner">Best</span></div>
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
                                src="{{ asset('frontend/assets/images/product.png') }}" alt="Travel Backpack"
                                loading="lazy" /></a>
                        <div class="product__item-add-cart-btn-outer"><a href="details.html"
                                class="product__item-add-cart-btn-inner">Add to Cart</a></div>
                        <div class="product__type-badge-outer"><span class="product__type-badge-inner">Trending</span>
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
            </div>
        </div>
    </section>
    @verbatim
        <script>
            /* details.js – প্রোডাক্ট ডিটেইলস পেজ */
            (function() {
                var $ = function(id) {
                    return document.getElementById(id);
                };
                var all = function(s, r) {
                    return [].slice.call((r || document).querySelectorAll(s));
                };
                var bn = function(n) {
                    return String(n).replace(/\d/g, function(d) {
                        return '০১২৩৪৫৬৭৮৯' [d];
                    });
                };
                var MAX = 12;

                /* features.js না থাকলেও যেন কার্ট/উইশলিস্ট/মেসেজ চলে – নিজস্ব ব্যাকআপ */
                var LOCAL = (function() {
                    var WK = 'nm_wishlist',
                        CK = 'nm_cartcount';
                    var get = function(k, d) {
                        try {
                            var v = JSON.parse(localStorage.getItem(k));
                            return v == null ? d : v;
                        } catch (e) {
                            return d;
                        }
                    };
                    var set = function(k, v) {
                        try {
                            localStorage.setItem(k, JSON.stringify(v));
                        } catch (e) {}
                    };
                    var toast = function(msg, icon) {
                        var w = $('toastWrap');
                        if (!w) {
                            w = document.createElement('div');
                            w.className = 'toast-wrap';
                            w.id = 'toastWrap';
                            document.body.appendChild(w);
                        }
                        var t = document.createElement('div');
                        t.className = 'toast';
                        t.innerHTML = '<i class="fas ' + (icon || 'fa-check-circle') + '"></i> ' + msg;
                        w.appendChild(t);
                        setTimeout(function() {
                            t.classList.add('hide');
                        }, 2200);
                        setTimeout(function() {
                            t.remove();
                        }, 2700);
                    };
                    var badges = function() {
                        var c = get(CK, 1),
                            w = get(WK, []);
                        all('.cart-count').forEach(function(e) {
                            e.textContent = bn(c);
                        });
                        all('.wish-count').forEach(function(e) {
                            e.textContent = bn(w.length);
                            e.style.display = w.length ? '' : 'none';
                        });
                    };
                    return {
                        toast: toast,
                        isWished: function(n) {
                            return get(WK, []).some(function(x) {
                                return x.name === n;
                            });
                        },
                        toggleWish: function(d) {
                            var w = get(WK, []),
                                i = -1;
                            w.forEach(function(x, k) {
                                if (x.name === d.name) i = k;
                            });
                            if (i >= 0) {
                                w.splice(i, 1);
                                toast('পছন্দের তালিকা থেকে সরানো হয়েছে', 'fa-heart-broken');
                            } else {
                                w.push(d);
                                toast('পছন্দের তালিকায় যোগ হয়েছে', 'fa-heart');
                            }
                            set(WK, w);
                            badges();
                            return i < 0;
                        },
                        addCart: function(n) {
                            set(CK, get(CK, 1) + (n || 1));
                            badges();
                            toast('কার্টে যোগ হয়েছে', 'fa-check-circle');
                        }
                    };
                })();
                var NM = function() {
                    return window.NM || LOCAL;
                };

                /* গ্যালারি + জুম */
                var mainImg = $('pdMainImg'),
                    main = $('pdMain');
                all('.pd-thumb').forEach(function(t) {
                    t.onclick = function() {
                        all('.pd-thumb').forEach(function(x) {
                            x.classList.toggle('active', x === t);
                        });
                        mainImg.src = t.getAttribute('data-src');
                    };
                });
                main.onmousemove = function(e) {
                    var r = main.getBoundingClientRect();
                    mainImg.style.transformOrigin = ((e.clientX - r.left) / r.width * 100) + '% ' + ((e.clientY - r
                        .top) / r.height * 100) + '%';
                };

                /* রঙ ও সাইজ */
                all('.pd-opt-group').forEach(function(g) {
                    all('.pd-opt', g).forEach(function(b) {
                        b.onclick = function() {
                            all('.pd-opt', g).forEach(function(x) {
                                x.classList.toggle('active', x === b);
                            });
                            g.querySelector('h6 b').textContent = b.getAttribute('data-v');
                        };
                    });
                });

                /* পরিমাণ */
                var q = $('qtyInput');
                var setQ = function(v) {
                    v = parseInt(v, 10) || 1;
                    q.value = Math.min(MAX, Math.max(1, v));
                };
                $('qtyMinus').onclick = function() {
                    setQ(+q.value - 1);
                };
                $('qtyPlus').onclick = function() {
                    setQ(+q.value + 1);
                };
                q.onchange = function() {
                    setQ(q.value);
                };

                /* ট্যাব */
                all('.pd-tabs button').forEach(function(b) {
                    b.onclick = function() {
                        all('.pd-tabs button').forEach(function(x) {
                            x.classList.toggle('active', x === b);
                        });
                        all('.pd-panel').forEach(function(p) {
                            p.classList.toggle('active', p.id === 'tab-' + b.getAttribute('data-tab'));
                        });
                    };
                });

                /* কার্ট, কুইক অর্ডার, উইশলিস্ট (features.js এর window.NM ব্যবহার করে) */
                var data = function() {
                    return {
                        name: $('pdTitle').textContent.trim(),
                        price: $('pdPrice').textContent.trim(),
                        img: mainImg.getAttribute('src')
                    };
                };
                $('btnCart').onclick = function() {
                    NM().addCart(+q.value);
                };
                $('btnQuick').onclick = function() {
                    NM().addCart(+q.value);
                    window.location.href = 'checkout.html';
                };
                var heart = $('btnWish');
                var paintHeart = function(on) {
                    heart.classList.toggle('active', on);
                    heart.firstChild.className = on ? 'fas fa-heart' : 'far fa-heart';
                };
                heart.onclick = function() {
                    paintHeart(NM().toggleWish(data()));
                };
                window.addEventListener('load', function() {
                    paintHeart(NM().isWished(data().name));
                });

                /* রিভিউ ফর্ম */
                var rate = 0;
                all('#rateInput button').forEach(function(b) {
                    b.onclick = function() {
                        rate = +b.getAttribute('data-r');
                        all('#rateInput button').forEach(function(x, i) {
                            x.firstChild.className = i < rate ? 'fas fa-star' : 'far fa-star';
                        });
                    };
                });
                $('rvForm').onsubmit = function(e) {
                    e.preventDefault();
                    if (!rate) {
                        NM().toast('আগে তারা (★) বেছে নিন', 'fa-star');
                        return;
                    }
                    NM().toast('ধন্যবাদ! আপনার রিভিউ জমা হয়েছে', 'fa-check-circle');
                    this.reset();
                    rate = 0;
                    all('#rateInput button').forEach(function(x) {
                        x.firstChild.className = 'far fa-star';
                    });
                };
            })
            ();
        </script>
    @endverbatim
@endsection
