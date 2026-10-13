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

        act.querySelector('.wish').onclick = function () { toggleWish(card); };
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

    /* --- Stock progress bar --- */
    var left = [5, 12, 8, 3, 20, 7, 15, 4, 9, 25], TOTAL = 50;
    [].forEach.call(document.querySelectorAll('.product__item-outer'), function (card, idx) {
        var l = left[idx % left.length], pct = Math.round((TOTAL - l) / TOTAL * 100);
        var el = document.createElement('div');
        el.className = 'stock-info';
        el.innerHTML = '<div class="stock-text' + (l <= 10 ? ' low' : '') + '"><span>আর মাত্র <b>' + bn(l) + '</b>টি বাকি</span><span>' + bn(pct) + '% বিক্রি</span></div>' +
            '<div class="stock-bar"><span class="stock-fill" data-w="' + pct + '"></span></div>';
        card.querySelector('.product__item-info-outer').appendChild(el);
    });
    var fills = document.querySelectorAll('.stock-fill');
    var showFill = function (f) { f.style.width = f.getAttribute('data-w') + '%'; };
    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (es) {
            es.forEach(function (e) { if (e.isIntersecting) { showFill(e.target); io.unobserve(e.target); } });
        }, { threshold: 0.3 });
        [].forEach.call(fills, function (f) { io.observe(f); });
    } else { [].forEach.call(fills, showFill); }

    /* --- Offer popup (প্রতি সেশনে একবার) --- */
    var op = document.getElementById('offerPopup');
    if (op) {
        var closeOffer = function () { op.classList.remove('open'); safe(function () { sessionStorage.setItem('offerSeen', '1'); }); };
        if (!safe(function () { return sessionStorage.getItem('offerSeen'); })) setTimeout(function () { op.classList.add('open'); }, 3000);
        document.getElementById('offerClose').onclick = closeOffer;
        op.onclick = function (e) { if (e.target === op) closeOffer(); };
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeOffer(); });
        document.getElementById('offerCopy').onclick = function () {
            var btn = this, code = document.getElementById('offerCode').textContent;
            var done = function () { btn.textContent = 'কপি হয়েছে ✓'; setTimeout(function () { btn.textContent = 'কপি'; }, 1800); };
            if (navigator.clipboard && navigator.clipboard.writeText) navigator.clipboard.writeText(code).then(done, done);
            else { var t = document.createElement('textarea'); t.value = code; document.body.appendChild(t); t.select(); safe(function () { document.execCommand('copy'); }); t.remove(); done(); }
        };
    }

    /* --- Wishlist + toast + cart count --- */
    var WK = 'nm_wishlist', CK = 'nm_cartcount';
    var load = function (k, def) { var v = safe(function () { return JSON.parse(localStorage.getItem(k)); }); return v === null || v === undefined ? def : v; };
    var save = function (k, v) { safe(function () { localStorage.setItem(k, JSON.stringify(v)); }); };
    var esc = function (t) { return String(t).replace(/[&<>"']/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]; }); };
    var wish = load(WK, []), cartCount = load(CK, 1);
    var cardsAll = document.querySelectorAll('.product__item-outer');

    function toast(msg, icon) {
        var w = document.getElementById('toastWrap'); if (!w) return;
        var t = document.createElement('div');
        t.className = 'toast';
        t.innerHTML = '<i class="fas ' + (icon || 'fa-check-circle') + '"></i> ' + msg;
        w.appendChild(t);
        setTimeout(function () { t.classList.add('hide'); }, 2200);
        setTimeout(function () { t.remove(); }, 2700);
    }
    function cardData(card) {
        return {
            name: card.querySelector('.product__item-name').textContent.trim(),
            price: card.querySelector('.product__item-regular-price span').textContent.trim(),
            img: card.querySelector('img').getAttribute('src')
        };
    }
    function wishIndex(name) { for (var i = 0; i < wish.length; i++) if (wish[i].name === name) return i; return -1; }
    function toggleWish(card) {
        var d = cardData(card), i = wishIndex(d.name);
        if (i >= 0) { wish.splice(i, 1); toast('পছন্দের তালিকা থেকে সরানো হয়েছে', 'fa-heart-broken'); }
        else { wish.push(d); toast('পছন্দের তালিকায় যোগ হয়েছে', 'fa-heart'); }
        save(WK, wish); renderWish();
    }
    function renderCartCount() {
        [].forEach.call(document.querySelectorAll('.cart-count'), function (e) { e.textContent = bn(cartCount); });
    }
    function renderWish() {
        [].forEach.call(cardsAll, function (card) {
            var on = wishIndex(card.querySelector('.product__item-name').textContent.trim()) >= 0;
            var b = card.querySelector('.wish'); if (!b) return;
            b.classList.toggle('active', on);
            b.firstChild.className = on ? 'fas fa-heart' : 'far fa-heart';
        });
        [].forEach.call(document.querySelectorAll('.wish-count'), function (e) {
            e.textContent = bn(wish.length); e.style.display = wish.length ? '' : 'none';
        });
        var tc = document.getElementById('wishTitleCount'); if (tc) tc.textContent = wish.length ? '(' + bn(wish.length) + ')' : '';
        var list = document.getElementById('wishList'); if (!list) return;
        list.innerHTML = wish.length ? wish.map(function (w, i) {
            return '<div class="wish-item"><img src="' + esc(w.img) + '" alt="' + esc(w.name) + '"><div><b>' + esc(w.name) + '</b><span class="wish-price">' + esc(w.price) + '</span>' +
                '<div class="wish-actions"><button type="button" class="w-cart" data-i="' + i + '"><i class="fas fa-cart-plus"></i> কার্টে নিন</button>' +
                '<button type="button" class="w-del" data-i="' + i + '"><i class="fas fa-trash-alt"></i> সরান</button></div></div></div>';
        }).join('') : '<div class="wish-empty"><i class="far fa-heart"></i><p>আপনার পছন্দের তালিকা এখন খালি।<br>পণ্যের হার্টে চাপ দিয়ে যোগ করুন।</p></div>';
    }
    var wd = document.getElementById('wishDrawer'), wo = document.getElementById('wishOverlay');
    function openWish() { wd.classList.add('open'); wo.classList.add('open'); document.body.style.overflow = 'hidden'; }
    function closeWish() { wd.classList.remove('open'); wo.classList.remove('open'); document.body.style.overflow = ''; }
    if (wd) {
        ['wishOpen', 'wishOpenM'].forEach(function (id) {
            var b = document.getElementById(id); if (b) b.onclick = function (e) { e.preventDefault(); openWish(); };
        });
        document.getElementById('wishClose').onclick = closeWish;
        wo.onclick = closeWish;
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeWish(); });
        document.getElementById('wishClear').onclick = function () { if (wish.length) { wish = []; save(WK, wish); renderWish(); toast('তালিকা খালি করা হয়েছে', 'fa-trash-alt'); } };
        document.getElementById('wishList').onclick = function (e) {
            var b = e.target.closest('button[data-i]'); if (!b) return;
            var i = +b.getAttribute('data-i');
            if (b.classList.contains('w-del')) { wish.splice(i, 1); save(WK, wish); renderWish(); toast('তালিকা থেকে সরানো হয়েছে', 'fa-heart-broken'); }
            else { cartCount++; save(CK, cartCount); renderCartCount(); toast('কার্টে যোগ হয়েছে', 'fa-check-circle'); }
        };
    }
    renderWish(); renderCartCount();
})();