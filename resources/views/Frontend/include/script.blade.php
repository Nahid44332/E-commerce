 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/assets/plugins/slick-slider/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script>
        new WOW().init();
        $('.res-search').on('click', function() {
            $('.search-form-outer').toggleClass('show');
        });
        $('.categoris-items-wrapper').owlCarousel({
            loop: false,
            margin: 12,
            nav: true,
            dots: false,
            navText: ['‹', '›'],
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 6
                }
            }
        });
    </script>
    <script>
        (function() {
            var h = document.getElementById('cd-h'),
                m = document.getElementById('cd-m'),
                c = document.getElementById('cd-s');
            if (!h) return;
            var bn = function(n) {
                return String(n).replace(/[0-9]/g, function(d) {
                    return '০১২৩৪৫৬৭৮৯'.charAt(d);
                });
            };
            var p = function(x) {
                return bn((x < 10 ? '0' : '') + x);
            };

            function tick() {
                var n = new Date(),
                    e = new Date(n);
                e.setHours(23, 59, 59, 999);
                var t = Math.floor((e - n) / 1000);
                h.textContent = p(Math.floor(t / 3600));
                m.textContent = p(Math.floor(t % 3600 / 60));
                c.textContent = p(t % 60);
            }
            tick();
            setInterval(tick, 1000);
        })();
    </script>
    <script src="{{ asset('frontend/assets/js/features.js') }}"></script>
     <script>
(function() {
    const dot = document.getElementById('cursorDot');
    const ring = document.getElementById('cursorRing');
    const canvas = document.getElementById('magic-canvas');
    const ctx = canvas.getContext('2d');

    let mouse = { x: -100, y: -100 };
    let ringPos = { x: -100, y: -100 };
    let particles = [];

    // থিম ম্যাচিং কালার প্যালেট
    const colors = ['#0f7a4f', '#f59f1b', '#2ecc71', '#ffc107', '#ffffff'];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    // মাউস পজিশন ট্র্যাকিং
    window.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;

        // দ্রুত পয়েন্টার ডট
        dot.style.left = `${mouse.x}px`;
        dot.style.top = `${mouse.y}px`;

        // মাউস নাড়ালে পেছনের স্পার্কল তৈরি
        if (Math.random() < 0.6) {
            createParticle(mouse.x, mouse.y, false);
        }
    });

    // ক্লিকে ম্যাজিক বাস্ট/আতশবাজি ইফেক্ট
    window.addEventListener('click', (e) => {
        for (let i = 0; i < 20; i++) {
            createParticle(e.clientX, e.clientY, true);
        }
    });

    // স্পার্কল কণা তৈরির ফাংশন
    function createParticle(x, y, isBurst) {
        const size = isBurst ? Math.random() * 6 + 3 : Math.random() * 4 + 1.5;
        const speed = isBurst ? Math.random() * 5 + 2 : Math.random() * 1.5 + 0.2;
        const angle = Math.random() * Math.PI * 2;

        particles.push({
            x: x,
            y: y,
            size: size,
            vx: Math.cos(angle) * speed,
            vy: Math.sin(angle) * speed + (isBurst ? 0 : -0.5),
            color: colors[Math.floor(Math.random() * colors.length)],
            alpha: 1,
            decay: isBurst ? Math.random() * 0.03 + 0.015 : Math.random() * 0.02 + 0.01
        });
    }

    // প্রধান অ্যানিমেশন লুপ
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // স্মুথ লার্পিং (Smooth Lagging Effect for Ring)
        ringPos.x += (mouse.x - ringPos.x) * 0.18;
        ringPos.y += (mouse.y - ringPos.y) * 0.18;
        ring.style.left = `${ringPos.x}px`;
        ring.style.top = `${ringPos.y}px`;

        // কণা ড্র ও আপডেট করা
        for (let i = particles.length - 1; i >= 0; i--) {
            let p = particles[i];
            p.x += p.vx;
            p.y += p.vy;
            p.alpha -= p.decay;

            if (p.alpha <= 0) {
                particles.splice(i, 1);
                continue;
            }

            ctx.save();
            ctx.globalAlpha = p.alpha;
            ctx.fillStyle = p.color;
            ctx.shadowBlur = 8;
            ctx.shadowColor = p.color;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }

        requestAnimationFrame(animate);
    }
    animate();

    // বাটন/লিঙ্ক হোভার ইফেক্ট
    const interactiveElements = 'a, button, input, select, textarea, [role="button"]';
    document.addEventListener('mouseover', (e) => {
        if (e.target.closest(interactiveElements)) {
            document.body.classList.add('cursor-hover');
        }
    });
    document.addEventListener('mouseout', (e) => {
        if (e.target.closest(interactiveElements)) {
            document.body.classList.remove('cursor-hover');
        }
    });
})();
</script>