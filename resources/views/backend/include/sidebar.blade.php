 <aside id="sidebar"
        class="fixed inset-y-0 left-0 z-50 flex w-64 -translate-x-full flex-col bg-brand-900 text-white shadow-2xl transition-all duration-300 lg:translate-x-0">
        <div class="flex h-16 shrink-0 items-center gap-3 border-b border-white/10 px-5">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-accent text-lg font-extrabold">N</span>
            <div class="sb-text leading-tight">
                <p class="text-base font-extrabold tracking-wide">NITTO MART</p>
                <p class="text-[11px] text-brand-300">Admin Panel</p>
            </div>
            <button type="button" id="sbClose" class="ml-auto text-brand-200 lg:hidden" aria-label="Close">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <nav class="sb-scroll flex-1 overflow-y-auto px-3 py-4 space-y-4">
            <div>
                <p class="sb-text mb-2 px-3 text-[11px] font-bold uppercase tracking-wider text-brand-300/70">Main</p>
                <div class="space-y-1">
                    <a href="{{url('/admin/dashboard')}}"
                        class="flex items-center gap-3 rounded-xl bg-accent px-3 py-2.5 text-sm font-semibold text-white shadow-lg shadow-accent/30">
                        <i class="fa-solid fa-gauge-high w-5 text-center"></i><span
                            class="sb-text flex-1">Dashboard</span>
                    </a>
                </div>
            </div>

            <div>
                <p class="sb-text mb-2 px-3 text-[11px] font-bold uppercase tracking-wider text-brand-300/70">Catalog
                </p>
                <div class="space-y-1">
                    <div class="sb-group">
                        <button type="button" data-acc
                            class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                            <i class="fa-solid fa-layer-group w-5 text-center"></i><span
                                class="sb-text flex-1 text-left">Categories</span>
                            <i class="fa-solid fa-chevron-down sb-text text-[10px] transition"></i>
                        </button>
                        <div class="sb-kids mt-1 space-y-0.5 hidden">
                            <a href="{{url('/admin/category')}}"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Categories</a>
                            <a href="{{url('/admin/sub-category')}}"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Sub Categories</a>
                        </div>
                    </div>
                    <div class="sb-group">
                        <button type="button" data-acc
                            class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                            <i class="fa-solid fa-box w-5 text-center"></i><span
                                class="sb-text flex-1 text-left">Products</span>
                            <i class="fa-solid fa-chevron-down sb-text text-[10px] transition"></i>
                        </button>
                        <div class="sb-kids mt-1 space-y-0.5 hidden">
                            <a href="products.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>All Products</a>
                            <a href="product-create.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Add Product</a>
                            <a href="inventory.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Stock / Inventory</a>
                        </div>
                    </div>
                    {{-- <a href="attributes.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-palette w-5 text-center"></i><span class="sb-text flex-1">Colors &
                            Sizes</span>
                    </a> --}}
                </div>
            </div>

            <div>
                <p class="sb-text mb-2 px-3 text-[11px] font-bold uppercase tracking-wider text-brand-300/70">Sales</p>
                <div class="space-y-1">
                    <div class="sb-group">
                        <button type="button" data-acc
                            class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                            <i class="fa-solid fa-bag-shopping w-5 text-center"></i><span
                                class="sb-text flex-1 text-left">Orders</span>
                            <span class="sb-text rounded-full bg-accent px-2 text-[11px] font-bold text-white">18</span>
                            <i class="fa-solid fa-chevron-down sb-text text-[10px] transition"></i>
                        </button>
                        <div class="sb-kids mt-1 space-y-0.5 hidden">
                            <a href="orders.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>All Orders</a>
                            <a href="orders-pending.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Pending</a>
                            <a href="orders-processing.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Processing</a>
                            <a href="orders-delivered.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Delivered</a>
                            <a href="orders-cancelled.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Cancelled</a>
                        </div>
                    </div>
                    <a href="returns.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-rotate-left w-5 text-center"></i><span class="sb-text flex-1">Return
                            Requests</span>
                        <span class="sb-text rounded-full bg-accent px-2 text-[11px] font-bold text-white">5</span>
                    </a>
                    <a href="customers.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-users w-5 text-center"></i><span class="sb-text flex-1">Customers</span>
                    </a>
                    <a href="payments.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-money-bill-wave w-5 text-center"></i><span
                            class="sb-text flex-1">Payments</span>
                    </a>
                </div>
            </div>

            <div>
                <p class="sb-text mb-2 px-3 text-[11px] font-bold uppercase tracking-wider text-brand-300/70">Marketing
                </p>
                <div class="space-y-1">
                    <a href="coupons.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-ticket w-5 text-center"></i><span class="sb-text flex-1">Coupons</span>
                    </a>
                    <a href="banners.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-image w-5 text-center"></i><span class="sb-text flex-1">Banners &
                            Sliders</span>
                    </a>
                    <a href="flash-sales.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-bolt w-5 text-center"></i><span class="sb-text flex-1">Flash
                            Sales</span>
                    </a>
                    <a href="reviews.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-star w-5 text-center"></i><span class="sb-text flex-1">Reviews</span>
                    </a>
                    <a href="newsletter.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-envelope w-5 text-center"></i><span
                            class="sb-text flex-1">Newsletter</span>
                    </a>
                </div>
            </div>

            <div>
                <p class="sb-text mb-2 px-3 text-[11px] font-bold uppercase tracking-wider text-brand-300/70">System
                </p>
                <div class="space-y-1">
                    <a href="pages.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-file-lines w-5 text-center"></i><span class="sb-text flex-1">Pages
                            (Policy)</span>
                    </a>
                    <a href="delivery.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-truck-fast w-5 text-center"></i><span class="sb-text flex-1">Delivery
                            Zones</span>
                    </a>
                    <a href="reports.html"
                        class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                        <i class="fa-solid fa-chart-line w-5 text-center"></i><span
                            class="sb-text flex-1">Reports</span>
                    </a>
                    <div class="sb-group">
                        <button type="button" data-acc
                            class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-100 hover:bg-white/5 hover:text-white transition">
                            <i class="fa-solid fa-gear w-5 text-center"></i><span
                                class="sb-text flex-1 text-left">Settings</span>
                            <i class="fa-solid fa-chevron-down sb-text text-[10px] transition"></i>
                        </button>
                        <div class="sb-kids mt-1 space-y-0.5 hidden">
                            <a href="settings.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>General</a>
                            <a href="settings-payment.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Payment Methods</a>
                            <a href="users.html"
                                class="flex items-center gap-2 rounded-lg py-2 pl-11 pr-3 text-sm text-brand-200 hover:bg-white/5 hover:text-white"><span
                                    class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>Users & Roles</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="sb-text m-3 rounded-2xl bg-white/5 p-4 text-center">
            <i class="fa-solid fa-headset text-xl text-accent"></i>
            <p class="mt-1 text-sm font-bold">Need help?</p>
            <p class="text-xs text-brand-300">Contact developer support</p>
        </div>
    </aside>