  <div class="topbar" aria-label="অফার ঘোষণা">
      <div class="marquee-track">
          <div class="marquee-group"><span><i class="fas fa-truck"></i> সারা বাংলাদেশে ক্যাশ অন
                  ডেলিভারি</span><span><i class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি
                  ডেলিভারি</span><span><i class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                      class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i class="fas fa-phone-alt"></i>
                  অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span><span><i class="fas fa-truck"></i> সারা বাংলাদেশে ক্যাশ অন
                  ডেলিভারি</span><span><i class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি ডেলিভারি</span><span><i
                      class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                      class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i
                      class="fas fa-phone-alt"></i> অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span></div>
          <div class="marquee-group"><span><i class="fas fa-truck"></i> সারা বাংলাদেশে ক্যাশ অন
                  ডেলিভারি</span><span><i class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি
                  ডেলিভারি</span><span><i class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                      class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i
                      class="fas fa-phone-alt"></i> অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span><span><i class="fas fa-truck"></i>
                  সারা বাংলাদেশে ক্যাশ অন ডেলিভারি</span><span><i class="fas fa-gift"></i> ১০০০ টাকার উপরে অর্ডারে ফ্রি
                  ডেলিভারি</span><span><i class="fas fa-bolt"></i> আজকের ফ্ল্যাশ সেলে ২৫% পর্যন্ত ছাড়</span><span><i
                      class="fas fa-undo-alt"></i> ৭ দিনের মধ্যে সহজ রিটার্ন</span><span><i
                      class="fas fa-phone-alt"></i> অর্ডারে সহায়তা: ০১২৩৪৫৬৮৫৭</span></div>
      </div>
  </div>
  <header class="header-section">
      <div class="container">
          <div class="header-top-wrapper">
              <a href="{{ url('/') }}" class="brand-logo-outer">
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
                  <button class="header-wish" id="wishOpen" aria-label="Wishlist"><i class="far fa-heart"></i><span
                          class="count-number wish-count" style="display:none">0</span></button>
                  <div class="header-top-right-item dropdown">
                      <div class="header-top-right-item-link">
                          <span class="icon-outer">
                              <i class="fas fa-cart-plus"></i>
                              <span class="count-number cart-count">1</span>
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
                                  <a href="{{ url('/view-cart') }}" class="view-cart-link">View cart</a>
                                  <a href="{{ url('/checkout') }}" class="checkout-link">Checkout</a>
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
                              @foreach ($unicCategory as $category)
                                  <ul class="header__category-list">
                                      <li class="header__category-list-item item-has-submenu">
                                          <a href="{{ url('/category-product/' . $category->slug) }}"
                                              class="header__category-list-item-link">
                                              <img src="{{ asset($category->image) }}" alt="category">
                                              {{ $category->name }}
                                          </a>
                                          <ul class="header__nav-item-category-submenu">
                                              @foreach ($category->subCategories as $subcat)
                                                  <li class="header__category-submenu-item">
                                                      <a href="{{ url('/sub-category-product') }}"
                                                          class="header__category-submenu-item-link">{{ $subcat->name }}</a>
                                                  </li>
                                              @endforeach
                                          </ul>
                                      </li>
                                  </ul>
                              @endforeach
                          </div>
                      </div>
                  </div>
                  <div class="header__dynamic-page-wrapper">
                      <ul class="dynamic-page-list">
                          <li class="dynamic-page-list-item"><a href="{{ url('/') }}"
                                  class="dynamic-page-list-item-link active">Home</a></li>
                          <li class="dynamic-page-list-item"><a href="{{ url('/shop') }}"
                                  class="dynamic-page-list-item-link">Shop</a></li>
                          <li class="dynamic-page-list-item"><a href="{{ url('/return-process') }}"
                                  class="dynamic-page-list-item-link">Return Process</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </header>
