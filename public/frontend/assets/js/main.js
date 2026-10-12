// fixed header
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= 100) {
        $('body').addClass('fixed-header');
    } else {
        $('body').removeClass('fixed-header');
    }
});

//Category Menu js
$(document).ready(function (e) {
    // Cetegory Show
    $(".header__category-icon-outer").on("click", function (e) {
        e.stopPropagation();
        $(".header__category-items-outer").toggleClass("show");
    });
    $(".header__category-items-outer").on("click", function (e) {
        e.stopPropagation();
    });
    $(document).on("click", function (e) {
        $(".header__category-items-outer").removeClass("show");
    });
});

// Navbar Toggle Button For Mini Device
$('.nav-toggle-btn').click(function () {
    $('.header__dynamic-page-wrapper').toggleClass('menu-visible');
    $('body').toggleClass('body-overflow');
});

//Home Slider Js
$('.slider-items-wrapper').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: true,
    cssEase: 'linear'
});

//Categoris Slider
$('.categoris-items-wrapper').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: true
        },
        600: {
            items: 3,
            nav: true
        },
        1000: {
            items: 5,
            nav: true,
            loop: true
        },
        1200: {
            items: 7,
            nav: true,
            loop: true
        }
    }
});

$('.product-items-wrapper').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    prevArrow:
        '<button type="button" class="slick-prev"><i class="fas fa-chevron-right"></i></button>',
    nextArrow:
        '<button type="button" class="slick-next"><i class="fas fa-chevron-left"></i></button>',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});

$('.related-product-items-wrap').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    prevArrow:
        '<button type="button" class="slick-prev"><i class="fas fa-chevron-right"></i></button>',
    nextArrow:
        '<button type="button" class="slick-next"><i class="fas fa-chevron-left"></i></button>',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});

$('.slider-content').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    asNavFor: '.slider-thumb',
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
});
$('.slider-thumb').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-content',
    dots: false,
    centerMode: false,
    focusOnSelect: true
});

//Address Show hide
$('#differentaddress').click(function () {
    $('#collapseAddress').toggle(500);
});


//Search Show hide
$('.res-search').on('click', function () {
    $('.search-form-outer').toggleClass('show');
});

//Filter Item Show
$(document).on("click", ".filter-items-outer .label", function (e) {
    $(this).closest('.filter-items-outer').find(".filter-items").slideToggle();
});

//Thanks Your Js
const Confettiful = function (el) {
    this.el = el;
    this.containerEl = null;

    this.confettiFrequency = 3;
    this.confettiColors = ['#EF2964', '#00C09D', '#2D87B0', '#48485E', '#EFFF1D'];
    this.confettiAnimations = ['slow', 'medium', 'fast'];

    this._setupElements();
    this._renderConfetti();
};

Confettiful.prototype._setupElements = function () {
    const containerEl = document.createElement('div');
    const elPosition = this.el.style.position;

    if (elPosition !== 'relative' || elPosition !== 'absolute') {
        this.el.style.position = 'relative';
    }

    containerEl.classList.add('confetti-container');

    this.el.appendChild(containerEl);

    this.containerEl = containerEl;
};

Confettiful.prototype._renderConfetti = function () {
    this.confettiInterval = setInterval(() => {
        const confettiEl = document.createElement('div');
        const confettiSize = (Math.floor(Math.random() * 3) + 7) + 'px';
        const confettiBackground = this.confettiColors[Math.floor(Math.random() * this.confettiColors.length)];
        const confettiLeft = (Math.floor(Math.random() * this.el.offsetWidth)) + 'px';
        const confettiAnimation = this.confettiAnimations[Math.floor(Math.random() * this.confettiAnimations.length)];

        confettiEl.classList.add('confetti', 'confetti--animation-' + confettiAnimation);
        confettiEl.style.left = confettiLeft;
        confettiEl.style.width = confettiSize;
        confettiEl.style.height = confettiSize;
        confettiEl.style.backgroundColor = confettiBackground;

        confettiEl.removeTimeout = setTimeout(function () {
            confettiEl.parentNode.removeChild(confettiEl);
        }, 3000);

        this.containerEl.appendChild(confettiEl);
    }, 25);
};

window.confettiful = new Confettiful(document.querySelector('.js-container'));

/* features.js – index.html এর একদম শেষে লিংক করুন */
(function () {
    var bn = function (n) { return String(n).replace(/\d/g, function (d) { return '০১২৩৪৫৬৭৮৯'[d]; }); };
    var num = function (t) { return parseInt(String(t).replace(/[^\d]/g, ''), 10) || 0; };
    var safe = function (fn) { try { return fn(); } catch (e) { } };

    /* --- Skeleton loading --- */
    document.body.classList.add('is-loading');
    window.addEventListener('load', function () {
        setTimeout(function () { document.body.classList.remove('is-loading'); }, 600);
    });

    /* --- Hero slider --- */
    var track = document.querySelector('.hero-track');
    if (track) {
        var slides = track.children.length, cur = 0, timer;
        var dots = document.querySelector('.hero-dots');
        for (var i = 0; i < slides; i++) {
            var b = document.createElement('button');
            b.setAttribute('aria-label', 'Slide ' + (i + 1));
            (function (k) { b.onclick = function () { go(k); reset(); }; })(i);
            dots.appendChild(b);
        }
        var go = function (k) {
            cur = (k + slides) % slides;
            track.style.transform = 'translateX(-' + cur * 100 + '%)';
            [].forEach.call(dots.children, function (d, j) { d.classList.toggle('active', j === cur); });
        };
        var reset = function () { clearInterval(timer); timer = setInterval(function () { go(cur + 1); }, 4500); };
        document.querySelector('.hero-prev').onclick = function () { go(cur - 1); reset(); };
        document.querySelector('.hero-next').onclick = function () { go(cur + 1); reset(); };
        go(0); reset();
    }

    /* --- Flash sale countdown (আজ রাত ১২টা পর্যন্ত) --- */
    var hh = document.getElementById('cd-h');
    if (hh) {
        var tick = function () {
            var now = new Date(), end = new Date(now); end.setHours(23, 59, 59, 999);
            var s = Math.floor((end - now) / 1000), p = function (x) { return bn(('0' + x).slice(-2)); };
            hh.textContent = p(Math.floor(s / 3600));
            document.getElementById('cd-m').textContent = p(Math.floor(s % 3600 / 60));
            document.getElementById('cd-s').textContent = p(s % 60);
        };
        tick(); setInterval(tick, 1000);
    }

    /* --- Product card extras: wishlist, quick view, discount %, rating --- */
    var ratings = [5, 4.5, 4, 4.5, 5, 4];
    [].forEach.call(document.querySelectorAll('.product__item-outer'), function (card, idx) {
        var imgBox = card.querySelector('.product__item-image-outer');
        var act = document.createElement('div');
        act.className = 'product-actions';
        act.innerHTML = '<button class="wish" aria-label="Wishlist"><i class="far fa-heart"></i></button>' +
            '<button class="qv" aria-label="Quick view"><i class="far fa-eye"></i></button>';
        imgBox.appendChild(act);

        var oldP = num((card.querySelector('del') || {}).textContent);
        var newP = num((card.querySelector('.product__item-regular-price span') || {}).textContent);
        if (oldP > newP && newP > 0) {
            var d = document.createElement('span');
            d.className = 'discount-badge';
            d.textContent = '-' + bn(Math.round((oldP - newP) / oldP * 100)) + '%';
            imgBox.appendChild(d);
        }

        var r = ratings[idx % ratings.length], stars = '';
        for (var i = 1; i <= 5; i++) stars += i <= r ? '<i class="fas fa-star"></i>' : (i - 0.5 === r ? '<i class="fas fa-star-half-alt"></i>' : '<i class="far fa-star"></i>');
        var rt = document.createElement('div');
        rt.className = 'product-rating';
        rt.innerHTML = stars + '<span>(' + bn(10 + idx * 3) + ')</span>';
        card.querySelector('.product__item-name').after(rt);

        act.querySelector('.wish').onclick = function () {
            this.classList.toggle('active');
            this.firstChild.className = this.classList.contains('active') ? 'fas fa-heart' : 'far fa-heart';
        };
        act.querySelector('.qv').onclick = function () { openQV(card, stars, oldP, newP); };
    });

    /* --- Quick view modal --- */
    var ov = document.createElement('div');
    ov.className = 'qv-overlay';
    ov.innerHTML = '<div class="qv-box" role="dialog" aria-modal="true"><button class="qv-close" aria-label="Close"><i class="fas fa-times"></i></button>' +
        '<img alt=""><div><div class="product-rating" id="qvStars"></div><h3 id="qvName"></h3><div class="qv-price" id="qvPrice"></div>' +
        '<p class="text-muted" style="margin-top:10px">পণ্যের সংক্ষিপ্ত বিবরণ এখানে দেখাবে। মান ভালো, দাম সাশ্রয়ী এবং দ্রুত ডেলিভারি।</p>' +
        '<a href="details.html" class="qv-btn">Add to Cart</a></div></div>';
    document.body.appendChild(ov);
    var closeQV = function () { ov.classList.remove('open'); };
    var openQV = function (card, stars, oldP, newP) {
        ov.querySelector('img').src = card.querySelector('img').src;
        document.getElementById('qvName').textContent = card.querySelector('.product__item-name').textContent.trim();
        document.getElementById('qvStars').innerHTML = stars;
        document.getElementById('qvPrice').innerHTML = '৳ ' + bn(newP) + (oldP ? '<del>৳ ' + bn(oldP) + '</del>' : '');
        ov.classList.add('open');
    };
    ov.onclick = function (e) { if (e.target === ov) closeQV(); };
    ov.querySelector('.qv-close').onclick = closeQV;
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeQV(); });

    /* --- Reviews auto scroll --- */
    var rv = document.querySelector('.review-track');
    if (rv) setInterval(function () {
        if (rv.matches(':hover')) return;
        var w = rv.firstElementChild.offsetWidth + 18;
        rv.scrollLeft + rv.clientWidth >= rv.scrollWidth - 4 ? rv.scrollTo({ left: 0, behavior: 'smooth' }) : rv.scrollBy({ left: w, behavior: 'smooth' });
    }, 4000);

    /* --- Newsletter --- */
    var nf = document.getElementById('newsletterForm');
    if (nf) nf.onsubmit = function (e) {
        e.preventDefault();
        document.getElementById('nlMsg').textContent = 'ধন্যবাদ! আপনি সফলভাবে সাবস্ক্রাইব করেছেন।';
        nf.reset();
    };

    /* --- Back to top --- */
    var tt = document.getElementById('toTop');
    window.addEventListener('scroll', function () { tt.classList.toggle('show', window.scrollY > 400); });
    tt.onclick = function () { window.scrollTo({ top: 0, behavior: 'smooth' }); };

    /* --- Dark mode --- */
    var tg = document.querySelector('.theme-toggle');
    var applyTheme = function (dark) {
        document.body.classList.toggle('dark', dark);
        tg.innerHTML = dark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
    };
    applyTheme(safe(function () { return localStorage.getItem('theme') === 'dark'; }));
    tg.onclick = function () {
        var d = !document.body.classList.contains('dark');
        applyTheme(d);
        safe(function () { localStorage.setItem('theme', d ? 'dark' : 'light'); });
    };
})();