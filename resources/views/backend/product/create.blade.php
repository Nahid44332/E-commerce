@extends('backend.master')

@section('content')
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
                                <!-- Edit Button (Direct Modal Trigger) -->
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

                        <!-- Direct Edit Modal for Each Product -->
                        <div id="editProductModal{{ $product->id }}" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm hidden">
                            <div class="bg-white dark:bg-slate-900 w-full max-w-4xl rounded-2xl shadow-xl overflow-hidden border border-slate-200 dark:border-slate-800 m-4 text-left">
                                
                                <!-- Modal Header -->
                                <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50">
                                    <h3 class="text-lg font-bold text-slate-800 dark:text-white">Edit Product: {{ $product->name }}</h3>
                                    <button onclick="closeEditModal({{ $product->id }})" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 font-bold text-xl">&times;</button>
                                </div>

                                <!-- Modal Body (Full Add Form Fields Adapted for Edit) -->
                                <div class="p-6 max-h-[80vh] overflow-y-auto">
                                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                                        @csrf
                                        @method('PUT')

                                        <!-- Basic Info Section -->
                                        <div class="space-y-4">
                                            <h4 class="text-xs font-bold uppercase text-slate-400 border-b border-slate-100 pb-2 dark:border-slate-800">Basic Information</h4>
                                            
                                            <div>
                                                <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Product Name <span class="text-red-500">*</span></label>
                                                <input type="text" name="name" value="{{ $product->name }}" required
                                                    class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Brand Name</label>
                                                    <input type="text" name="brand" value="{{ $product->brand }}"
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                </div>
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">SKU Code <span class="text-red-500">*</span></label>
                                                    <input type="text" name="sku" value="{{ $product->sku }}" required
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                </div>
                                            </div>

                                            <div>
                                                <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Short Description</label>
                                                <textarea name="short_description" rows="2"
                                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 p-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">{{ $product->short_description }}</textarea>
                                            </div>

                                            <div>
                                                <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Full Description</label>
                                                <textarea name="long_description" rows="4"
                                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 p-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">{{ $product->long_description }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Pricing & Inventory Section -->
                                        <div class="space-y-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                                            <h4 class="text-xs font-bold uppercase text-slate-400 border-b border-slate-100 pb-2 dark:border-slate-800">Pricing & Inventory</h4>
                                            
                                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Cost Price (৳) <span class="text-red-500">*</span></label>
                                                    <input type="number" step="0.01" name="cost_price" value="{{ $product->cost_price }}" required
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                </div>
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Regular Price (৳) <span class="text-red-500">*</span></label>
                                                    <input type="number" step="0.01" name="price" value="{{ $product->price }}" required
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                </div>
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Discount Price (৳)</label>
                                                    <input type="number" step="0.01" name="discount_price" value="{{ $product->discount_price }}"
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                </div>
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Stock Qty <span class="text-red-500">*</span></label>
                                                    <input type="number" name="stock_qty" value="{{ $product->stock_qty }}" required
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Organization (Categories & Status) -->
                                        <div class="space-y-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                                            <h4 class="text-xs font-bold uppercase text-slate-400 border-b border-slate-100 pb-2 dark:border-slate-800">Organization & Status</h4>
                                            
                                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Category <span class="text-red-500">*</span></label>
                                                    <select name="category_id" required
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
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
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                        <option value="">Select Sub Category</option>
                                                        @foreach(\App\Models\SubCategory::all() as $subCat)
                                                            <option value="{{ $subCat->id }}" {{ $product->sub_category_id == $subCat->id ? 'selected' : '' }}>
                                                                {{ $subCat->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Badge Label</label>
                                                    <select name="badge"
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
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
                                                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">
                                                        <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Media Section -->
                                        <div class="space-y-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                                            <h4 class="text-xs font-bold uppercase text-slate-400 border-b border-slate-100 pb-2 dark:border-slate-800">Product Images</h4>
                                            
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Main Thumbnail</label>
                                                    <div class="flex items-center gap-3 mb-2">
                                                        <img src="{{ asset($product->image) }}" alt="" class="w-12 h-12 rounded-lg object-cover border">
                                                        <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Gallery Images (New)</label>
                                                    <input type="file" name="gallery_images[]" accept="image/*" multiple class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-700">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Buttons -->
                                        <div class="flex justify-end gap-3 pt-4 border-t border-slate-200 dark:border-slate-800">
                                            <button type="button" onclick="closeEditModal({{ $product->id }})" class="px-5 py-2.5 bg-slate-200 text-slate-700 rounded-xl text-sm font-semibold hover:bg-slate-300 transition">Cancel</button>
                                            <button type="submit" class="px-5 py-2.5 bg-indigo-600 text-white rounded-xl text-sm font-semibold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/20">Update Product</button>
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

<!-- Modal Script -->
<script>
    function openEditModal(productId) {
        const modal = document.getElementById('editProductModal' + productId);
        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeEditModal(productId) {
        const modal = document.getElementById('editProductModal' + productId);
        if (modal) {
            modal.classList.add('hidden');
        }
    }
</script>
@endsection