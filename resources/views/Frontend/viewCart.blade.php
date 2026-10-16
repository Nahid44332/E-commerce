@extends('frontend.master')
@section('title', 'Cart | Nitto Mart')
@section('contant')
@php
    /* ===================== DUMMY DATA =====================
       Backend এলে এই অ্যারে মুছে Controller থেকে পাঠান:
       return view('frontend.cart', compact('cartItems'));
       প্রতিটি আইটেমে লাগবে: id, name, price, qty, color, size, image
       ====================================================== */
    $cartItems = [
        ['id' => 1, 'name' => 'Test Product',  'price' => 300, 'qty' => 1, 'color' => 'Red',   'size' => 'M', 'image' => 'frontend/assets/images/product.png'],
        ['id' => 2, 'name' => 'Kids T-Shirt',  'price' => 280, 'qty' => 1, 'color' => 'Blue',  'size' => 'L', 'image' => 'frontend/assets/images/product.png'],
        ['id' => 3, 'name' => 'Water Bottle',  'price' => 320, 'qty' => 1, 'color' => 'Black', 'size' => null, 'image' => 'frontend/assets/images/product.png'],
    ];
    $subtotal = collect($cartItems)->sum(fn ($i) => $i['price'] * $i['qty']);
    $totalQty = collect($cartItems)->sum('qty');
@endphp
@verbatim
<style>
/* ================= CART PAGE ================= */
.ct-section{padding:30px 0 10px}
.ct-layout{display:grid;grid-template-columns:1fr 360px;gap:24px;align-items:start}
.ct-top{display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap;margin-bottom:16px}
.ct-btn{display:inline-flex;align-items:center;gap:8px;background:var(--brand);color:#fff;font-weight:700;padding:10px 22px;border-radius:50px;border:0;cursor:pointer;transition:.2s}
.ct-btn:hover{background:var(--brand-dark);color:#fff}
.ct-btn.ghost{background:transparent;color:var(--danger);border:2px solid #f3c4c4}
.ct-btn.ghost:hover{background:#fdecec;color:var(--danger)}
.ct-card{background:var(--card);border-radius:var(--r-lg);box-shadow:var(--shadow)}
.ct-head,.ct-row{display:grid;grid-template-columns:84px 1fr 90px 130px 100px 44px;gap:14px;align-items:center;padding:14px 20px}
.ct-head{font-weight:700;font-size:14px;color:var(--muted);border-bottom:2px solid var(--line)}
.ct-row{border-bottom:1px solid var(--line)}
.ct-row:last-child{border-bottom:0}
.ct-img img{width:84px;height:84px;object-fit:cover;border-radius:var(--r-sm);border:1px solid var(--line);background:#f1f3f5}
.ct-name a{font-weight:700;display:block;line-height:1.3}
.ct-name small{color:var(--muted)}
.ct-price,.ct-total{font-weight:700}
.ct-total{color:var(--brand)}
.ct-qty{display:inline-flex;align-items:center;border:2px solid var(--line);border-radius:50px;overflow:hidden;width:fit-content}
.ct-qty button{width:34px;height:38px;border:0;background:transparent;color:var(--ink);cursor:pointer}
.ct-qty button:hover{background:var(--brand-soft)}
.ct-qty input{width:40px;height:38px;border:0;text-align:center;font-weight:700;background:transparent;color:var(--ink);outline:0;-moz-appearance:textfield}
.ct-qty input::-webkit-outer-spin-button,.ct-qty input::-webkit-inner-spin-button{-webkit-appearance:none}
.ct-del{width:38px;height:38px;border:0;border-radius:50%;background:#fdecec;color:var(--danger);cursor:pointer;transition:.2s}
.ct-del:hover{background:var(--danger);color:#fff}
.ct-empty{text-align:center;padding:70px 20px}
.ct-empty i{font-size:64px;color:var(--line)}
.ct-empty h3{margin:14px 0 6px;font-weight:700}
.ct-empty p{color:var(--muted);margin-bottom:18px}
.ct-summary{position:sticky;top:130px;padding:22px}
.ct-summary h4{font-size:20px;font-weight:700;margin:0 0 16px;padding-bottom:10px;border-bottom:2px solid var(--brand);display:inline-block}
.ct-free{background:var(--brand-soft);border-radius:var(--r-md);padding:12px 14px;margin-bottom:16px;font-size:13px;font-weight:600}
.ct-free i.bar{display:block;height:7px;border-radius:7px;background:var(--line);margin-top:8px;overflow:hidden}
.ct-free i.bar b{display:block;height:100%;width:0;border-radius:7px;background:linear-gradient(90deg,var(--brand),#34c38f);transition:width .5s}
.ct-line{display:flex;justify-content:space-between;padding:8px 0;font-weight:600}
.ct-line span:last-child{font-weight:700}
.ct-line.disc{color:var(--brand)}
.ct-line.note{color:var(--muted);font-size:13px;font-weight:500}
.ct-line.grand{border-top:2px dashed var(--line);margin-top:6px;padding-top:14px;font-size:19px}
.ct-line.grand span:last-child{color:var(--brand)}
.ct-coupon{display:flex;gap:8px;margin:14px 0 6px}
.ct-coupon input{flex:1;min-width:0;height:44px;border:2px dashed var(--line);border-radius:50px;background:var(--bg);color:var(--ink);padding:0 16px;font-weight:600;text-transform:uppercase;outline:0}
.ct-coupon input:focus{border-color:var(--brand)}
.ct-coupon button{border:0;border-radius:50px;background:var(--ink);color:var(--card);font-weight:700;padding:0 20px;cursor:pointer}
.ct-msg{font-size:13px;font-weight:600;min-height:18px;margin:0 0 6px 6px}
.ct-msg.ok{color:var(--brand)}.ct-msg.err{color:var(--danger)}
.ct-msg button{border:0;background:transparent;color:var(--danger);font-weight:700;text-decoration:underline;cursor:pointer;margin-left:6px}
.ct-checkout{display:flex;align-items:center;justify-content:center;gap:10px;width:100%;margin-top:12px;background:var(--brand);color:#fff;font-weight:700;font-size:17px;padding:14px;border-radius:50px;box-shadow:0 8px 20px rgba(15,122,79,.3);transition:.2s}
.ct-checkout:hover{background:var(--brand-dark);color:#fff;transform:translateY(-2px)}
.ct-trust{display:flex;justify-content:center;gap:14px;flex-wrap:wrap;margin-top:16px;font-size:12px;font-weight:600;color:var(--muted)}
.ct-trust i{color:var(--brand);margin-right:4px}
@media (max-width:991px){.ct-layout{grid-template-columns:1fr}.ct-summary{position:static}}
@media (max-width:767px){
  .ct-head{display:none}
  .ct-row{grid-template-columns:76px 1fr 38px;grid-template-areas:"img name del" "img price price" "qty qty total";gap:8px 12px;padding:14px}
  .ct-img{grid-area:img}.ct-name{grid-area:name}.ct-del{grid-area:del}
  .ct-price{grid-area:price}.ct-qty{grid-area:qty}.ct-total{grid-area:total;text-align:right;align-self:center}
  .ct-img img{width:76px;height:76px}
}
</style>
@endverbatim

<section class="page-banner">
	<div class="container">
		<h1>Shopping Cart</h1>
		<nav class="breadcrumb-nav" aria-label="breadcrumb"><a href="index.html">Home</a><i class="fas fa-chevron-right"></i><span>Cart</span></nav>
	</div>
</section>

<section class="ct-section">
	<div class="container">
		<div class="ct-layout" id="cartApp">
			<div class="ct-main">
				<div class="ct-top">
					<a href="shop.html" class="ct-btn"><i class="fas fa-arrow-left"></i> Continue Shopping</a>
					<button type="button" class="ct-btn ghost" id="ctClear"><i class="fas fa-trash-alt"></i> কার্ট খালি করুন</button>
				</div>
				<div class="ct-card" id="ctBox">
					<div class="ct-head"><span>Image</span><span>Product Name</span><span>Price</span><span>Quantity</span><span>Total</span><span></span></div>
					<div id="cartList">
						{{-- backend: @forelse ($cartItems as $item) ... @empty ... @endforelse --}}
						@foreach ($cartItems as $item)
						<div class="ct-row" data-id="{{ $item['id'] }}" data-price="{{ $item['price'] }}">
							<a href="details.html" class="ct-img"><img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"></a>
							<div class="ct-name"><a href="details.html">{{ $item['name'] }}</a>
								<small>@if (!empty($item['color']))রঙ: {{ $item['color'] }}@endif @if (!empty($item['size'])) · সাইজ: {{ $item['size'] }}@endif</small></div>
							<div class="ct-price">৳ {{ $item['price'] }}</div>
							<div class="ct-qty"><button type="button" data-a="minus" aria-label="Minus"><i class="fas fa-minus"></i></button><input type="number" min="1" max="12" value="{{ $item['qty'] }}" aria-label="Quantity"><button type="button" data-a="plus" aria-label="Plus"><i class="fas fa-plus"></i></button></div>
							<div class="ct-total">৳ {{ $item['price'] * $item['qty'] }}</div>
							<button type="button" class="ct-del" data-a="del" aria-label="Remove"><i class="fas fa-trash-alt"></i></button>
						</div>
						@endforeach
					</div>
				</div>
				<div class="ct-card ct-empty" id="ctEmpty" hidden>
					<i class="fas fa-shopping-basket"></i>
					<h3>আপনার কার্ট এখন খালি</h3>
					<p>পছন্দের পণ্য কার্টে যোগ করে কেনাকাটা শুরু করুন।</p>
					<a href="shop.html" class="ct-btn"><i class="fas fa-store"></i> কেনাকাটা শুরু করুন</a>
				</div>
			</div>

			<aside class="ct-card ct-summary" id="ctSummary">
				<h4>অর্ডার সামারি</h4>
				<div class="ct-free">
          <span id="ctFreeText"></span><i class="bar"><b id="ctFreeBar"></b></i></div>
				<div class="ct-line"><span>সাবটোটাল (<b id="ctQty">{{ $totalQty }}</b>টি পণ্য)</span><span id="ctSub">৳ {{ $subtotal }}</span></div>
				<div class="ct-line disc" id="ctDiscRow" hidden><span>কুপন ছাড়</span><span id="ctDisc">- ৳ 0</span></div>
				<div class="ct-line note"><span>ডেলিভারি চার্জ</span><span>চেকআউটে যোগ হবে</span></div>
				<div class="ct-line grand"><span>সর্বমোট</span><span id="ctTotal">৳ {{ $subtotal }}</span></div>
				<form class="ct-coupon" id="ctCouponForm"><input type="text" id="ctCode" placeholder="কুপন কোড (NITTO10)" aria-label="Coupon"><button type="submit">প্রয়োগ</button></form>
				<p class="ct-msg" id="ctMsg"></p>
				<a href="{{url('/checkout')}}" class="ct-checkout">Proceed To CheckOut <i class="fas fa-sign-out-alt"></i></a>
				<div class="ct-trust"><span><i class="fas fa-lock"></i> নিরাপদ পেমেন্ট</span><span><i class="fas fa-hand-holding-usd"></i> ক্যাশ অন ডেলিভারি</span><span><i class="fas fa-undo-alt"></i> ৭ দিনে রিটার্ন</span></div>
			</aside>
		</div>
	</div>
</section>

@verbatim
<script>
(function () {
  var $ = function (id) { return document.getElementById(id); };
  var all = function (s, r) { return [].slice.call((r || document).querySelectorAll(s)); };
  var bn = function (n) { return String(n).replace(/\d/g, function (d) { return '০১২৩৪৫৬৭৮৯'[d]; }); };
  var CK = 'nm_cartcount', CP = 'nm_coupon', FREE = 1000, MAXQ = 12, MINC = 500;
  var get = function (k, d) { try { var v = JSON.parse(localStorage.getItem(k)); return v == null ? d : v; } catch (e) { return d; } };
  var set = function (k, v) { try { localStorage.setItem(k, JSON.stringify(v)); } catch (e) {} };
  var list = $('cartList'), coupon = get(CP, '');

  /* ====== BACKEND HOOK ======
     পরিমাণ বদল বা আইটেম সরালে সার্ভারকে জানাতে এখানে fetch/axios বসান।
     যেমন: fetch('/cart/' + action, { method:'POST', headers:{'Content-Type':'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content },
            body: JSON.stringify({ id: id, qty: qty }) });  */
  function syncServer(action, id, qty) { /* TODO(backend) */ }

  function toast(msg, icon) {
    if (window.NM && window.NM.toast) return window.NM.toast(msg, icon);
    var w = $('toastWrap');
    if (!w) { w = document.createElement('div'); w.className = 'toast-wrap'; w.id = 'toastWrap'; document.body.appendChild(w); }
    var t = document.createElement('div'); t.className = 'toast';
    t.innerHTML = '<i class="fas ' + (icon || 'fa-check-circle') + '"></i> ' + msg;
    w.appendChild(t);
    setTimeout(function () { t.classList.add('hide'); }, 2200);
    setTimeout(function () { t.remove(); }, 2700);
  }
  function msg(text, cls, withRemove) {
    var m = $('ctMsg'); m.className = 'ct-msg ' + (cls || ''); m.textContent = text || '';
    if (withRemove) {
      var b = document.createElement('button'); b.type = 'button'; b.textContent = 'সরান';
      b.onclick = function () { coupon = ''; set(CP, ''); $('ctCode').value = ''; render(); };
      m.appendChild(b);
    }
  }

  function render() {
    var rows = all('.ct-row', list), sub = 0, qty = 0;
    rows.forEach(function (r) {
      var p = +r.getAttribute('data-price'), q = Math.min(MAXQ, Math.max(1, parseInt(r.querySelector('input').value, 10) || 1));
      r.querySelector('input').value = q;
      r.querySelector('.ct-total').textContent = '৳ ' + (p * q);
      sub += p * q; qty += q;
    });
    var empty = rows.length === 0;
    $('ctBox').hidden = empty; $('ctEmpty').hidden = !empty; $('ctSummary').hidden = empty; $('ctClear').hidden = empty;

    var disc = 0;
    if (coupon === 'NITTO10') {
      if (sub >= MINC) { disc = Math.round(sub * 0.10); msg('NITTO10 প্রয়োগ হয়েছে, ১০% ছাড় পাচ্ছেন।', 'ok', true); }
      else msg('কুপনের জন্য সর্বনিম্ন ৫০০ টাকার অর্ডার লাগবে।', 'err');
    } else msg('');
    $('ctQty').textContent = bn(qty);
    $('ctSub').textContent = '৳ ' + sub;
    $('ctDiscRow').hidden = !disc;
    $('ctDisc').textContent = '- ৳ ' + disc;
    $('ctTotal').textContent = '৳ ' + (sub - disc);
    $('ctFreeBar').style.width = Math.min(100, sub / FREE * 100) + '%';
    $('ctFreeText').textContent = sub >= FREE ? 'অভিনন্দন! আপনি ফ্রি ডেলিভারি পাচ্ছেন।' : 'আর ৳ ' + (FREE - sub) + ' এর পণ্য কিনলে ফ্রি ডেলিভারি পাবেন।';

    set(CK, qty);
    all('.cart-count').forEach(function (e) { e.textContent = bn(qty); });
  }

  list.onclick = function (e) {
    var b = e.target.closest('button[data-a]'); if (!b) return;
    var row = b.closest('.ct-row'), inp = row.querySelector('input'), a = b.getAttribute('data-a'), id = row.getAttribute('data-id');
    if (a === 'plus') inp.value = Math.min(MAXQ, (+inp.value || 1) + 1);
    if (a === 'minus') inp.value = Math.max(1, (+inp.value || 1) - 1);
    if (a === 'del') { var n = row.querySelector('.ct-name a').textContent; row.remove(); syncServer('remove', id, 0); toast(n + ' কার্ট থেকে সরানো হয়েছে', 'fa-trash-alt'); }
    else syncServer('update', id, +inp.value);
    render();
  };
  list.onchange = function (e) {
    if (e.target.tagName !== 'INPUT') return;
    syncServer('update', e.target.closest('.ct-row').getAttribute('data-id'), +e.target.value);
    render();
  };
  $('ctClear').onclick = function () {
    if (!confirm('কার্টের সব পণ্য মুছে ফেলবেন?')) return;
    all('.ct-row', list).forEach(function (r) { r.remove(); });
    coupon = ''; set(CP, ''); syncServer('clear', 0, 0); render();
  };
  $('ctCouponForm').onsubmit = function (e) {
    e.preventDefault();
    var c = $('ctCode').value.trim().toUpperCase();
    if (!c) { msg('কুপন কোড লিখুন।', 'err'); return; }
    /* TODO(backend): কুপন সার্ভারে যাচাই করুন */
    if (c !== 'NITTO10') { msg('কুপন কোডটি সঠিক নয়।', 'err'); return; }
    coupon = c; set(CP, c); render(); toast('কুপন প্রয়োগ হয়েছে', 'fa-tag');
  };
  render();
})();
</script>
@endverbatim
@endsection