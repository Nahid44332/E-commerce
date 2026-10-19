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
      /* Eye-Catching Interactive Magic Cursor */
      .magic-cursor-dot,
      .magic-cursor-ring {
          pointer-events: none;
          position: fixed;
          top: 0;
          left: 0;
          transform: translate(-50%, -50%);
          border-radius: 50%;
          z-index: 999999;
      }

      .magic-cursor-dot {
          width: 10px;
          height: 10px;
          background: #f59f1b;
          /* অ্যাম্বার অ্যাকসেন্ট */
          box-shadow: 0 0 10px #f59f1b, 0 0 20px #f59f1b;
      }

      .magic-cursor-ring {
          width: 38px;
          height: 38px;
          border: 2px solid #0f7a4f;
          /* ব্র্যান্ড গ্রিন */
          box-shadow: 0 0 12px rgba(15, 122, 79, 0.4);
          transition: width 0.25s ease-out, height 0.25s ease-out, background-color 0.25s, border-color 0.25s;
      }

      /* বাটন/লিঙ্কে হোভার করলে রিং বড় ও গ্লো করবে */
      body.cursor-hover .magic-cursor-ring {
          width: 55px;
          height: 55px;
          border-color: #f59f1b;
          background-color: rgba(245, 159, 27, 0.15);
          box-shadow: 0 0 20px rgba(245, 159, 27, 0.6);
      }

      /* ক্যানভাস ফর পার্টিকল ও স্পার্কল */
      #magic-canvas {
          pointer-events: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100vw;
          height: 100vh;
          z-index: 999998;
      }
  </style>