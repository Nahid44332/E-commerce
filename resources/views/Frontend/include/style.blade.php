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

    <style>
      /* Minimalist & Professional Glass Cursor */
.magic-cursor-dot,
.magic-cursor-ring {
    pointer-events: none;
    position: fixed;
    top: 0;
    left: 0;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: 999999;
    transition: transform 0.1s ease-out, background-color 0.2s, border-color 0.2s;
}

.magic-cursor-dot {
    width: 6px;
    height: 6px;
    background: #0f7a4f; /* ব্র্যান্ড গ্রিন */
}

.magic-cursor-ring {
    width: 32px;
    height: 32px;
    border: 1.5px solid rgba(15, 122, 79, 0.4);
    background-color: rgba(15, 122, 79, 0.03);
    transition: width 0.2s ease, height 0.2s ease, background-color 0.2s, border-color 0.2s;
}

/* বাটন বা লিঙ্কে গেলে জাস্ট হালকা একটু শিং বা বড় হবে, কোনো বিচ্ছিরি গ্লো করবে না */
body.cursor-hover .magic-cursor-ring {
    width: 44px;
    height: 44px;
    border-color: #f59f1b; /* অ্যাম্বার অ্যাকসেন্ট */
    background-color: rgba(245, 159, 27, 0.08);
}

/* ক্যানভাস বা স্পার্কল ঝামেলা চিরতরে বাদ! তাই ক্যানভাস ট্যাগ রিমুভ করে দেওয়া হয়েছে। */
  </style>