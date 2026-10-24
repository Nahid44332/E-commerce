@extends('backend.master')

@section('content')
<!-- Summernote CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<div class="p-6">
    <!-- Header & Add Button -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Product List</h1>
            <p class="text-sm text-slate-500">Manage all your store products, stock, and pricing here.</p>
        </div>
        <a href="{{ route('admin.Product.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-xl text-sm font-semibold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/20">
            + Add New Product
        </a>
    </div>

    <!-- Success Message Alert -->
    @if(session('success'))
        <div class="mb-4 p-4 bg-emerald-50 border border-emerald-200 text-emerald-600 rounded-xl text-sm flex items-center justify-between">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-emerald-700 font-bold">&times;</button>
        </div>
    @endif

    <!-- Table Card -->
    <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50 text-xs uppercase font-bold text-slate-500">
                        <th class="p-4">Image & Title</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Price (Cost / Reg)</th>
                        <th class="p-4">Stock</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800 text-sm">
                    @forelse($products as $product)
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition">
                            <!-- Image & Name -->
                            <td class="p-4 flex items-center gap-3">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-12 h-12 rounded-lg object-cover border border-slate-200 dark:border-slate-700">
                                <div>
                                    <div class="font-semibold text-slate-800 dark:text-slate-200">{{ $product->name }}</div>
                                    <div class="text-xs text-slate-400">SKU: {{ $product->sku }}</div>
                                </div>
                            </td>

                            <!-- Category -->
                            <td class="p-4 text-slate-600 dark:text-slate-300">
                                <span class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 rounded-lg text-xs font-medium">
                                    {{ $product->category->name ?? 'N/A' }}
                                </span>
                            </td>

                            <!-- Pricing -->
                            <td class="p-4">
                                <div class="text-slate-800 dark:text-slate-200 font-medium">৳{{ number_format($product->price, 2) }}</div>
                                <div class="text-xs text-slate-400">Cost: ৳{{ number_format($product->cost_price, 2) }}</div>
                            </td>

                            <!-- Stock -->
                            <td class="p-4">
                                <span class="px-2.5 py-1 rounded-lg text-xs font-bold {{ $product->stock_qty > 5 ? 'bg-emerald-50 text-emerald-600 dark:bg-emerald-500/10' : 'bg-red-50 text-red-600 dark:bg-red-500/10' }}">
                                    {{ $product->stock_qty }} Pcs
                                </span>
                            </td>

                            <!-- Status -->
                            <td class="p-4">
                                <span class="inline-block w-2 h-2 rounded-full {{ $product->status == 'active' ? 'bg-emerald-500' : 'bg-rose-500' }} mr-1.5"></span>
                                <span class="capitalize text-xs font-medium text-slate-600 dark:text-slate-300">{{ $product->status }}</span>
                            </td>

                            <!-- Actions -->
                            <td class="p-4 text-right space-x-2">
                                <!-- Edit Button -->
                                <button onclick="openEditModal({{ $product->id }})" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-600 hover:text-white transition dark:bg-indigo-500/10 dark:text-indigo-400 dark:hover:bg-indigo-600 dark:hover:text-white" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>

                                <!-- Delete Form -->
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white transition dark:bg-rose-500/10 dark:text-rose-400 dark:hover:bg-rose-600 dark:hover:text-white" title="Delete">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Direct Full Edit Modal for Product -->
                        <div id="editProductModal{{ $product->id }}" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm hidden">
                            <div class="bg-white dark:bg-slate-900 w-full max-w-5xl rounded-2xl shadow-xl overflow-hidden border border-slate-200 dark:border-slate-800 m-4 text-left">
                                
                                <!-- Modal Header -->
                                <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50">
                                    <h3 class="text-lg font-bold text-slate-800 dark:text-white">Edit Product: {{ $product->name }}</h3>
                                    <button onclick="closeEditModal({{ $product->id }})" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 font-bold text-xl">&times;</button>
                                </div>

                                <!-- Modal Body -->
                                <div class="p-6 max-h-[85vh] overflow-y-auto">
                                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                                        @csrf
                                        @method('PUT')

                                        <!-- Left 2 Columns -->
                                        <div class="lg:col-span-2 space-y-6">
                                            <!-- Basic Info Card -->
                                            <div class="rounded-2xl border border-slate-100 p-5 shadow-sm space-y-4 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-200 pb-3 dark:border-slate-700">
                                                    Basic Information</h3>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Product Name <span class="text-red-500">*</span></label>
                                                    <input type="text" name="name" value="{{ $product->name }}" required
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                </div>

                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <div>
                                                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Brand Name</label>
                                                        <input type="text" name="brand" value="{{ $product->brand }}"
                                                            class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">SKU Code <span class="text-red-500">*</span></label>
                                                        <input type="text" name="sku" value="{{ $product->sku }}" required
                                                            class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Short Description</label>
                                                    <textarea name="short_description" rows="2"
                                                        class="w-full rounded-xl border border-slate-200 bg-white p-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 edit-summernote">{{ $product->short_description }}</textarea>
                                                </div>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Full Description</label>
                                                    <textarea name="long_description" rows="4"
                                                        class="w-full rounded-xl border border-slate-200 bg-white p-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 edit-summernote">{{ $product->long_description }}</textarea>
                                                </div>
                                            </div>

                                            <!-- Pricing & Inventory Card -->
                                            <div class="rounded-2xl border border-slate-100 p-5 shadow-sm space-y-4 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-200 pb-3 dark:border-slate-700">
                                                    Pricing & Inventory
                                                </h3>

                                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                                    <div>
                                                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Cost Price (৳) <span class="text-red-500">*</span></label>
                                                        <input type="number" step="0.01" name="cost_price" value="{{ $product->cost_price }}" required
                                                            class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Regular Price (৳) <span class="text-red-500">*</span></label>
                                                        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required
                                                            class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Discount Price (৳)</label>
                                                        <input type="number" step="0.01" name="discount_price" value="{{ $product->discount_price }}"
                                                            class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Stock Qty <span class="text-red-500">*</span></label>
                                                        <input type="number" name="stock_qty" value="{{ $product->stock_qty }}" required
                                                            class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dynamic Variants Card (Color, Size, Weight) -->
                                            <div class="rounded-2xl border border-slate-100 p-5 shadow-sm space-y-6 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-200 pb-3 dark:border-slate-700">
                                                    Product Variants
                                                </h3>

                                                <!-- 1. Color Section -->
                                                <div class="space-y-3">
                                                    <div class="flex items-center justify-between">
                                                        <label class="text-xs font-bold uppercase text-slate-500">Colors (রং)</label>
                                                        <button type="button" onclick="editAddColorRow({{ $product->id }})"
                                                            class="inline-flex items-center gap-1 rounded-lg bg-indigo-50 px-2.5 py-1 text-xs font-bold text-indigo-600 hover:bg-indigo-100 dark:bg-indigo-950/40 dark:text-indigo-400">
                                                            + Add Color
                                                        </button>
                                                    </div>
                                                    <div id="editColorContainer{{ $product->id }}" class="space-y-2">
                                                        @forelse($product->colors as $color)
                                                            <div class="flex items-center gap-2 color-row">
                                                                <input type="text" name="colors[]" value="{{ $color->color_name }}"
                                                                    class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                                <button type="button" onclick="removeRow(this)"
                                                                    class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
                                                            </div>
                                                        @empty
                                                            <div class="flex items-center gap-2 color-row">
                                                                <input type="text" name="colors[]" placeholder="e.g. Red / Black"
                                                                    class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                                <button type="button" onclick="removeRow(this)"
                                                                    class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>

                                                <!-- 2. Size Section -->
                                                <div class="space-y-3 border-t border-slate-200 pt-4 dark:border-slate-700">
                                                    <div class="flex items-center justify-between">
                                                        <label class="text-xs font-bold uppercase text-slate-500">Sizes (সাইজ)</label>
                                                        <button type="button" onclick="editAddSizeRow({{ $product->id }})"
                                                            class="inline-flex items-center gap-1 rounded-lg bg-indigo-50 px-2.5 py-1 text-xs font-bold text-indigo-600 hover:bg-indigo-100 dark:bg-indigo-950/40 dark:text-indigo-400">
                                                            + Add Size
                                                        </button>
                                                    </div>
                                                    <div id="editSizeContainer{{ $product->id }}" class="space-y-2">
                                                        @forelse($product->sizes as $size)
                                                            <div class="flex items-center gap-2 size-row">
                                                                <input type="text" name="sizes[]" value="{{ $size->size_name }}"
                                                                    class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                                <button type="button" onclick="removeRow(this)"
                                                                    class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
                                                            </div>
                                                        @empty
                                                            <div class="flex items-center gap-2 size-row">
                                                                <input type="text" name="sizes[]" placeholder="e.g. M / L / XL"
                                                                    class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                                <button type="button" onclick="removeRow(this)"
                                                                    class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>

                                                <!-- 3. Weight Section -->
                                                <div class="space-y-3 border-t border-slate-200 pt-4 dark:border-slate-700">
                                                    <div class="flex items-center justify-between">
                                                        <label class="text-xs font-bold uppercase text-slate-500">Weights / Packs (ওজন/পরিমাণ)</label>
                                                        <button type="button" onclick="editAddWeightRow({{ $product->id }})"
                                                            class="inline-flex items-center gap-1 rounded-lg bg-indigo-50 px-2.5 py-1 text-xs font-bold text-indigo-600 hover:bg-indigo-100 dark:bg-indigo-950/40 dark:text-indigo-400">
                                                            + Add Weight
                                                        </button>
                                                    </div>
                                                    <div id="editWeightContainer{{ $product->id }}" class="space-y-2">
                                                        @forelse($product->weights as $weight)
                                                            <div class="flex items-center gap-2 weight-row">
                                                                <input type="text" name="weights[]" value="{{ $weight->weight_name }}"
                                                                    class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                                <button type="button" onclick="removeRow(this)"
                                                                    class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
                                                            </div>
                                                        @empty
                                                            <div class="flex items-center gap-2 weight-row">
                                                                <input type="text" name="weights[]" placeholder="e.g. 500 Gram / 1 Kg"
                                                                    class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                                <button type="button" onclick="removeRow(this)"
                                                                    class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Right 1 Column -->
                                        <div class="space-y-6">
                                            <!-- Category Selection Card -->
                                            <div class="rounded-2xl border border-slate-100 p-5 shadow-sm space-y-4 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-200 pb-3 dark:border-slate-700">
                                                    Organization</h3>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Category <span class="text-red-500">*</span></label>
                                                    <select name="category_id" required
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                        <option value="">Select Category</option>
                                                        @foreach(\App\Models\Category::all() as $cat)
                                                            <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                                                                {{ $cat->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Sub Category</label>
                                                    <select name="sub_category_id"
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                        <option value="">Select Sub Category</option>
                                                        @foreach(\App\Models\SubCategory::all() as $subCat)
                                                            <option value="{{ $subCat->id }}" {{ $product->sub_category_id == $subCat->id ? 'selected' : '' }}>
                                                                {{ $subCat->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Badges & Status Card -->
                                            <div class="rounded-2xl border border-slate-100 p-5 shadow-sm space-y-4 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-200 pb-3 dark:border-slate-700">
                                                    Status & Badges</h3>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Badge Label</label>
                                                    <select name="badge"
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                        <option value="">None</option>
                                                        <option value="Hot" {{ $product->badge == 'Hot' ? 'selected' : '' }}>Hot</option>
                                                        <option value="New" {{ $product->badge == 'New' ? 'selected' : '' }}>New</option>
                                                        <option value="Best" {{ $product->badge == 'Best' ? 'selected' : '' }}>Best</option>
                                                        <option value="Trending" {{ $product->badge == 'Trending' ? 'selected' : '' }}>Trending</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Status</label>
                                                    <select name="status"
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                        <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Media Card -->
                                            <div class="rounded-2xl border border-slate-100 p-5 shadow-sm space-y-4 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                                <h3 class="text-sm font-bold uppercase text-slate-400 border-b border-slate-200 pb-3 dark:border-slate-700">
                                                    Product Images</h3>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Main Thumbnail</label>
                                                    <div class="flex items-center gap-3 mb-2">
                                                        <img src="{{ asset($product->image) }}" alt="" class="w-12 h-12 rounded-lg object-cover border border-slate-200 dark:border-slate-700">
                                                        <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-500">
                                                    </div>
                                                </div>

      <!-- Gallery Images Management Section -->
<div class="space-y-4 pt-4 border-t border-slate-100 dark:border-slate-800">
    <h3 class="text-xs font-bold uppercase text-slate-400 border-b border-slate-200 pb-2 dark:border-slate-700">
        Gallery Images Management
    </h3>
    
    <!-- Existing Gallery Images -->
    <div>
        <label class="block mb-2 text-xs font-bold uppercase text-slate-500">Current Gallery Images</label>
        <div class="flex flex-wrap gap-3" id="galleryContainer{{ $product->id }}">
            @php
                // JSON string থাকলে array তে decode করা, বা array থাকলে সরাসরি নেওয়া
                $galleryImages = is_string($product->gallery_images) ? json_decode($product->gallery_images, true) : ($product->gallery_images ?? []);
            @endphp

            @if(!empty($galleryImages) && is_array($galleryImages))
                @foreach($galleryImages as $index => $gImg)
                    <div class="relative group w-20 h-20 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 gallery-item" id="g-item-{{ $product->id }}-{{ $index }}">
                        <img src="{{ asset($gImg) }}" alt="Gallery Image" class="w-full h-full object-cover">
                        
                        <!-- Hidden input to keep remaining images during form submit -->
                        <input type="hidden" name="existing_gallery_images[]" value="{{ $gImg }}">

                        <!-- Cross Delete Button -->
                        <button type="button" onclick="removeGalleryItem('g-item-{{ $product->id }}-{{ $index }}')" 
                            class="absolute inset-0 bg-black/60 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity" title="Remove Image">
                            <span class="bg-rose-500 text-white rounded-full w-6 h-6 flex items-center justify-center font-bold text-xs shadow">&times;</span>
                        </button>
                    </div>
                @endforeach
            @else
                <p class="text-xs text-slate-400">No gallery images available.</p>
            @endif
        </div>
    </div>

    <!-- Upload New Gallery Images -->
    <div>
        <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Add New Gallery Images</label>
        <input type="file" name="gallery_images[]" accept="image/*" multiple 
            class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
    </div>
</div>
                                            </div>

                                            <!-- Save Action Buttons -->
                                            <div class="flex items-center gap-2">
                                                <button type="button" onclick="closeEditModal({{ $product->id }})" class="w-1/3 rounded-xl bg-slate-200 py-3 text-sm font-bold text-slate-700 hover:bg-slate-300 transition">Cancel</button>
                                                <button type="submit" class="w-2/3 rounded-xl bg-indigo-600 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-500/30 hover:bg-indigo-700 transition">Update Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-400">
                                No products found. Click "+ Add New Product" to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($products->hasPages())
            <div class="p-4 border-t border-slate-200 dark:border-slate-800">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</div>

<!-- Modal & Variant Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    function openEditModal(productId) {
        const modal = document.getElementById('editProductModal' + productId);
        if (modal) {
            modal.classList.remove('hidden');
            
            // Summernote ইনিশিয়ালাইজেশন
            $(`#editProductModal${productId} .edit-summernote`).summernote({
                tabsize: 2,
                height: 150,
                toolbar: [
                    ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });
        }
    }

    function closeEditModal(productId) {
        const modal = document.getElementById('editProductModal' + productId);
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    // Dynamic Variant Helper Functions for Modals
    function editAddColorRow(productId) {
        const container = document.getElementById('editColorContainer' + productId);
        const html = `
            <div class="flex items-center gap-2 color-row">
                <input type="text" name="colors[]" placeholder="e.g. Red / Black" class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function editAddSizeRow(productId) {
        const container = document.getElementById('editSizeContainer' + productId);
        const html = `
            <div class="flex items-center gap-2 size-row">
                <input type="text" name="sizes[]" placeholder="e.g. M / L / XL" class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function editAddWeightRow(productId) {
        const container = document.getElementById('editWeightContainer' + productId);
        const html = `
            <div class="flex items-center gap-2 weight-row">
                <input type="text" name="weights[]" placeholder="e.g. 500 Gram / 1 Kg" class="h-10 flex-1 rounded-xl border border-slate-200 bg-white px-3 text-sm outline-none focus:border-indigo-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                <button type="button" onclick="removeRow(this)" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 text-slate-400 hover:border-red-200 hover:bg-red-50 hover:text-red-500 dark:border-slate-700 dark:hover:bg-slate-800">&times;</button>
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
<script>
    function removeGalleryItem(elementId) {
        const item = document.getElementById(elementId);
        if (item) {
            item.remove();
        }
    }
</script>
@endsection