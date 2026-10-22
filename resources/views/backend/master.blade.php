<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Nitto Mart Admin</title>
    @include('backend.include.style')
</head>

<body class="bg-slate-100 text-slate-800 transition-colors duration-300 dark:bg-slate-950 dark:text-slate-200">
   
    <!-- ===== Sidebar ===== -->
   @include('backend.include.sidebar')

    <div id="sbOverlay" class="fixed inset-0 z-40 hidden bg-black/50 backdrop-blur-sm lg:hidden"></div>

    <!-- ===== Main Wrapper ===== -->
    <div id="mainWrap" class="flex min-h-screen flex-col transition-all duration-300 lg:pl-64">

        <!-- Topbar -->
     @include('backend.include.header')
        <!-- Main Content -->
        <main class="flex-1 p-3 sm:p-6">
            <div class="mx-auto max-w-[1500px]">

          @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="border-t border-slate-200 px-6 py-4 text-center text-xs text-slate-400 dark:border-slate-800">
            © 2026 Nitto Mart Admin. All rights reserved.
        </footer>
    </div>

    <!-- JavaScript -->
@include('backend.include.script')

@stack('script')
</body>

</html>
