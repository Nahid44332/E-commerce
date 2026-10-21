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

    let mouse = { x: -100, y: -100 };
    let ringPos = { x: -100, y: -100 };

    window.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;

        // ডট সঙ্গে সঙ্গে ফলো করবে
        dot.style.left = `${mouse.x}px`;
        dot.style.top = `${mouse.y}px`;
    });

    // স্মুথ রিং অ্যানিমেশন লুপ
    function animate() {
        ringPos.x += (mouse.x - ringPos.x) * 0.2;
        ringPos.y += (mouse.y - ringPos.y) * 0.2;
        
        ring.style.left = `${ringPos.x}px`;
        ring.style.top = `${ringPos.y}px`;

        requestAnimationFrame(animate);
    }
    animate();

    // ইন্টারঅ্যাক্টিভ এলিমেন্ট হোভার হ্যান্ডলিং
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