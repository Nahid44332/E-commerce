@extends('frontend.master')
@section('title', 'Return Process | Nitto Mart')
@section('contant')
@verbatim
<style>
/* ================= RETURN PROCESS PAGE ================= */
.rp-section{padding:34px 0 10px}
.rp-head{text-align:center;max-width:640px;margin:0 auto 26px}
.rp-head h2{font-size:28px;font-weight:700;margin:0 0 6px}
.rp-head p{color:var(--muted);margin:0}
.rp-steps{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;position:relative;margin-bottom:34px}
.rp-step{position:relative;background:var(--card);border-radius:var(--r-lg);box-shadow:var(--shadow);padding:26px 18px 20px;text-align:center;transition:.25s}
.rp-step:hover{transform:translateY(-5px);box-shadow:var(--shadow-hover)}
.rp-step .no{position:absolute;top:-14px;left:50%;transform:translateX(-50%);width:30px;height:30px;border-radius:50%;background:var(--accent);color:#fff;font-weight:700;font-size:14px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 10px rgba(245,159,27,.4)}
.rp-step i{width:62px;height:62px;border-radius:50%;background:var(--brand-soft);color:var(--brand);font-size:24px;display:inline-flex;align-items:center;justify-content:center;margin-bottom:12px}
.rp-step h5{font-size:16px;font-weight:700;margin:0 0 6px}
.rp-step p{font-size:13.5px;color:var(--muted);margin:0}
.rp-step:not(:last-child)::after{content:"\f061";font-family:"Font Awesome 5 Free","Font Awesome 6 Free";font-weight:900;position:absolute;right:-17px;top:50%;transform:translateY(-50%);color:var(--brand);font-size:14px;z-index:2}
.rp-layout{display:grid;grid-template-columns:1fr 340px;gap:24px;align-items:start}
.rp-card{background:var(--card);border-radius:var(--r-lg);box-shadow:var(--shadow);padding:30px}
.rp-card h3{font-size:22px;font-weight:700;margin:0 0 4px}
.rp-card>p.sub{color:var(--muted);margin:0 0 18px;padding-bottom:16px;border-bottom:1px solid var(--line)}
.rp-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.rp-field{display:flex;flex-direction:column;gap:5px}
.rp-field.full{grid-column:1/-1}
.rp-field label.l{font-weight:600;font-size:14px}
.rp-field label.l em{color:var(--danger);font-style:normal}
.rp-field input[type=text],.rp-field input[type=tel],.rp-field select,.rp-field textarea{border:2px solid var(--line);border-radius:var(--r-md);background:var(--bg);color:var(--ink);padding:12px 16px;outline:0;width:100%;font-weight:500;font-family:inherit;transition:.2s}
.rp-field input:focus,.rp-field select:focus,.rp-field textarea:focus{border-color:var(--brand);background:var(--card);box-shadow:0 0 0 4px var(--brand-soft)}
.rp-field.invalid input,.rp-field.invalid select,.rp-field.invalid textarea,.rp-field.invalid .rp-drop{border-color:var(--danger)}
.rp-err{color:var(--danger);font-size:12.5px;font-weight:600}
.rp-opts{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.rp-opt{cursor:pointer;margin:0}
.rp-opt input{position:absolute;opacity:0}
.rp-opt span{display:flex;align-items:center;gap:12px;border:2px solid var(--line);border-radius:var(--r-md);padding:12px 16px;font-weight:600;transition:.2s}
.rp-opt span i{width:38px;height:38px;border-radius:50%;background:var(--brand-soft);color:var(--brand);display:flex;align-items:center;justify-content:center}
.rp-opt input:checked+span{border-color:var(--brand);background:var(--brand-soft)}
.rp-opt input:focus-visible+span{outline:3px solid var(--accent)}
.rp-drop{display:flex;flex-direction:column;align-items:center;gap:4px;text-align:center;border:2px dashed var(--line);border-radius:var(--r-md);background:var(--bg);padding:22px 14px;cursor:pointer;transition:.2s}
.rp-drop:hover,.rp-drop.over{border-color:var(--brand);background:var(--brand-soft)}
.rp-drop i{font-size:30px;color:var(--brand)}
.rp-drop b{font-size:14px}
.rp-drop small{color:var(--muted)}
.rp-drop input{display:none}
.rp-prev{display:flex;flex-wrap:wrap;gap:10px;margin-top:10px}
.rp-prev:empty{display:none}
.rp-thumb{position:relative;width:84px;height:84px;border-radius:var(--r-sm);overflow:hidden;border:2px solid var(--line)}
.rp-thumb img{width:100%;height:100%;object-fit:cover}
.rp-thumb button{position:absolute;top:3px;right:3px;width:22px;height:22px;border:0;border-radius:50%;background:var(--danger);color:#fff;font-size:11px;cursor:pointer}
.rp-agree{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:var(--muted)}
.rp-agree input{width:18px;height:18px;margin-top:3px;accent-color:var(--brand)}
.rp-agree a{color:var(--brand);font-weight:700}
.rp-submit{display:inline-flex;align-items:center;gap:10px;border:0;background:var(--brand);color:#fff;font-weight:700;font-size:16px;padding:13px 44px;border-radius:50px;box-shadow:0 8px 20px rgba(15,122,79,.3);cursor:pointer;transition:.2s}
.rp-submit:hover{background:var(--brand-dark);transform:translateY(-2px)}
.rp-ok{display:none;text-align:center;padding:30px 10px}
.rp-ok.show{display:block}
.rp-ok>i{width:78px;height:78px;border-radius:50%;background:var(--brand);color:#fff;font-size:34px;display:inline-flex;align-items:center;justify-content:center;margin-bottom:12px}
.rp-ok h3{margin-bottom:6px}
.rp-ok p{color:var(--muted)}
.rp-ok .no{display:inline-block;background:var(--brand-soft);color:var(--brand-dark);font-weight:700;font-size:18px;letter-spacing:1px;padding:8px 22px;border-radius:50px;margin:6px 0 16px}
.rp-side{display:grid;gap:18px;position:sticky;top:130px}
.rp-box{background:var(--card);border-radius:var(--r-lg);box-shadow:var(--shadow);padding:22px}
.rp-box h4{font-size:18px;font-weight:700;margin:0 0 12px}
.rp-box h4 i{margin-right:8px}
.rp-box.yes h4 i{color:var(--brand)}.rp-box.no h4 i{color:var(--danger)}
.rp-box li{display:flex;gap:10px;padding:6px 0;font-size:14px;font-weight:500}
.rp-box.yes li i{color:var(--brand);margin-top:4px}.rp-box.no li i{color:var(--danger);margin-top:4px}
.rp-help{text-align:center;background:linear-gradient(135deg,var(--brand-dark),var(--brand));color:#fff;border-radius:var(--r-lg);padding:24px 18px}
.rp-help>i{font-size:30px;color:var(--accent)}
.rp-help h5{margin:8px 0 2px;font-weight:700}
.rp-help p{margin:0 0 10px;opacity:.9;font-size:14px}
.rp-help a{display:inline-block;background:#fff;color:var(--brand-dark);font-weight:700;padding:8px 22px;border-radius:50px}
.rp-faq{max-width:820px;margin:34px auto 0}
.rp-faq details{background:var(--card);border-radius:var(--r-md);box-shadow:var(--shadow);margin-bottom:12px;overflow:hidden}
.rp-faq summary{cursor:pointer;list-style:none;font-weight:700;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;gap:12px}
.rp-faq summary::-webkit-details-marker{display:none}
.rp-faq summary::after{content:"+";font-size:22px;color:var(--brand);transition:.2s}
.rp-faq details[open] summary::after{content:"–"}
.rp-faq details[open] summary{color:var(--brand)}
.rp-faq details p{margin:0;padding:0 20px 18px;color:var(--muted)}
@media (max-width:991px){.rp-layout{grid-template-columns:1fr}.rp-side{position:static;grid-template-columns:1fr 1fr}.rp-steps{grid-template-columns:repeat(2,1fr)}.rp-step:nth-child(2)::after{display:none}}
@media (max-width:640px){.rp-grid,.rp-opts{grid-template-columns:1fr}.rp-card{padding:20px}.rp-side{grid-template-columns:1fr}.rp-steps{grid-template-columns:1fr}.rp-step::after{display:none}.rp-head h2{font-size:23px}}
</style>
@endverbatim

<section class="page-banner">
	<div class="container">
		<h1>Product Return Process</h1>
		<nav class="breadcrumb-nav" aria-label="breadcrumb"><a href="index.html">Home</a><i class="fas fa-chevron-right"></i><span>Return Process</span></nav>
	</div>
</section>

<section class="rp-section">
	<div class="container">
		<div class="rp-head">
			<h2>রিটার্ন করবেন কীভাবে?</h2>
			<p>পণ্যে সমস্যা থাকলে চিন্তা নেই। মাত্র ৪টি ধাপে সহজেই রিটার্ন বা বদল করুন।</p>
		</div>

		<div class="rp-steps">
			<div class="rp-step"><span class="no">১</span><i class="fas fa-file-alt"></i><h5>রিকোয়েস্ট জমা দিন</h5><p>নিচের ফর্মে অর্ডার আইডি, সমস্যা ও ছবি দিন।</p></div>
			<div class="rp-step"><span class="no">২</span><i class="fas fa-search"></i><h5>যাচাই</h5><p>আমাদের টিম ২৪ ঘণ্টার মধ্যে ফোনে যোগাযোগ করবে।</p></div>
			<div class="rp-step"><span class="no">৩</span><i class="fas fa-truck-pickup"></i><h5>পণ্য সংগ্রহ</h5><p>অনুমোদনের পর আমাদের ডেলিভারি ম্যান পণ্য নিয়ে যাবে।</p></div>
			<div class="rp-step"><span class="no">৪</span><i class="fas fa-exchange-alt"></i><h5>বদল বা রিফান্ড</h5><p>পণ্য ফেরত পেয়ে ৩–৫ কর্মদিবসে সমাধান।</p></div>
		</div>

		<div class="rp-layout">
			<div class="rp-card">
				{{-- backend: action="{{ route('return.store') }}" --}}
				<form id="rpForm" action="" method="POST" enctype="multipart/form-data" novalidate>
					@csrf
					<div id="rpFormWrap">
						<h3>Product Return Request</h3>
						<p class="sub">Please fill out the details below to submit your return request.</p>
						<div class="rp-grid">
							<div class="rp-field">
								<label class="l" for="rpName">Name <em>*</em></label>
								<input type="text" id="rpName" name="name" placeholder="আপনার নাম" autocomplete="name">
								<span class="rp-err"></span>
							</div>
							<div class="rp-field">
								<label class="l" for="rpPhone">Phone <em>*</em></label>
								<input type="tel" id="rpPhone" name="phone" placeholder="01XXXXXXXXX" inputmode="numeric" maxlength="14" autocomplete="tel">
								<span class="rp-err"></span>
							</div>
							<div class="rp-field">
								<label class="l" for="rpAddress">Address <em>*</em></label>
								<input type="text" id="rpAddress" name="address" placeholder="পণ্য নেওয়ার ঠিকানা" autocomplete="street-address">
								<span class="rp-err"></span>
							</div>
							<div class="rp-field">
								<label class="l" for="rpOrder">Order Id <em>*</em></label>
								<input type="text" id="rpOrder" name="order_id" placeholder="যেমন NM-123456">
								<span class="rp-err"></span>
							</div>
							<div class="rp-field full">
								<label class="l" for="rpReason">সমস্যার ধরন <em>*</em></label>
								<select id="rpReason" name="reason">
									<option value="">-- বেছে নিন --</option>
									<option>পণ্য নষ্ট / ত্রুটিপূর্ণ</option>
									<option>ভুল পণ্য এসেছে</option>
									<option>সাইজ বা রঙ মেলেনি</option>
									<option>পণ্যের বিবরণের সাথে মেলেনি</option>
									<option>অন্যান্য</option>
								</select>
								<span class="rp-err"></span>
							</div>
							<div class="rp-field full">
								<span class="l" style="font-weight:600;font-size:14px">আপনি কী চান?</span>
								<div class="rp-opts">
									<label class="rp-opt"><input type="radio" name="resolution" value="replace" checked><span><i class="fas fa-sync-alt"></i> পণ্য বদল</span></label>
									<label class="rp-opt"><input type="radio" name="resolution" value="refund"><span><i class="fas fa-hand-holding-usd"></i> টাকা ফেরত</span></label>
								</div>
							</div>
							<div class="rp-field full">
								<label class="l" for="rpIssue">Define Issues <em>*</em></label>
								<textarea id="rpIssue" name="issue" rows="4" placeholder="Describe the problem with the product…"></textarea>
								<span class="rp-err"></span>
							</div>
							<div class="rp-field full">
								<span class="l" style="font-weight:600;font-size:14px">Image (সর্বোচ্চ ৩টি)</span>
								<label class="rp-drop" id="rpDrop" for="rpFiles">
									<i class="fas fa-cloud-upload-alt"></i>
									<b>ছবি আপলোড করতে ক্লিক করুন বা টেনে আনুন</b>
									<small>JPG, PNG বা WEBP, প্রতিটি সর্বোচ্চ ২ MB</small>
									<input type="file" id="rpFiles" name="images[]" accept="image/*" multiple>
								</label>
								<div class="rp-prev" id="rpPrev"></div>
								<span class="rp-err" id="rpFileErr"></span>
							</div>
							<div class="rp-field full">
								<label class="rp-agree"><input type="checkbox" id="rpAgree" name="agree"> <span>আমি <a href="privacy-policy.html">রিটার্ন ও রিফান্ড নীতিমালা</a> পড়েছি এবং মেনে নিচ্ছি।</span></label>
								<span class="rp-err"></span>
							</div>
						</div>
						<div style="text-align:center;margin-top:22px">
							<button type="submit" class="rp-submit">SUBMIT <i class="fas fa-paper-plane"></i></button>
						</div>
					</div>

					<div class="rp-ok" id="rpOk">
						<i class="fas fa-check"></i>
						<h3>রিটার্ন রিকোয়েস্ট জমা হয়েছে!</h3>
						<p>আমাদের টিম ২৪ ঘণ্টার মধ্যে আপনার ফোন নম্বরে যোগাযোগ করবে।</p>
						<div class="no" id="rpTicket">RT-000000</div><br>
						<a href="index.html" class="rp-submit" style="padding:11px 30px;font-size:15px">হোমে ফিরুন</a>
					</div>
				</form>
			</div>

			<aside class="rp-side">
				<div class="rp-box yes">
					<h4><i class="fas fa-check-circle"></i> যেসব পণ্য রিটার্ন করা যাবে</h4>
					<ul>
						<li><i class="fas fa-check"></i> হাতে পাওয়ার ৭ দিনের মধ্যে</li>
						<li><i class="fas fa-check"></i> নষ্ট, ভাঙা বা ত্রুটিপূর্ণ পণ্য</li>
						<li><i class="fas fa-check"></i> ভুল পণ্য বা ভুল সাইজ এলে</li>
						<li><i class="fas fa-check"></i> অব্যবহৃত ও মূল প্যাকেজিংসহ</li>
					</ul>
				</div>
				<div class="rp-box no">
					<h4><i class="fas fa-times-circle"></i> যা রিটার্ন করা যাবে না</h4>
					<ul>
						<li><i class="fas fa-times"></i> ব্যবহার করা বা ধোয়া পণ্য</li>
						<li><i class="fas fa-times"></i> ৭ দিন পার হয়ে গেলে</li>
						<li><i class="fas fa-times"></i> নিজের ভুলে নষ্ট হওয়া পণ্য</li>
						<li><i class="fas fa-times"></i> ইনার ওয়্যার ও হাইজিন পণ্য</li>
					</ul>
				</div>
				<div class="rp-help">
					<i class="fas fa-headset"></i>
					<h5>সাহায্য লাগবে?</h5>
					<p>সকাল ১০টা – রাত ১০টা</p>
					<a href="tel:0123456857">0123456857</a>
				</div>
			</aside>
		</div>

		<div class="rp-faq">
			<div class="rp-head" style="margin-bottom:18px"><h2>সচরাচর জিজ্ঞাসা</h2></div>
			<details open><summary>রিটার্ন করতে কতদিন সময় পাব?</summary><p>পণ্য হাতে পাওয়ার ৭ দিনের মধ্যে রিটার্ন রিকোয়েস্ট জমা দিতে হবে।</p></details>
			<details><summary>রিটার্নের জন্য কি ডেলিভারি চার্জ দিতে হবে?</summary><p>আমাদের ভুলে (ভুল বা নষ্ট পণ্য) হলে কোনো চার্জ লাগবে না। অন্য ক্ষেত্রে ডেলিভারি চার্জ প্রযোজ্য হতে পারে।</p></details>
			<details><summary>টাকা কীভাবে ও কতদিনে ফেরত পাব?</summary><p>পণ্য ফেরত পাওয়ার পর ৩–৫ কর্মদিবসের মধ্যে বিকাশ, নগদ বা ব্যাংকের মাধ্যমে টাকা ফেরত দেওয়া হবে।</p></details>
			<details><summary>আমার রিকোয়েস্টের অবস্থা কীভাবে জানব?</summary><p>রিকোয়েস্ট জমার পর পাওয়া RT নম্বরটি সংরক্ষণ করুন এবং আমাদের হটলাইনে জানান।</p></details>
		</div>
	</div>
</section>

@verbatim
<script>
(function () {
  /* backend এলে false করুন – তখন ফর্ম সরাসরি সার্ভারে submit হবে */
  var DEMO = true;
  var $ = function (id) { return document.getElementById(id); };
  var all = function (s, r) { return [].slice.call((r || document).querySelectorAll(s)); };
  var en = function (s) { return String(s).replace(/[০-৯]/g, function (d) { return '০১২৩৪৫৬৭৮৯'.indexOf(d); }); };
  var MAXF = 3, MAXMB = 2;
  var form = $('rpForm'), files = [];

  /* ---------- ছবি আপলোড + প্রিভিউ ---------- */
  function syncInput() {
    var dt = new DataTransfer(); files.forEach(function (f) { dt.items.add(f); }); $('rpFiles').files = dt.files;
  }
  function drawPrev() {
    var box = $('rpPrev'); box.innerHTML = '';
    files.forEach(function (f, i) {
      var d = document.createElement('div'); d.className = 'rp-thumb';
      var im = document.createElement('img'); im.src = URL.createObjectURL(f); im.alt = f.name;
      var b = document.createElement('button'); b.type = 'button'; b.setAttribute('aria-label', 'Remove'); b.innerHTML = '<i class="fas fa-times"></i>';
      b.onclick = function () { files.splice(i, 1); syncInput(); drawPrev(); };
      d.appendChild(im); d.appendChild(b); box.appendChild(d);
    });
  }
  function addFiles(list) {
    var err = '';
    [].forEach.call(list, function (f) {
      if (!/^image\//.test(f.type)) { err = 'শুধু ছবি (JPG, PNG, WEBP) দেওয়া যাবে।'; return; }
      if (f.size > MAXMB * 1024 * 1024) { err = '"' + f.name + '" ২ MB এর বেশি বড়।'; return; }
      if (files.length >= MAXF) { err = 'সর্বোচ্চ ৩টি ছবি দেওয়া যাবে।'; return; }
      files.push(f);
    });
    $('rpFileErr').textContent = err; syncInput(); drawPrev();
  }
  $('rpFiles').onchange = function () { addFiles(this.files); };
  var drop = $('rpDrop');
  ['dragenter', 'dragover'].forEach(function (ev) { drop.addEventListener(ev, function (e) { e.preventDefault(); drop.classList.add('over'); }); });
  ['dragleave', 'drop'].forEach(function (ev) { drop.addEventListener(ev, function (e) { e.preventDefault(); drop.classList.remove('over'); }); });
  drop.addEventListener('drop', function (e) { addFiles(e.dataTransfer.files); });

  /* ---------- ভ্যালিডেশন ---------- */
  function fail(id, text) { var f = $(id).closest('.rp-field'); f.classList.add('invalid'); f.querySelector('.rp-err').textContent = text; return false; }
  function clearErr() { all('.rp-field').forEach(function (f) { f.classList.remove('invalid'); var e = f.querySelector('.rp-err'); if (e && e.id !== 'rpFileErr') e.textContent = ''; }); }
  function validate() {
    clearErr(); var ok = true, first = null;
    var phone = en($('rpPhone').value).replace(/[\s-]/g, '').replace(/^\+?88/, '');
    if ($('rpName').value.trim().length < 2) { ok = fail('rpName', 'আপনার নাম লিখুন'); first = first || 'rpName'; }
    if (!/^01[3-9]\d{8}$/.test(phone)) { ok = fail('rpPhone', 'সঠিক মোবাইল নম্বর দিন'); first = first || 'rpPhone'; }
    if ($('rpAddress').value.trim().length < 6) { ok = fail('rpAddress', 'ঠিকানা লিখুন'); first = first || 'rpAddress'; }
    if (!/^[A-Za-z]{0,3}-?\d{4,}$/.test($('rpOrder').value.trim())) { ok = fail('rpOrder', 'সঠিক অর্ডার আইডি দিন (যেমন NM-123456)'); first = first || 'rpOrder'; }
    if (!$('rpReason').value) { ok = fail('rpReason', 'সমস্যার ধরন বেছে নিন'); first = first || 'rpReason'; }
    if ($('rpIssue').value.trim().length < 10) { ok = fail('rpIssue', 'সমস্যাটি কমপক্ষে ১০ অক্ষরে লিখুন'); first = first || 'rpIssue'; }
    if (!$('rpAgree').checked) { ok = fail('rpAgree', 'নীতিমালায় সম্মতি দিন'); first = first || 'rpAgree'; }
    if (first) $(first).focus();
    return ok;
  }
  all('.rp-field input, .rp-field select, .rp-field textarea').forEach(function (i) {
    var h = function () { var f = i.closest('.rp-field'); f.classList.remove('invalid'); var e = f.querySelector('.rp-err'); if (e && e.id !== 'rpFileErr') e.textContent = ''; };
    i.addEventListener('input', h); i.addEventListener('change', h);
  });

  form.onsubmit = function (e) {
    if (!validate()) { e.preventDefault(); return; }
    if (!DEMO) return;                       /* backend: স্বাভাবিকভাবে submit হবে */
    e.preventDefault();
    $('rpTicket').textContent = 'RT-' + Math.floor(100000 + Math.random() * 900000);
    $('rpFormWrap').style.display = 'none'; $('rpOk').classList.add('show');
    window.scrollTo({ top: form.getBoundingClientRect().top + window.scrollY - 150, behavior: 'smooth' });
  };
})();
</script>
@endverbatim
@endsection