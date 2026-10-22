@extends('backend.master')

@section('title', 'Add New Product | Nitto Mart Admin')

@section('content')
<!-- Summernote CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- Page Header -->
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-xl font-bold sm:text-2xl">Add New Product</h1>
            <p class="text-xs text-slate-500 sm:text-sm dark:text-slate-400">Fill in the details to publish a new product.</p>
        </div>
        <a href="#"
            class="flex h-9 items-center gap-2 rounded-full bg-slate-200 px-4 text-xs font-bold text-slate-700 transition hover:bg-slate-300 sm:h-10 sm:text-sm dark:bg-slate-800 dark:text-slate-200">
            <i class="fa-solid fa-arrow-left"></i> Back to List
        </a>
    </div>

    <!-- Product Form -->
    <form action="#" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        @csrf

        <!-- Left 2 Columns -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Basic Info Card -->
            <div class="rounded-2xl bg-white p-5 shadow-sm space-y-4 dark:bg-slate-900">
                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-100 pb-3 dark:border-slate-800">Basic Information</h3>
                
                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Product Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" placeholder="e.g. Cotton Panjabi" required
                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Brand Name</label>
                        <input type="text" name="brand" placeholder="e.g. Nitto Mart"
                            class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                    </div>
                    <div>
                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">SKU Code <span class="text-red-500">*</span></label>
                        <input type="text" name="sku" placeholder="e.g. NM-1001" required
                            class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                    </div>
                </div>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Short Description</label>
                    <textarea name="short_description" rows="2" placeholder="Brief product highlight..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 p-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 summernote"></textarea>
                </div>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Full Description</label>
                    <textarea name="long_description" rows="5" placeholder="Detailed product specifications..."
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 p-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 summernote"></textarea>
                </div>
            </div>

            <!-- Pricing & Inventory Card -->
           <!-- Pricing & Inventory Card -->
<div class="rounded-2xl bg-white p-5 shadow-sm space-y-4 dark:bg-slate-900">
    <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-100 pb-3 dark:border-slate-800">
        <i class="fa-solid fa-coins text-brand-500 mr-1"></i> Pricing & Inventory
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- 1. Purchase / Cost Price (পাইকারি কেনা দাম) -->
        <div>
            <label class="block mb-1 text-xs font-bold uppercase text-slate-500">
                Cost Price / কেনা দাম (৳) <span class="text-red-500">*</span>
            </label>
            <input type="number" step="0.01" name="cost_price" placeholder="e.g. 600" required
                class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
        </div>

        <!-- 2. Regular Price (বিক্রি দাম) -->
        <div>
            <label class="block mb-1 text-xs font-bold uppercase text-slate-500">
                Regular Price / বিক্রি দাম (৳) <span class="text-red-500">*</span>
            </label>
            <input type="number" step="0.01" name="price" placeholder="e.g. 1100" required
                class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
        </div>

        <!-- 3. Discount Price (অফার দাম) -->
        <div>
            <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Discount Price / অফার (৳)</label>
            <input type="number" step="0.01" name="discount_price" placeholder="e.g. 850"
                class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
        </div>

        <!-- 4. Stock Quantity (স্টক পরিমাণ) -->
        <div>
            <label class="block mb-1 text-xs font-bold uppercase text-slate-500">
                Stock Quantity / স্টক <span class="text-red-500">*</span>
            </label>
            <input type="number" name="stock_qty" placeholder="e.g. 50" required
                class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
        </div>
    </div>
</div>

            <!-- Dynamic Variants Card (Color, Size, Weight) -->
            <div class="rounded-2xl bg-white p-5 shadow-sm space-y-6 dark:bg-slate-900">
                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-100 pb-3 dark:border-slate-800">
                    Product Variants (Add More)
                </h3>

                <!-- 1. Color Section -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <label class="text-xs font-bold uppercase text-slate-500">Colors (রং)</label>
                        <button type="button" onclick="addColorRow()" class="inline-flex items-center gap-1 rounded-lg bg-brand-50 px-2.5 py-1 text-xs font-bold text-brand-600 hover:bg-brand-100 dark:bg-brand-950/40 dark:text-brand-400">
                            <i class="fa-solid fa-plus"></i> Add Color
                        </button>
                    </div>
                    <div id="colorContainer" class="space-y-2">
                        <div class="flex items-center gap-2 color-row">
                            <input type="text" name="colors[]" placeholder="e.g. Red / Black" class="h-10 flex-1 rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                            <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 2. Size Section -->
                <div class="space-y-3 border-t border-slate-100 pt-4 dark:border-slate-800">
                    <div class="flex items-center justify-between">
                        <label class="text-xs font-bold uppercase text-slate-500">Sizes (সাইজ)</label>
                        <button type="button" onclick="addSizeRow()" class="inline-flex items-center gap-1 rounded-lg bg-brand-50 px-2.5 py-1 text-xs font-bold text-brand-600 hover:bg-brand-100 dark:bg-brand-950/40 dark:text-brand-400">
                            <i class="fa-solid fa-plus"></i> Add Size
                        </button>
                    </div>
                    <div id="sizeContainer" class="space-y-2">
                        <div class="flex items-center gap-2 size-row">
                            <input type="text" name="sizes[]" placeholder="e.g. M / L / XL" class="h-10 flex-1 rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                            <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 3. Weight Section -->
                <div class="space-y-3 border-t border-slate-100 pt-4 dark:border-slate-800">
                    <div class="flex items-center justify-between">
                        <label class="text-xs font-bold uppercase text-slate-500">Weights / Packs (ওজন/পরিমাণ)</label>
                        <button type="button" onclick="addWeightRow()" class="inline-flex items-center gap-1 rounded-lg bg-brand-50 px-2.5 py-1 text-xs font-bold text-brand-600 hover:bg-brand-100 dark:bg-brand-950/40 dark:text-brand-400">
                            <i class="fa-solid fa-plus"></i> Add Weight
                        </button>
                    </div>
                    <div id="weightContainer" class="space-y-2">
                        <div class="flex items-center gap-2 weight-row">
                            <input type="text" name="weights[]" placeholder="e.g. 500 Gram / 1 Kg" class="h-10 flex-1 rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                            <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right 1 Column -->
        <div class="space-y-6">
            <!-- Category Selection Card -->
            <div class="rounded-2xl bg-white p-5 shadow-sm space-y-4 dark:bg-slate-900">
                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-100 pb-3 dark:border-slate-800">Organization</h3>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Category <span class="text-red-500">*</span></label>
                    <select name="category_id" required class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                        <option value="">Select Category</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Sub Category</label>
                    <select name="sub_category_id" class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                        <option value="">Select Sub Category</option>
                    </select>
                </div>
            </div>

            <!-- Badges & Status -->
            <div class="rounded-2xl bg-white p-5 shadow-sm space-y-4 dark:bg-slate-900">
                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-100 pb-3 dark:border-slate-800">Status & Badges</h3>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Badge Label</label>
                    <select name="badge" class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                        <option value="">None</option>
                        <option value="Hot">Hot</option>
                        <option value="New">New</option>
                        <option value="Best">Best</option>
                        <option value="Trending">Trending</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Status</label>
                    <select name="status" class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

            <!-- Media Card -->
            <div class="rounded-2xl bg-white p-5 shadow-sm space-y-4 dark:bg-slate-900">
                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-100 pb-3 dark:border-slate-800">Product Images</h3>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Main Thumbnail <span class="text-red-500">*</span></label>
                    <input type="file" name="image" accept="image/*" required
                        class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-brand-50 file:text-brand-700 hover:file:bg-brand-100">
                </div>

                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Gallery Images</label>
                    <input type="file" name="gallery_images[]" accept="image/*" multiple
                        class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                </div>
            </div>

            <!-- Save Action Button -->
            <button type="submit" class="w-full rounded-xl bg-brand-500 py-3 text-sm font-bold text-white shadow-lg shadow-brand-500/30 hover:bg-brand-600 transition">
                <i class="fa-solid fa-cloud-arrow-up mr-2"></i> Save Product
            </button>
        </div>
    </form>
@endsection

@push('script')
<script>
    function addColorRow() {
        const container = document.getElementById('colorContainer');
        const html = `
            <div class="flex items-center gap-2 color-row">
                <input type="text" name="colors[]" placeholder="e.g. Red / Black" class="h-10 flex-1 rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-trash-can text-xs"></i>
                </button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function addSizeRow() {
        const container = document.getElementById('sizeContainer');
        const html = `
            <div class="flex items-center gap-2 size-row">
                <input type="text" name="sizes[]" placeholder="e.g. M / L / XL" class="h-10 flex-1 rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-trash-can text-xs"></i>
                </button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function addWeightRow() {
        const container = document.getElementById('weightContainer');
        const html = `
            <div class="flex items-center gap-2 weight-row">
                <input type="text" name="weights[]" placeholder="e.g. 500 Gram / 1 Kg" class="h-10 flex-1 rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-trash-can text-xs"></i>
                </button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function removeRow(button) {
        const row = button.closest('.color-row, .size-row, .weight-row');
        const parent = row.parentElement;
        if (parent.children.length > 1) {
            row.remove();
        } else {
            row.querySelector('input').value = '';
        }
    }
</script>
<!-- jQuery & Summernote JS CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            placeholder: 'এখানে বিবরণ লিখুন বা পেস্ট করুন...',
            tabsize: 2,
            height: 180,
            toolbar: [
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endpush