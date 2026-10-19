@extends('backend.master')
@section('content')
          <!-- Page Header -->
                <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h1 class="text-xl font-bold sm:text-2xl">Dashboard</h1>
                        <p class="text-xs text-slate-500 sm:text-sm dark:text-slate-400">Welcome back, Admin! Here's
                            what's happening with your store today.</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <select
                            class="h-9 rounded-full border border-slate-200 bg-white px-3 text-xs font-semibold outline-none focus:border-brand-500 sm:h-10 sm:px-4 sm:text-sm dark:border-slate-700 dark:bg-slate-900">
                            <option>Last 7 days</option>
                            <option>Last 30 days</option>
                            <option>This year</option>
                        </select>
                        <button
                            class="flex h-9 items-center gap-2 rounded-full border border-slate-200 bg-white px-3 text-xs font-bold transition hover:bg-slate-50 sm:h-10 sm:px-4 sm:text-sm dark:border-slate-700 dark:bg-slate-900 dark:hover:bg-slate-800">
                            <i class="fa-solid fa-download"></i> Export
                        </button>
                        <a href="product-create.html"
                            class="flex h-9 items-center gap-2 rounded-full bg-brand-500 px-3.5 text-xs font-bold text-white shadow-lg shadow-brand-500/30 transition hover:bg-brand-600 sm:h-10 sm:px-5 sm:text-sm">
                            <i class="fa-solid fa-plus"></i> Add Product
                        </a>
                    </div>
                </div>

                <!-- Stat Cards Grid -->
                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-4">
                    <div class="card-hover rounded-2xl bg-white p-4 sm:p-5 shadow-sm dark:bg-slate-900">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-xs sm:text-sm font-semibold text-slate-500 dark:text-slate-400">Total
                                    Revenue</p>
                                <h3 class="mt-1 text-2xl font-bold sm:text-3xl">৳ 4,28,560</h3>
                            </div>
                            <span
                                class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-2xl bg-brand-50 text-lg sm:text-xl text-brand-600 dark:bg-brand-900"><i
                                    class="fa-solid fa-sack-dollar"></i></span>
                        </div>
                        <p class="mt-3 text-xs sm:text-sm"><span
                                class="rounded-full bg-green-100 px-2 py-0.5 font-bold text-green-600 dark:bg-green-900/40"><i
                                    class="fa-solid fa-arrow-up text-[10px]"></i> 12.5%</span> <span
                                class="text-slate-400">vs last week</span></p>
                    </div>
                    <div class="card-hover rounded-2xl bg-white p-4 sm:p-5 shadow-sm dark:bg-slate-900">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-xs sm:text-sm font-semibold text-slate-500 dark:text-slate-400">Total
                                    Orders</p>
                                <h3 class="mt-1 text-2xl font-bold sm:text-3xl">1,284</h3>
                            </div>
                            <span
                                class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-2xl bg-blue-50 text-lg sm:text-xl text-blue-600 dark:bg-blue-900/40"><i
                                    class="fa-solid fa-bag-shopping"></i></span>
                        </div>
                        <p class="mt-3 text-xs sm:text-sm"><span
                                class="rounded-full bg-green-100 px-2 py-0.5 font-bold text-green-600 dark:bg-green-900/40"><i
                                    class="fa-solid fa-arrow-up text-[10px]"></i> 8.2%</span> <span
                                class="text-slate-400">vs last week</span></p>
                    </div>
                    <div class="card-hover rounded-2xl bg-white p-4 sm:p-5 shadow-sm dark:bg-slate-900">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-xs sm:text-sm font-semibold text-slate-500 dark:text-slate-400">
                                    Customers</p>
                                <h3 class="mt-1 text-2xl font-bold sm:text-3xl">3,562</h3>
                            </div>
                            <span
                                class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-2xl bg-purple-50 text-lg sm:text-xl text-purple-600 dark:bg-purple-900/40"><i
                                    class="fa-solid fa-users"></i></span>
                        </div>
                        <p class="mt-3 text-xs sm:text-sm"><span
                                class="rounded-full bg-green-100 px-2 py-0.5 font-bold text-green-600 dark:bg-green-900/40"><i
                                    class="fa-solid fa-arrow-up text-[10px]"></i> 5.4%</span> <span
                                class="text-slate-400">vs last week</span></p>
                    </div>
                    <div class="card-hover rounded-2xl bg-white p-4 sm:p-5 shadow-sm dark:bg-slate-900">
                        <div class="flex items-start justify-between">
                            <div>
                                <p class="text-xs sm:text-sm font-semibold text-slate-500 dark:text-slate-400">Pending
                                    Returns</p>
                                <h3 class="mt-1 text-2xl font-bold sm:text-3xl">5</h3>
                            </div>
                            <span
                                class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-2xl bg-amber-50 text-lg sm:text-xl text-amber-600 dark:bg-amber-900/40"><i
                                    class="fa-solid fa-rotate-left"></i></span>
                        </div>
                        <p class="mt-3 text-xs sm:text-sm"><span
                                class="rounded-full bg-red-100 px-2 py-0.5 font-bold text-red-600 dark:bg-red-900/40"><i
                                    class="fa-solid fa-arrow-down text-[10px]"></i> 2</span> <span
                                class="text-slate-400">needs attention</span></p>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="mt-6 grid gap-6 xl:grid-cols-3">
                    <div class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900 xl:col-span-2">
                        <div class="mb-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <h3 class="text-base font-bold sm:text-lg">Sales Overview</h3>
                                <p class="text-xs text-slate-400 sm:text-sm">Revenue in BDT (৳)</p>
                            </div>
                            <div id="rangeTabs"
                                class="flex self-start rounded-full bg-slate-100 p-1 text-xs font-bold sm:self-auto sm:text-sm dark:bg-slate-800">
                                <button data-r="7d"
                                    class="rounded-full bg-white px-3 py-1 text-brand-600 shadow sm:px-4 sm:py-1.5 dark:bg-slate-700">7D</button>
                                <button data-r="30d"
                                    class="rounded-full px-3 py-1 text-slate-500 sm:px-4 sm:py-1.5">30D</button>
                                <button data-r="12m"
                                    class="rounded-full px-3 py-1 text-slate-500 sm:px-4 sm:py-1.5">12M</button>
                            </div>
                        </div>
                        <div class="h-56 sm:h-72"><canvas id="salesChart"></canvas></div>
                    </div>
                    <div class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900">
                        <h3 class="text-base font-bold sm:text-lg">Orders by Status</h3>
                        <p class="mb-2 text-xs text-slate-400 sm:text-sm">This month</p>
                        <div class="mx-auto h-48 max-w-[200px] sm:h-52 sm:max-w-[220px]"><canvas
                                id="statusChart"></canvas></div>
                        <ul class="mt-4 space-y-2 text-xs font-semibold sm:text-sm">
                            <li class="flex items-center justify-between"><span class="flex items-center gap-2"><i
                                        class="h-3 w-3 rounded-full bg-brand-500"></i> Delivered</span><span>62%</span>
                            </li>
                            <li class="flex items-center justify-between"><span class="flex items-center gap-2"><i
                                        class="h-3 w-3 rounded-full bg-blue-500"></i> Processing</span><span>18%</span>
                            </li>
                            <li class="flex items-center justify-between"><span class="flex items-center gap-2"><i
                                        class="h-3 w-3 rounded-full bg-accent"></i> Pending</span><span>12%</span></li>
                            <li class="flex items-center justify-between"><span class="flex items-center gap-2"><i
                                        class="h-3 w-3 rounded-full bg-red-500"></i> Cancelled</span><span>8%</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Recent orders + Top products -->
                <div class="mt-6 grid gap-6 xl:grid-cols-3">
                    <div class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900 xl:col-span-2">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="text-base font-bold sm:text-lg">Recent Orders</h3>
                            <a href="orders.html"
                                class="text-xs font-bold text-brand-600 hover:underline sm:text-sm">View all</a>
                        </div>
                        <div class="table-scroll">
                            <table class="w-full min-w-[600px] text-left text-xs sm:text-sm">
                                <thead>
                                    <tr
                                        class="border-b border-slate-100 text-[11px] uppercase tracking-wide text-slate-400 sm:text-xs dark:border-slate-800">
                                        <th class="pb-3 font-bold">Order</th>
                                        <th class="pb-3 font-bold">Customer</th>
                                        <th class="pb-3 font-bold">Total</th>
                                        <th class="pb-3 font-bold">Payment</th>
                                        <th class="pb-3 font-bold">Status</th>
                                        <th class="pb-3 text-right font-bold">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr>
                                        <td class="py-3 font-bold text-brand-600">#NM-100248</td>
                                        <td><b class="block">Rakib Hasan</b><span
                                                class="text-[11px] text-slate-400">Dhaka</span></td>
                                        <td class="font-bold">৳ 1,850</td>
                                        <td><span class="text-slate-500">COD</span></td>
                                        <td><span
                                                class="rounded-full bg-amber-100 px-2.5 py-0.5 text-[11px] font-bold text-amber-700 dark:bg-amber-900/40 dark:text-amber-300">Pending</span>
                                        </td>
                                        <td class="text-right"><a href="#"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 font-bold text-brand-600">#NM-100247</td>
                                        <td><b class="block">Sumaiya Akter</b><span
                                                class="text-[11px] text-slate-400">Gazipur</span></td>
                                        <td class="font-bold">৳ 2,200</td>
                                        <td><span class="text-slate-500">bKash</span></td>
                                        <td><span
                                                class="rounded-full bg-blue-100 px-2.5 py-0.5 text-[11px] font-bold text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">Processing</span>
                                        </td>
                                        <td class="text-right"><a href="#"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 font-bold text-brand-600">#NM-100246</td>
                                        <td><b class="block">Mahmudul Karim</b><span
                                                class="text-[11px] text-slate-400">Chattogram</span></td>
                                        <td class="font-bold">৳ 850</td>
                                        <td><span class="text-slate-500">COD</span></td>
                                        <td><span
                                                class="rounded-full bg-indigo-100 px-2.5 py-0.5 text-[11px] font-bold text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-300">Shipped</span>
                                        </td>
                                        <td class="text-right"><a href="#"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 font-bold text-brand-600">#NM-100245</td>
                                        <td><b class="block">Tanvir Ahmed</b><span
                                                class="text-[11px] text-slate-400">Sylhet</span></td>
                                        <td class="font-bold">৳ 3,450</td>
                                        <td><span class="text-slate-500">Nagad</span></td>
                                        <td><span
                                                class="rounded-full bg-green-100 px-2.5 py-0.5 text-[11px] font-bold text-green-700 dark:bg-green-900/40 dark:text-green-300">Delivered</span>
                                        </td>
                                        <td class="text-right"><a href="#"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 font-bold text-brand-600">#NM-100244</td>
                                        <td><b class="block">Nusrat Jahan</b><span
                                                class="text-[11px] text-slate-400">Khulna</span></td>
                                        <td class="font-bold">৳ 480</td>
                                        <td><span class="text-slate-500">COD</span></td>
                                        <td><span
                                                class="rounded-full bg-red-100 px-2.5 py-0.5 text-[11px] font-bold text-red-700 dark:bg-red-900/40 dark:text-red-300">Cancelled</span>
                                        </td>
                                        <td class="text-right"><a href="#"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 font-bold text-brand-600">#NM-100243</td>
                                        <td><b class="block">Imran Hossain</b><span
                                                class="text-[11px] text-slate-400">Dhaka</span></td>
                                        <td class="font-bold">৳ 1,350</td>
                                        <td><span class="text-slate-500">bKash</span></td>
                                        <td><span
                                                class="rounded-full bg-green-100 px-2.5 py-0.5 text-[11px] font-bold text-green-700 dark:bg-green-900/40 dark:text-green-300">Delivered</span>
                                        </td>
                                        <td class="text-right"><a href="#"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800"><i
                                                    class="fa-regular fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="text-base font-bold sm:text-lg">Top Selling Products</h3>
                            <a href="products.html"
                                class="text-xs font-bold text-brand-600 hover:underline sm:text-sm">All</a>
                        </div>
                        <ul class="space-y-3 sm:space-y-4">
                            <li class="flex items-center gap-3">
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-brand-400 to-brand-600 text-xs font-bold text-white sm:h-12 sm:w-12 sm:text-sm">CP</span>
                                <div class="min-w-0 flex-1"><b class="block truncate text-xs sm:text-sm">Cotton
                                        Panjabi</b><span class="text-[11px] text-slate-400">128 sold</span></div>
                                <b class="text-xs font-bold text-brand-600 sm:text-sm">৳ 1,08,800</b>
                            </li>
                            <li class="flex items-center gap-3">
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 text-xs font-bold text-white sm:h-12 sm:w-12 sm:text-sm">WE</span>
                                <div class="min-w-0 flex-1"><b class="block truncate text-xs sm:text-sm">Wireless
                                        Earbuds</b><span class="text-[11px] text-slate-400">94 sold</span></div>
                                <b class="text-xs font-bold text-brand-600 sm:text-sm">৳ 1,17,500</b>
                            </li>
                            <li class="flex items-center gap-3">
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-400 to-purple-600 text-xs font-bold text-white sm:h-12 sm:w-12 sm:text-sm">SW</span>
                                <div class="min-w-0 flex-1"><b class="block truncate text-xs sm:text-sm">Smart
                                        Watch</b><span class="text-[11px] text-slate-400">61 sold</span></div>
                                <b class="text-xs font-bold text-brand-600 sm:text-sm">৳ 1,34,200</b>
                            </li>
                            <li class="flex items-center gap-3">
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 text-xs font-bold text-white sm:h-12 sm:w-12 sm:text-sm">TB</span>
                                <div class="min-w-0 flex-1"><b class="block truncate text-xs sm:text-sm">Travel
                                        Backpack</b><span class="text-[11px] text-slate-400">55 sold</span></div>
                                <b class="text-xs font-bold text-brand-600 sm:text-sm">৳ 63,250</b>
                            </li>
                            <li class="flex items-center gap-3">
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-rose-400 to-rose-600 text-xs font-bold text-white sm:h-12 sm:w-12 sm:text-sm">LW</span>
                                <div class="min-w-0 flex-1"><b class="block truncate text-xs sm:text-sm">Leather
                                        Wallet</b><span class="text-[11px] text-slate-400">49 sold</span></div>
                                <b class="text-xs font-bold text-brand-600 sm:text-sm">৳ 22,050</b>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Low stock / Returns / Categories -->
                <div class="mt-6 grid gap-6 lg:grid-cols-2 xl:grid-cols-3">
                    <div class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="text-base font-bold sm:text-lg">Low Stock Alerts</h3>
                            <span
                                class="rounded-full bg-red-100 px-2.5 py-0.5 text-[11px] font-bold text-red-600 dark:bg-red-900/40">12
                                items</span>
                        </div>
                        <ul class="space-y-3 text-xs sm:space-y-4 sm:text-sm">
                            <li>
                                <div class="mb-1 flex justify-between font-semibold"><span>Smart Watch</span><span
                                        class="text-red-500">3 left</span></div>
                                <div class="h-2 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[6%] rounded-full bg-red-500"></i></div>
                            </li>
                            <li>
                                <div class="mb-1 flex justify-between font-semibold"><span>Kids T-Shirt</span><span
                                        class="text-red-500">5 left</span></div>
                                <div class="h-2 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[10%] rounded-full bg-red-500"></i></div>
                            </li>
                            <li>
                                <div class="mb-1 flex justify-between font-semibold"><span>Power Bank
                                        10000mAh</span><span class="text-amber-500">8 left</span></div>
                                <div class="h-2 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[16%] rounded-full bg-amber-500"></i></div>
                            </li>
                            <li>
                                <div class="mb-1 flex justify-between font-semibold"><span>Water Bottle</span><span
                                        class="text-amber-500">9 left</span></div>
                                <div class="h-2 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[18%] rounded-full bg-amber-500"></i></div>
                            </li>
                        </ul>
                        <a href="inventory.html"
                            class="mt-5 block rounded-full bg-brand-50 py-2.5 text-center text-xs font-bold text-brand-700 hover:bg-brand-100 sm:text-sm dark:bg-brand-900 dark:text-brand-200">Manage
                            inventory</a>
                    </div>

                    <div class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900">
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="text-base font-bold sm:text-lg">Return Requests</h3>
                            <a href="returns.html"
                                class="text-xs font-bold text-brand-600 hover:underline sm:text-sm">View all</a>
                        </div>
                        <ul class="space-y-3">
                            <li class="rounded-xl border border-slate-100 p-3 dark:border-slate-800">
                                <div class="flex items-center justify-between"><b
                                        class="text-xs sm:text-sm">RT-482915</b><span
                                        class="rounded-full bg-amber-100 px-2.5 py-0.5 text-[10px] font-bold text-amber-700 sm:text-[11px]">Pending</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-500 sm:text-sm">Rakib Hasan · ত্রুটিপূর্ণ পণ্য</p>
                                <div class="mt-2 flex gap-2"><button
                                        class="flex-1 rounded-lg bg-brand-500 py-1.5 text-xs font-bold text-white hover:bg-brand-600">Approve</button><button
                                        class="flex-1 rounded-lg bg-red-50 py-1.5 text-xs font-bold text-red-600 hover:bg-red-100">Reject</button>
                                </div>
                            </li>
                            <li class="rounded-xl border border-slate-100 p-3 dark:border-slate-800">
                                <div class="flex items-center justify-between"><b
                                        class="text-xs sm:text-sm">RT-482911</b><span
                                        class="rounded-full bg-amber-100 px-2.5 py-0.5 text-[10px] font-bold text-amber-700 sm:text-[11px]">Pending</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-500 sm:text-sm">Sumaiya Akter · সাইজ মেলেনি</p>
                                <div class="mt-2 flex gap-2"><button
                                        class="flex-1 rounded-lg bg-brand-500 py-1.5 text-xs font-bold text-white hover:bg-brand-600">Approve</button><button
                                        class="flex-1 rounded-lg bg-red-50 py-1.5 text-xs font-bold text-red-600 hover:bg-red-100">Reject</button>
                                </div>
                            </li>
                            <li class="rounded-xl border border-slate-100 p-3 dark:border-slate-800">
                                <div class="flex items-center justify-between"><b
                                        class="text-xs sm:text-sm">RT-482904</b><span
                                        class="rounded-full bg-green-100 px-2.5 py-0.5 text-[10px] font-bold text-green-700 sm:text-[11px]">Approved</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-500 sm:text-sm">Tanvir Ahmed · ভুল পণ্য এসেছে</p>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900 lg:col-span-2 xl:col-span-1">
                        <h3 class="mb-4 text-base font-bold sm:text-lg">Sales by Category</h3>
                        <ul class="space-y-3 text-xs font-semibold sm:space-y-4 sm:text-sm">
                            <li>
                                <div class="mb-1 flex justify-between"><span>ইলেকট্রনিক্স</span><span>38%</span></div>
                                <div class="h-2.5 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[38%] rounded-full bg-brand-500"></i></div>
                            </li>
                            <li>
                                <div class="mb-1 flex justify-between"><span>পোশাক ও জুতা</span><span>27%</span></div>
                                <div class="h-2.5 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[27%] rounded-full bg-blue-500"></i></div>
                            </li>
                            <li>
                                <div class="mb-1 flex justify-between"><span>ব্যাগ ও এক্সেসরিজ</span><span>17%</span>
                                </div>
                                <div class="h-2.5 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[17%] rounded-full bg-accent"></i></div>
                            </li>
                            <li>
                                <div class="mb-1 flex justify-between"><span>হোম ও লাইফস্টাইল</span><span>12%</span>
                                </div>
                                <div class="h-2.5 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[12%] rounded-full bg-purple-500"></i></div>
                            </li>
                            <li>
                                <div class="mb-1 flex justify-between"><span>কিডস কর্নার</span><span>6%</span></div>
                                <div class="h-2.5 rounded-full bg-slate-100 dark:bg-slate-800"><i
                                        class="block h-full w-[6%] rounded-full bg-rose-500"></i></div>
                            </li>
                        </ul>
                    </div>
                </div>

@endsection