   <header
            class="sticky top-0 z-30 flex h-16 items-center gap-2 border-b border-slate-200 bg-white/90 px-3 backdrop-blur dark:border-slate-800 dark:bg-slate-900/90 sm:gap-3 sm:px-6">
            <button type="button" id="sbToggle"
                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800"
                aria-label="Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="relative hidden max-w-md flex-1 md:block">
                <i
                    class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-400"></i>
                <input type="search" placeholder="Search orders, products, customers…"
                    class="h-10 w-full rounded-full border-2 border-transparent bg-slate-100 pl-11 pr-4 text-sm outline-none transition focus:border-brand-500 focus:bg-white dark:bg-slate-800 dark:focus:bg-slate-900">
            </div>

            <div class="ml-auto flex items-center gap-2">
                <a href="../index.html" target="_blank"
                    class="hidden items-center gap-2 rounded-full bg-brand-50 px-4 py-2 text-sm font-bold text-brand-700 transition hover:bg-brand-100 dark:bg-brand-900 dark:text-brand-200 md:flex">
                    <i class="fa-solid fa-store"></i> View Store
                </a>
                <button type="button" id="themeBtn"
                    class="flex h-10 w-10 items-center justify-center rounded-full text-slate-600 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800"
                    aria-label="Theme">
                    <i class="fa-solid fa-moon dark:hidden"></i>
                    <i class="fa-solid fa-sun hidden text-accent dark:inline"></i>
                </button>

                <div class="relative" data-dd>
                    <button type="button" data-dd-btn
                        class="flex items-center gap-2 rounded-full py-1 pl-1 pr-1 sm:pr-3 hover:bg-slate-100 dark:hover:bg-slate-800">
                        <span
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-gradient-to-br from-brand-500 to-brand-700 text-sm font-bold text-white">AD</span>
                        <span class="hidden text-left leading-tight sm:block"><b class="block text-sm">Admin</b><span
                                class="text-[11px] text-slate-400">Super Admin</span></span>
                        <i class="fa-solid fa-chevron-down hidden text-[10px] text-slate-400 sm:block"></i>
                    </button>
                    <div data-dd-panel
                        class="hidden absolute right-0 top-full z-50 mt-2 w-56 rounded-2xl border border-slate-200 bg-white py-2 shadow-xl dark:border-slate-700 dark:bg-slate-900">
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-slate-50 dark:hover:bg-slate-800"><i
                                class="fa-regular fa-user w-4 text-slate-400"></i> My Profile</a>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-slate-50 dark:hover:bg-slate-800"><i
                                class="fa-solid fa-gear w-4 text-slate-400"></i> Settings</a>
                        <div class="my-1 border-t border-slate-100 dark:border-slate-800"></div>
                        <a href="{{ url('/admin/logout') }}"
                            class="flex items-center gap-3 px-4 py-2.5 text-sm font-semibold text-red-500 hover:bg-red-50 dark:hover:bg-slate-800"><i
                                class="fa-solid fa-arrow-right-from-bracket w-4"></i> Logout</a>
                    </div>
                </div>
            </div>
        </header>
