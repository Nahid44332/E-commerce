<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | NexCart</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #080b16;
            color: #ffffff;
        }

        .page-bg {
            background:
                radial-gradient(
                    circle at 15% 20%,
                    rgba(99, 102, 241, 0.13),
                    transparent 35%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(14, 165, 233, 0.10),
                    transparent 35%
                ),
                #080b16;
        }

        .login-card {
            background: rgba(17, 24, 43, 0.85);
            border: 1px solid rgba(148, 163, 184, 0.13);
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.25);
        }

        .input-box {
            background: #0b1020;
            border: 1px solid #273047;
            transition: all 0.3s ease;
        }

        .input-box:focus-within {
            border-color: #818cf8;
            box-shadow: 0 0 0 3px rgba(129, 140, 248, 0.10);
        }

        .input-box input {
            outline: none;
            background: transparent;
        }

        .primary-btn {
            background: linear-gradient(110deg, #6366f1, #4f46e5);
            transition: all 0.3s ease;
        }

        .primary-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(99, 102, 241, 0.25);
        }

        .illustration-card {
            background: linear-gradient(
                145deg,
                rgba(30, 41, 70, 0.85),
                rgba(13, 19, 36, 0.90)
            );

            border: 1px solid rgba(129, 140, 248, 0.18);
            border-radius: 24px;
        }

        .scene {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(
                    circle at 50% 20%,
                    rgba(99, 102, 241, 0.14),
                    transparent 55%
                ),
                #0d1427;
        }

        .scene::before {
            content: "";
            position: absolute;
            inset: 0;

            background-image: radial-gradient(
                rgba(148, 163, 184, 0.20) 1px,
                transparent 1px
            );

            background-size: 24px 24px;
            opacity: 0.35;
        }

        .building {
            position: absolute;
            bottom: 55px;
            width: 85px;
            height: 125px;
            background: linear-gradient(180deg, #293654, #172239);
            border: 1px solid #465575;
            border-radius: 7px 7px 0 0;
        }

        .building-window {
            width: 13px;
            height: 15px;
            border-radius: 3px;
            background: #818cf8;
            box-shadow: 0 0 10px rgba(129, 140, 248, 0.25);
        }

        .store {
            position: absolute;
            left: 6%;
            bottom: 55px;
            width: 100px;
            height: 105px;
        }

        .store-roof {
            height: 32px;
            background: #6366f1;
            border-radius: 8px 8px 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .store-body {
            height: 73px;
            background: #1c2942;
            border: 1px solid #475569;
            border-top: 0;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 8px;
            padding-bottom: 0;
        }

        .store-door {
            width: 29px;
            height: 48px;
            background: #111b30;
            border: 1px solid #53617d;
            border-bottom: 0;
            border-radius: 4px 4px 0 0;
        }

        .package {
            width: 36px;
            height: 34px;
            background: linear-gradient(145deg, #fbbf24, #d97706);
            border-radius: 5px;
            position: relative;
            box-shadow: 0 7px 18px rgba(245, 158, 11, 0.15);
        }

        .package::before {
            content: "";
            position: absolute;
            top: 0;
            left: 14px;
            height: 100%;
            width: 7px;
            background: rgba(255, 255, 255, 0.22);
        }

        .courier-van {
            position: absolute;
            left: 42%;
            bottom: 66px;
            width: 125px;
            height: 59px;
        }

        .van-body {
            position: absolute;
            bottom: 9px;
            width: 87px;
            height: 43px;
            background: linear-gradient(135deg, #818cf8, #4f46e5);
            border-radius: 8px 8px 3px 3px;
        }

        .van-cabin {
            position: absolute;
            right: 0;
            bottom: 9px;
            width: 42px;
            height: 33px;
            background: #6366f1;
            clip-path: polygon(0 0, 70% 0, 100% 45%, 100% 100%, 0 100%);
            border-radius: 4px;
        }

        .van-window {
            position: absolute;
            right: 5px;
            bottom: 25px;
            width: 23px;
            height: 12px;
            background: #bfdbfe;
            clip-path: polygon(0 0, 70% 0, 100% 100%, 0 100%);
        }

        .wheel {
            position: absolute;
            bottom: 0;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #080b16;
            border: 5px solid #94a3b8;
            z-index: 2;
        }

        .wheel-one {
            left: 15px;
        }

        .wheel-two {
            right: 10px;
        }

        .customer {
            position: absolute;
            right: 8%;
            bottom: 55px;
            width: 65px;
            height: 112px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .person-head {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #f1c7a5;
            border: 3px solid #f8d7b5;
        }

        .person-body {
            width: 43px;
            height: 48px;
            margin-top: -1px;
            background: linear-gradient(180deg, #06b6d4, #0891b2);
            border-radius: 12px 12px 5px 5px;
        }

        .person-leg {
            display: flex;
            gap: 6px;
        }

        .person-leg span {
            width: 12px;
            height: 27px;
            background: #334155;
            border-radius: 3px;
        }

        .delivery-line {
            position: absolute;
            left: 18%;
            right: 15%;
            bottom: 145px;
            height: 2px;
            border-top: 2px dashed #818cf8;
            opacity: 0.8;
        }

        .delivery-point {
            position: absolute;
            top: -5px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #a5b4fc;
            box-shadow: 0 0 12px #818cf8;
        }

        .delivery-point:nth-child(1) {
            left: 0;
        }

        .delivery-point:nth-child(2) {
            left: 48%;
        }

        .delivery-point:nth-child(3) {
            right: 0;
        }

        .floating-box {
            animation: float 3s ease-in-out infinite;
        }

        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }

        .floating-icon.delay {
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        @media (max-width: 767px) {
            .scene {
                min-height: 300px;
            }

            .store {
                transform: scale(0.78);
                transform-origin: bottom left;
            }

            .courier-van {
                transform: scale(0.80);
                transform-origin: bottom left;
                left: 38%;
            }

            .customer {
                transform: scale(0.82);
                transform-origin: bottom right;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body class="page-bg min-h-screen">

    <main class="min-h-screen flex items-center justify-center px-4 py-8 sm:px-6">

        <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-14 items-center">

            <!-- LEFT: BRAND & DELIVERY JOURNEY -->
            <section class="w-full">

                <!-- Brand -->
                <a href="#" class="inline-flex items-center gap-3 mb-8">

                    <div class="w-12 h-12 rounded-2xl bg-indigo-500
                                flex items-center justify-center
                                shadow-lg shadow-indigo-500/20">

                        <i class="fa-solid fa-cube text-white text-xl"></i>

                    </div>

                    <div>
                        <h1 class="text-2xl font-extrabold tracking-tight">
                            Nex<span class="text-indigo-400">Cart</span>
                        </h1>

                        <p class="text-xs text-slate-400 tracking-widest">
                            SMART COMMERCE
                        </p>
                    </div>

                </a>

                <!-- Heading -->
                <div class="mb-7">

                    <p class="text-indigo-400 text-sm font-semibold mb-3">
                        <i class="fa-solid fa-bolt mr-2"></i>
                        YOUR BUSINESS, CONNECTED
                    </p>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl
                               font-extrabold leading-tight">

                        From Your Store
                        <span class="text-indigo-400">To Their Door.</span>

                    </h2>

                    <p class="text-slate-400 leading-7 mt-4 max-w-lg">
                        Manage your products, connect with courier services,
                        and bring every order closer to your customer.
                    </p>

                </div>

                <!-- Illustration Card -->
                <div class="illustration-card p-3 sm:p-4">

                    <div class="flex items-center justify-between px-2 py-2 mb-3">

                        <div>
                            <p class="text-sm font-semibold">
                                Your delivery journey
                            </p>

                            <p class="text-xs text-slate-500 mt-1">
                                Store to customer
                            </p>
                        </div>

                        <span class="flex items-center gap-2 text-xs
                                     text-emerald-400">

                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            Connected

                        </span>

                    </div>

                    <!-- CSS Delivery Illustration -->
                    <div class="scene rounded-2xl h-72 sm:h-80">

                        <!-- Background Buildings -->
                        <div class="building" style="left: 27%; height: 95px;">
                            <div class="grid grid-cols-2 gap-3 p-3">
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                            </div>
                        </div>

                        <div class="building" style="left: 68%; height: 135px; width: 62px;">
                            <div class="grid grid-cols-2 gap-2 p-2">
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                                <span class="building-window"></span>
                            </div>
                        </div>

                        <!-- Delivery Route -->
                        <div class="delivery-line">
                            <span class="delivery-point"></span>
                            <span class="delivery-point"></span>
                            <span class="delivery-point"></span>
                        </div>

                        <!-- Store -->
                        <div class="store">

                            <div class="store-roof">
                                YOUR STORE
                            </div>

                            <div class="store-body">
                                <div class="store-door"></div>
                                <div class="package"></div>
                            </div>

                        </div>

                        <!-- Floating Package -->
                        <div class="floating-box absolute left-[25%] top-[20%]">

                            <div class="w-10 h-10 rounded-xl bg-amber-400/15
                                        border border-amber-400/30
                                        flex items-center justify-center">

                                <i class="fa-solid fa-box text-amber-400"></i>

                            </div>

                        </div>

                        <!-- Courier Van -->
                        <div class="courier-van">

                            <div class="van-body"></div>
                            <div class="van-cabin"></div>
                            <div class="van-window"></div>

                            <div class="wheel wheel-one"></div>
                            <div class="wheel wheel-two"></div>

                        </div>

                        <!-- Floating Delivery Icon -->
                        <div class="floating-icon delay absolute right-[18%] top-[18%]">

                            <div class="w-10 h-10 rounded-xl bg-cyan-400/15
                                        border border-cyan-400/30
                                        flex items-center justify-center">

                                <i class="fa-solid fa-location-dot text-cyan-400"></i>

                            </div>

                        </div>

                        <!-- Customer -->
                        <div class="customer">

                            <div class="person-head"></div>

                            <div class="person-body"></div>

                            <div class="person-leg">
                                <span></span>
                                <span></span>
                            </div>

                        </div>

                        <!-- Ground -->
                        <div class="absolute bottom-[54px] left-0 right-0
                                    h-px bg-slate-600/60"></div>

                        <!-- Ground Labels -->
                        <div class="absolute bottom-4 left-0 right-0
                                    flex justify-around text-center">

                            <div>
                                <p class="text-xs font-semibold text-slate-200">
                                    Store
                                </p>
                                <p class="text-[10px] text-slate-500 mt-1">
                                    Pack
                                </p>
                            </div>

                            <div>
                                <p class="text-xs font-semibold text-slate-200">
                                    Courier
                                </p>
                                <p class="text-[10px] text-slate-500 mt-1">
                                    Ship
                                </p>
                            </div>

                            <div>
                                <p class="text-xs font-semibold text-slate-200">
                                    Customer
                                </p>
                                <p class="text-[10px] text-slate-500 mt-1">
                                    Deliver
                                </p>
                            </div>

                        </div>

                    </div>

                    <!-- Features -->
                    <div class="grid grid-cols-3 gap-3 mt-4">

                        <div class="rounded-xl bg-slate-900/70 p-3 text-center">

                            <i class="fa-solid fa-box-open text-indigo-400 mb-2"></i>

                            <p class="text-xs text-slate-300">
                                Smart Orders
                            </p>

                        </div>

                        <div class="rounded-xl bg-slate-900/70 p-3 text-center">

                            <i class="fa-solid fa-truck-fast text-cyan-400 mb-2"></i>

                            <p class="text-xs text-slate-300">
                                Fast Shipping
                            </p>

                        </div>

                        <div class="rounded-xl bg-slate-900/70 p-3 text-center">

                            <i class="fa-solid fa-house-circle-check text-emerald-400 mb-2"></i>

                            <p class="text-xs text-slate-300">
                                Safe Delivery
                            </p>

                        </div>

                    </div>

                </div>

                <p class="text-xs text-slate-600 mt-5 text-center md:text-left">
                    © 2026 NexCart. Built for modern commerce.
                </p>

            </section>


            <!-- RIGHT: LOGIN FORM -->
            <section class="w-full max-w-md mx-auto md:ml-auto">

                <div class="login-card rounded-3xl p-6 sm:p-9">

                    <!-- Login Header -->
                    <div class="mb-8">

                        <div class="w-14 h-14 rounded-2xl
                                    bg-indigo-500/15 border border-indigo-400/20
                                    flex items-center justify-center mb-5">

                            <i class="fa-solid fa-user-lock text-2xl text-indigo-400"></i>

                        </div>

                        <h2 class="text-3xl font-bold">
                            Welcome back!
                        </h2>

                        <p class="text-slate-400 text-sm mt-3 leading-6">
                            Sign in to manage your store and keep your orders moving.
                        </p>

                    </div>

                    <!-- Form -->
                    <form id="loginForm" action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Email -->
                        <div class="mb-5">

                            <label for="email"
                                   class="block text-sm font-medium
                                          text-slate-300 mb-2">

                                Email address

                            </label>

                            <div class="input-box flex items-center rounded-xl px-4">

                                <i class="fa-regular fa-envelope text-slate-500"></i>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="you@example.com"
                                    autocomplete="email"
                                    required
                                    class="w-full py-4 pl-3 text-sm text-white
                                           placeholder-slate-600"
                                >

                            </div>

                        </div>


                        <!-- Password -->
                        <div class="mb-5">

                            <div class="flex justify-between items-center mb-2">

                                <label for="password"
                                       class="text-sm font-medium text-slate-300">

                                    Password

                                </label>

                                <a href="#"
                                   class="text-xs text-indigo-400 hover:text-indigo-300">

                                    Forgot password?

                                </a>

                            </div>

                            <div class="input-box flex items-center rounded-xl px-4">

                                <i class="fa-solid fa-lock text-slate-500"></i>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Enter your password"
                                    autocomplete="current-password"
                                    required
                                    class="w-full py-4 pl-3 text-sm text-white
                                           placeholder-slate-600"
                                >

                                <button
                                    type="button"
                                    id="togglePassword"
                                    class="text-xs font-semibold text-indigo-400
                                           hover:text-indigo-300 ml-2"
                                    aria-label="Show password"
                                    aria-pressed="false"
                                >
                                    Show
                                </button>

                            </div>

                        </div>


                        <!-- Remember Me -->
                        <div class="flex items-center justify-between mb-7">

                            <label class="flex items-center gap-2 cursor-pointer">

                                <input
                                    type="checkbox"
                                    name="remember"
                                    class="w-4 h-4 accent-indigo-500"
                                >

                                <span class="text-sm text-slate-400">
                                    Remember me
                                </span>

                            </label>

                            <span class="text-xs text-slate-500">
                                <i class="fa-solid fa-shield-halved mr-1"></i>
                                Secure access
                            </span>

                        </div>


                        <!-- Login Button -->
                        <button
                            type="submit"
                            class="primary-btn w-full py-4 rounded-xl
                                   font-semibold text-sm flex items-center
                                   justify-center gap-3"
                        >

                            Sign In to Your Account

                            <i class="fa-solid fa-arrow-right"></i>

                        </button>

                    </form>


                    {{-- <!-- Register -->
                    <div class="text-center mt-7">

                        <p class="text-sm text-slate-400">

                            New to NexCart?

                            <a href="#"
                               class="text-indigo-400 font-semibold
                                      hover:text-indigo-300 ml-1">

                                Create an account

                            </a>

                        </p>

                    </div> --}}


                    <!-- Divider -->
                    <div class="flex items-center gap-4 my-7">

                        <div class="flex-1 h-px bg-slate-700/70"></div>

                        <span class="text-[10px] tracking-widest text-slate-500">
                            YOUR BUSINESS, SIMPLIFIED
                        </span>

                        <div class="flex-1 h-px bg-slate-700/70"></div>

                    </div>


                    <!-- Security Footer -->
                    <div class="flex items-start gap-3 rounded-xl
                                bg-slate-900/70 border border-slate-700/40 p-4">

                        <i class="fa-solid fa-shield-halved text-emerald-400 mt-1"></i>

                        <div>

                            <p class="text-xs font-semibold text-slate-300">
                                Your store, your control
                            </p>

                            <p class="text-xs text-slate-500 leading-5 mt-1">
                                Access your account to manage products,
                                orders and delivery operations.
                            </p>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </main>


    <!-- JavaScript -->
    <script>

        // Show / Hide Password
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function () {

            const isHidden = passwordInput.type === 'password';

            passwordInput.type = isHidden ? 'text' : 'password';

            togglePassword.textContent = isHidden ? 'Hide' : 'Show';

            togglePassword.setAttribute(
                'aria-pressed',
                String(isHidden)
            );

            togglePassword.setAttribute(
                'aria-label',
                isHidden ? 'Hide password' : 'Show password'
            );

        });

    </script>

</body>
</html>