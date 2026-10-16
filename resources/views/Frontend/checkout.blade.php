@extends('frontend.master')
@section('title', 'Checkout | Nitto Mart')
@section('contant')
@php
    /* ===================== DUMMY DATA =====================
       Backend এলে এই অ্যারেগুলো মুছে Controller থেকে পাঠান:
       return view('frontend.checkout', compact('cartItems', 'zones'));
       ====================================================== */
    $cartItems = [
        ['id' => 1, 'name' => 'Test Product', 'price' => 300, 'qty' => 1, 'color' => 'Red',   'size' => 'M', 'image' => 'frontend/assets/images/product.png'],
        ['id' => 2, 'name' => 'Kids T-Shirt', 'price' => 280, 'qty' => 1, 'color' => 'Blue',  'size' => 'L', 'image' => 'frontend/assets/images/product.png'],
        ['id' => 3, 'name' => 'Water Bottle', 'price' => 320, 'qty' => 1, 'color' => 'Black', 'size' => null, 'image' => 'frontend/assets/images/product.png'],
    ];
    $zones = [
        ['key' => 'inside_dhaka',  'label' => 'Inside Dhaka',  'charge' => 80],
        ['key' => 'outside_dhaka', 'label' => 'Outside Dhaka', 'charge' => 150],
    ];
    $freeDeliveryMin = 1000;
    $subtotal = collect($cartItems)->sum(fn ($i) => $i['price'] * $i['qty']);
@endphp
@verbatim
<style>
/* ================= CHECKOUT PAGE ================= */
.co-section{padding:26px 0 10px}
.co-steps{display:flex;justify-content:center;align-items:center;gap:10px;margin-bottom:24px;font-size:14px;font-weight:700;color:var(--muted);flex-wrap:wrap}
.co-steps span{display:inline-flex;align-items:center;gap:8px}
.co-steps b{width:28px;height:28px;border-radius:50%;background:var(--line);color:var(--muted);display:inline-flex;align-items:center;justify-content:center;font-size:13px}
.co-steps .done b{background:var(--brand);color:#fff}.co-steps .done{color:var(--brand)}
.co-steps .now b{background:var(--accent);color:#fff}.co-steps .now{color:var(--ink)}
.co-steps i.line{width:40px;height:2px;background:var(--line)}
.co-layout{display:grid;grid-template-columns:1fr 410px;gap:24px;align-items:start}
.co-card{background:var(--card);border-radius:var(--r-lg);box-shadow:var(--shadow);padding:26px}
.co-card h3{font-size:22px;font-weight:700;margin:0 0 18px}
.co-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.co-field{display:flex;flex-direction:column;gap:5px}
.co-field.full{grid-column:1/-1}
.co-field label{font-weight:600;font-size:14px}
.co-field label em{color:var(--danger);font-style:normal}
.co-field input,.co-field textarea{border:2px solid var(--line);border-radius:var(--r-md);background:var(--bg);color:var(--ink);padding:12px 16px;outline:0;width:100%;font-weight:500;transition:.2s}
.co-field input:focus,.co-field textarea:focus{border-color:var(--brand);background:var(--card);box-shadow:0 0 0 4px var(--brand-soft)}
.co-field.invalid input,.co-field.invalid textarea{border-color:var(--danger)}
.co-err{color:var(--danger);font-size:12.5px;font-weight:600;min-height:0}
.co-sub{font-weight:700;margin:22px 0 10px}
.co-zones{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.co-zone{cursor:pointer;margin:0}
.co-zone input{position:absolute;opacity:0}
.co-zone span{display:flex;align-items:center;justify-content:space-between;gap:10px;border:2px solid var(--line);border-radius:var(--r-md);padding:14px 16px;transition:.2s}
.co-zone span::before{content:"";width:18px;height:18px;border-radius:50%;border:2px solid var(--line);flex-shrink:0;transition:.2s}
.co-zone span b{flex:1}
.co-zone span em{font-style:normal;color:var(--brand);font-weight:700}
.co-zone input:checked+span{border-color:var(--brand);background:var(--brand-soft)}
.co-zone input:checked+span::before{border-color:var(--brand);background:radial-gradient(var(--brand) 45%,transparent 50%)}
.co-zone input:focus-visible+span{outline:3px solid var(--accent)}
.co-item{display:grid;grid-template-columns:64px 1fr 34px;gap:12px;padding:12px 0;border-bottom:1px solid var(--line);align-items:start}
.co-item img{width:64px;height:64px;object-fit:cover;border-radius:var(--r-sm);border:1px solid var(--line);background:#f1f3f5}
.co-item b{display:block;line-height:1.3}
.co-item small{color:var(--muted)}
.co-price{display:block;color:var(--brand);font-weight:700;margin:2px 0 6px}
.co-qty{display:inline-flex;align-items:center;border:2px solid var(--line);border-radius:50px;overflow:hidden}
.co-qty button{width:30px;height:32px;border:0;background:transparent;color:var(--ink);cursor:pointer}
.co-qty button:hover{background:var(--brand-soft)}
.co-qty input{width:36px;height:32px;border:0;text-align:center;font-weight:700;background:transparent;color:var(--ink);outline:0;-moz-appearance:textfield}
.co-qty input::-webkit-outer-spin-button,.co-qty input::-webkit-inner-spin-button{-webkit-appearance:none}
.co-del{width:34px;height:34px;border:0;border-radius:8px;background:var(--brand);color:#fff;cursor:pointer;transition:.2s}
.co-del:hover{background:var(--danger)}
.co-totals{padding-top:8px}
.co-line{display:flex;justify-content:space-between;padding:8px 0;font-weight:600}
.co-line span:last-child{font-weight:700}
.co-line.disc{color:var(--brand)}
.co-line.grand{border-top:2px dashed var(--line);margin-top:6px;padding-top:14px;font-size:19px}
.co-line.grand span:last-child{color:var(--brand)}
.co-free{font-size:12.5px;color:var(--brand);font-weight:600;text-align:right;margin-top:-4px}
.co-pay{margin:18px 0 6px}
.co-pay h5{font-size:16px;font-weight:700;margin:0 0 10px}
.co-pay label{display:flex;align-items:center;gap:12px;border:2px solid var(--line);border-radius:var(--r-md);padding:12px 14px;margin:0 0 8px;cursor:pointer;font-weight:600}
.co-pay label input{accent-color:var(--brand);width:18px;height:18px}
.co-pay label.on{border-color:var(--brand);background:var(--brand-soft)}
.co-pay label.off{opacity:.55;cursor:not-allowed}
.co-pay label small{margin-left:auto;color:var(--muted);font-weight:500}
.co-place{display:flex;align-items:center;justify-content:center;gap:10px;width:100%;margin-top:12px;border:0;background:var(--brand);color:#fff;font-weight:700;font-size:17px;padding:14px;border-radius:50px;box-shadow:0 8px 20px rgba(15,122,79,.3);cursor:pointer;transition:.2s}
.co-place:hover{background:var(--brand-dark);transform:translateY(-2px)}
.co-place:disabled{opacity:.5;cursor:not-allowed;transform:none}
.co-note{text-align:center;font-size:12.5px;color:var(--muted);margin:12px 0 0}
.co-note i{color:var(--brand)}
.co-empty{text-align:center;padding:30px 10px;color:var(--muted)}
.co-empty a{color:var(--brand);font-weight:700}
.co-summary{position:sticky;top:130px}
.co-overlay{position:fixed;inset:0;background:rgba(10,20,15,.65);display:none;align-items:center;justify-content:center;padding:16px;z-index:3500}
.co-overlay.open{display:flex}
.co-success{max-width:430px;width:100%;text-align:center;background:var(--card);color:var(--ink);border-radius:var(--r-lg);padding:34px 28px;box-shadow:var(--shadow-hover)}
.co-success>i{width:80px;height:80px;border-radius:50%;background:var(--brand);color:#fff;font-size:36px;display:inline-flex;align-items:center;justify-content:center;margin-bottom:14px}
.co-success h3{font-size:24px;font-weight:700;margin:0 0 6px}
.co-success p{color:var(--muted);margin:0 0 14px}
.co-ordno{display:inline-block;background:var(--brand-soft);color:var(--brand-dark);font-weight:700;font-size:18px;letter-spacing:1px;padding:8px 22px;border-radius:50px;margin-bottom:14px}
.co-success .row{display:flex;justify-content:space-between;padding:8px 0;border-top:1px solid var(--line);font-weight:600}
.co-success .btns{display:flex;gap:10px;margin-top:18px}
.co-success .btns a{flex:1;padding:11px;border-radius:50px;font-weight:700;background:var(--brand);color:#fff}
.co-success .btns a.alt{background:var(--bg);color:var(--ink)}
@media (max-width:991px){.co-layout{grid-template-columns:1fr}.co-summary{position:static}}
@media (max-width:575px){.co-grid,.co-zones{grid-template-columns:1fr}.co-card{padding:18px}.co-steps i.line{width:18px}}
</style>
@endverbatim

<section class="page-banner">
	<div class="container">
		<h1>Checkout</h1>
		<nav class="breadcrumb-nav" aria-label="breadcrumb"><a href="index.html">Home</a><i class="fas fa-chevron-right"></i><a href="view-products.html">Cart</a><i class="fas fa-chevron-right"></i><span>Checkout</span></nav>
	</div>
</section>

<section class="co-section">
	<div class="container">
		<div class="co-steps">
			<span class="done"><b><i class="fas fa-check"></i></b> কার্ট</span><i class="line"></i>
			<span class="now"><b>২</b> চেকআউট</span><i class="line"></i>
			<span><b>৩</b> অর্ডার সম্পন্ন</span>
		</div>

		{{-- backend: action="{{ route('order.store') }}" --}}
		<form id="checkoutForm" class="co-layout" action="" method="POST" novalidate>
			@csrf
			<div class="co-card">
				<h3>Billing / Shipping Details</h3>
				<div class="co-grid">
					<div class="co-field">
						<label for="coName">Enter Full Name <em>*</em></label>
						<input type="text" id="coName" name="name" placeholder="আপনার পুরো নাম" autocomplete="name">
						<span class="co-err"></span>
					</div>
					<div class="co-field">
						<label for="coPhone">Phone <em>*</em></label>
						<input type="tel" id="coPhone" name="phone" placeholder="01XXXXXXXXX" inputmode="numeric" maxlength="14" autocomplete="tel">
						<span class="co-err"></span>
					</div>
					<div class="co-field full">
						<label for="coEmail">Email (ঐচ্ছিক)</label>
						<input type="email" id="coEmail" name="email" placeholder="example@gmail.com" autocomplete="email">
						<span class="co-err"></span>
					</div>
					<div class="co-field full">
						<label for="coAddress">Enter Full Address <em>*</em></label>
						<textarea id="coAddress" name="address" rows="4" placeholder="বাসা/রোড নম্বর, এলাকা, থানা, জেলা"></textarea>
						<span class="co-err"></span>
					</div>
				</div>

				<div class="co-sub">ডেলিভারি এলাকা</div>
				<div class="co-zones">
					@foreach ($zones as $z)
					<label class="co-zone">
						<input type="radio" name="zone" value="{{ $z['key'] }}" data-charge="{{ $z['charge'] }}" {{ $loop->first ? 'checked' : '' }}>
						<span><b>{{ $z['label'] }}</b><em>({{ $z['charge'] }} Tk.)</em></span>
					</label>
					@endforeach
				</div>

				<div class="co-field full" style="margin-top:18px">
					<label for="coNote">অর্ডার নোট (ঐচ্ছিক)</label>
					<textarea id="coNote" name="note" rows="2" placeholder="কোনো বিশেষ নির্দেশনা থাকলে লিখুন"></textarea>
				</div>
			</div>

			<aside class="co-card co-summary" id="coSummary">
				<h3>অর্ডার সামারি</h3>
				<div id="coItems">
					{{-- backend: @foreach ($cartItems as $item) --}}
					@foreach ($cartItems as $item)
					<div class="co-item" data-price="{{ $item['price'] }}">
						<img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
						<div>
							<b>{{ $item['name'] }}</b>
							<small>@if (!empty($item['color']))রঙ: {{ $item['color'] }}@endif @if (!empty($item['size'])) · সাইজ: {{ $item['size'] }}@endif</small>
							<span class="co-price">{{ $item['price'] }} Tk.</span>
							<div class="co-qty">
								<button type="button" data-a="minus" aria-label="Minus"><i class="fas fa-minus"></i></button>
								<input type="number" name="items[{{ $loop->index }}][qty]" min="1" max="12" value="{{ $item['qty'] }}" aria-label="Quantity">
								<button type="button" data-a="plus" aria-label="Plus"><i class="fas fa-plus"></i></button>
							</div>
							<input type="hidden" name="items[{{ $loop->index }}][id]" value="{{ $item['id'] }}">
						</div>
						<button type="button" class="co-del" data-a="del" aria-label="Remove"><i class="fas fa-trash-alt"></i></button>
					</div>
					@endforeach
				</div>
				<div class="co-empty" id="coEmpty" hidden>আপনার কার্ট খালি। <a href="shop.html">কেনাকাটা করুন</a></div>

				<div class="co-totals" id="coTotals" data-free="{{ $freeDeliveryMin }}">
					<div class="co-line"><span>Sub Total</span><span id="coSub">৳ {{ $subtotal }}</span></div>
					<div class="co-line disc" id="coDiscRow" hidden><span id="coDiscLabel">কুপন ছাড়</span><span id="coDisc">- ৳ 0</span></div>
					<div class="co-line"><span>Delivery charge</span><span id="coDelivery">৳ 80</span></div>
					<div class="co-free" id="coFree" hidden>ফ্রি ডেলিভারি প্রযোজ্য</div>
					<div class="co-line grand"><span>Grand Total</span><span id="coTotal">৳ {{ $subtotal + $zones[0]['charge'] }}</span></div>
				</div>
				<input type="hidden" name="coupon" id="coCoupon" value="">

				<div class="co-pay">
					<h5>Select Payment Method</h5>
					<label class="on"><input type="radio" name="payment_method" value="cod" checked> <i class="fas fa-hand-holding-usd"></i> Cash On Delivery</label>
					<label class="off"><input type="radio" name="payment_method" value="bkash" disabled> bKash <small>শীঘ্রই আসছে</small></label>
					<label class="off"><input type="radio" name="payment_method" value="nagad" disabled> Nagad <small>শীঘ্রই আসছে</small></label>
				</div>

				<button type="submit" class="co-place" id="coPlace">Place an Order <i class="fas fa-sign-out-alt"></i></button>
				<p class="co-note"><i class="fas fa-lock"></i> আপনার তথ্য সম্পূর্ণ নিরাপদ। পণ্য হাতে পেয়ে টাকা দিন।</p>
			</aside>
		</form>
	</div>
</section>

<div class="co-overlay" id="coOverlay" role="dialog" aria-modal="true">
	<div class="co-success">
		<i class="fas fa-check"></i>
		<h3>অর্ডার সফল হয়েছে!</h3>
		<p>ধন্যবাদ! আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।</p>
		<div class="co-ordno" id="coOrdNo">NM-000000</div>
		<div class="row"><span>সর্বমোট</span><span id="coOrdTotal">৳ 0</span></div>
		<div class="row"><span>পেমেন্ট</span><span>Cash On Delivery</span></div>
		<div class="btns"><a href="index.html">হোমে ফিরুন</a><a href="shop.html" class="alt">আরও কিনুন</a></div>
	</div>
</div>

@verbatim
<script>
(function () {
  /* backend এলে false করুন – তখন ফর্ম সরাসরি সার্ভারে submit হবে */
  var DEMO = true;

  var $ = function (id) { return document.getElementById(id); };
  var all = function (s, r) { return [].slice.call((r || document).querySelectorAll(s)); };
  var bn = function (n) { return String(n).replace(/\d/g, function (d) { return '০১২৩৪৫৬৭৮৯'[d]; }); };
  var en = function (s) { return String(s).replace(/[০-৯]/g, function (d) { return '০১২৩৪৫৬৭৮৯'.indexOf(d); }); };
  var CK = 'nm_cartcount', CP = 'nm_coupon', MAXQ = 12, MINC = 500;
  var get = function (k, d) { try { var v = JSON.parse(localStorage.getItem(k)); return v == null ? d : v; } catch (e) { return d; } };
  var set = function (k, v) { try { localStorage.setItem(k, JSON.stringify(v)); } catch (e) {} };
  var FREE = +$('coTotals').getAttribute('data-free'), coupon = get(CP, '');
  var form = $('checkoutForm'), items = $('coItems');

  function calc() {
    var rows = all('.co-item', items), sub = 0, qty = 0;
    rows.forEach(function (r) {
      var inp = r.querySelector('input[type=number]');
      var q = Math.min(MAXQ, Math.max(1, parseInt(inp.value, 10) || 1)); inp.value = q;
      sub += +r.getAttribute('data-price') * q; qty += q;
    });
    var empty = rows.length === 0;
    $('coEmpty').hidden = !empty; $('coPlace').disabled = empty;

    var disc = 0;
    if (coupon === 'NITTO10' && sub >= MINC) { disc = Math.round(sub * 0.10); $('coDiscLabel').textContent = 'কুপন ছাড় (NITTO10)'; $('coCoupon').value = coupon; }
    else $('coCoupon').value = '';
    $('coDiscRow').hidden = !disc;

    var zone = form.querySelector('input[name=zone]:checked');
    var charge = !empty && sub < FREE && zone ? +zone.getAttribute('data-charge') : 0;
    $('coFree').hidden = empty || sub < FREE;

    $('coSub').textContent = '৳ ' + sub;
    $('coDisc').textContent = '- ৳ ' + disc;
    $('coDelivery').textContent = charge ? '৳ ' + charge : 'ফ্রি';
    var total = empty ? 0 : sub - disc + charge;
    $('coTotal').textContent = '৳ ' + total;

    set(CK, qty);
    all('.cart-count').forEach(function (e) { e.textContent = bn(qty); });
    return total;
  }

  items.onclick = function (e) {
    var b = e.target.closest('button[data-a]'); if (!b) return;
    var row = b.closest('.co-item'), inp = row.querySelector('input[type=number]'), a = b.getAttribute('data-a');
    if (a === 'plus') inp.value = Math.min(MAXQ, (+inp.value || 1) + 1);
    if (a === 'minus') inp.value = Math.max(1, (+inp.value || 1) - 1);
    /* TODO(backend): পরিমাণ/রিমুভ সার্ভারের কার্টেও আপডেট করুন */
    if (a === 'del') row.remove();
    calc();
  };
  items.onchange = calc;
  all('input[name=zone]').forEach(function (z) { z.onchange = calc; });

  /* ---------- ভ্যালিডেশন ---------- */
  function fail(id, text) {
    var f = $(id).closest('.co-field'); f.classList.add('invalid'); f.querySelector('.co-err').textContent = text; return false;
  }
  function clearErr() { all('.co-field').forEach(function (f) { f.classList.remove('invalid'); f.querySelector('.co-err').textContent = ''; }); }
  function validate() {
    clearErr(); var ok = true, first = null;
    var name = $('coName').value.trim(), phone = en($('coPhone').value).replace(/[\s-]/g, '').replace(/^\+?88/, ''), addr = $('coAddress').value.trim(), mail = $('coEmail').value.trim();
    if (name.length < 2) { ok = fail('coName', 'আপনার নাম লিখুন'); first = first || 'coName'; }
    if (!/^01[3-9]\d{8}$/.test(phone)) { ok = fail('coPhone', 'সঠিক মোবাইল নম্বর দিন (যেমন 01712345678)'); first = first || 'coPhone'; }
    if (mail && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)) { ok = fail('coEmail', 'সঠিক ইমেইল দিন'); first = first || 'coEmail'; }
    if (addr.length < 10) { ok = fail('coAddress', 'পুরো ঠিকানা লিখুন (কমপক্ষে ১০ অক্ষর)'); first = first || 'coAddress'; }
    if (first) $(first).focus();
    return ok;
  }
  all('.co-field input, .co-field textarea').forEach(function (i) {
    i.addEventListener('input', function () { var f = i.closest('.co-field'); f.classList.remove('invalid'); f.querySelector('.co-err').textContent = ''; });
  });

  form.onsubmit = function (e) {
    if (!validate()) { e.preventDefault(); return; }
    if (!DEMO) return;                       /* backend: স্বাভাবিকভাবে submit হবে */
    e.preventDefault();
    var total = calc();
    $('coOrdNo').textContent = 'NM-' + Math.floor(100000 + Math.random() * 900000);
    $('coOrdTotal').textContent = '৳ ' + total;
    $('coOverlay').classList.add('open');
    set(CK, 0); set(CP, ''); set('nm_cart_items', null);
    all('.cart-count').forEach(function (el) { el.textContent = bn(0); });
  };

  calc();
})();
</script>
@endverbatim
@endsection