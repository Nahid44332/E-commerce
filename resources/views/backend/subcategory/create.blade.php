@extends('backend.master')

@section('title', 'Sub-Category Management | Nitto Mart Admin')

@section('content')
    <!-- Page Header -->
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-xl font-bold sm:text-2xl">Sub-Category Management</h1>
            <p class="text-xs text-slate-500 sm:text-sm dark:text-slate-400">Manage all sub-categories and their parent category relationships.</p>
        </div>
        <button type="button" onclick="openAddModal()"
            class="flex h-9 items-center gap-2 rounded-full bg-brand-500 px-3.5 text-xs font-bold text-white shadow-lg shadow-brand-500/30 transition hover:bg-brand-600 sm:h-10 sm:px-5 sm:text-sm">
            <i class="fa-solid fa-plus"></i> Add Sub-Category
        </button>
    </div>

    <!-- Filter Bar -->
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4 rounded-2xl bg-white p-4 shadow-sm dark:bg-slate-900">
        <div class="relative flex-1 min-w-[200px] max-w-xs">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-xs text-slate-400"></i>
            <input type="text" placeholder="Search sub-categories..."
                class="h-9 w-full rounded-xl border border-slate-200 bg-slate-50 pl-9 pr-3 text-xs outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800">
        </div>
        <span class="text-xs font-semibold text-slate-400">Total {{ $subcategories->count() }} Sub-Categories</span>
    </div>

    <!-- Sub-Categories Table -->
    <div class="rounded-2xl bg-white p-4 shadow-sm sm:p-5 dark:bg-slate-900">
        <div class="table-scroll">
            <table class="w-full min-w-[640px] text-left text-xs sm:text-sm">
                <thead>
                    <tr class="border-b border-slate-100 text-[11px] uppercase tracking-wide text-slate-400 sm:text-xs dark:border-slate-800">
                        <th class="pb-3 font-bold">SL</th>
                        <th class="pb-3 font-bold">Sub-Category Name</th>
                        <th class="pb-3 font-bold">Parent Category</th>
                        <th class="pb-3 font-bold">Status</th>
                        <th class="pb-3 text-right font-bold">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    @forelse ($subcategories as $key => $subcat)
                        <tr>
                            <td class="px-4 py-3">{{ $key + 1 }}</td>
                            <td class="px-4 py-3 font-bold text-slate-700 dark:text-slate-200">{{ $subcat->name }}</td>
                            <td class="px-4 py-3">
                                <span class="rounded-lg bg-brand-50 px-2.5 py-1 text-xs font-bold text-brand-600 dark:bg-brand-950/40 dark:text-brand-400">
                                    {{ $subcat->category->name ?? 'N/A' }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                @if ($subcat->status == 'active')
                                    <span class="rounded-full bg-green-100 px-2.5 py-0.5 text-[11px] font-bold text-green-700 dark:bg-green-900/40 dark:text-green-300">Active</span>
                                @else
                                    <span class="rounded-full bg-red-100 px-2.5 py-0.5 text-[11px] font-bold text-red-700 dark:bg-red-900/40 dark:text-red-300">Inactive</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-right space-x-1">
                                <button onclick="openEditModal({{ $subcat }})"
                                    class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-brand-600 dark:hover:bg-slate-800" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button onclick="openDeleteModal({{ $subcat->id }}, '{{ $subcat->name }}')"
                                    class="inline-flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-red-50 hover:text-red-500 dark:hover:bg-slate-800" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-4 text-center text-slate-400">No sub-categories found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- ================= MODALS SECTION ================= -->

    <!-- 1. Add Sub-Category Modal -->
    <div id="addModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4 backdrop-blur-sm hidden">
        <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-2xl dark:bg-slate-900">
            <div class="mb-4 flex items-center justify-between border-b border-slate-100 pb-3 dark:border-slate-800">
                <h3 class="text-lg font-bold flex items-center gap-2"><i class="fa-solid fa-folder-plus text-brand-500"></i> Add New Sub-Category</h3>
                <button type="button" onclick="closeModal('addModal')" class="text-slate-400 hover:text-slate-600 dark:hover:text-white"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>
            <form action="{{ route('admin.subcategories.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Parent Category</label>
                    <select name="category_id" required
                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800">
                        <option value="">Select Parent Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Sub-Category Name</label>
                    <input type="text" name="name" placeholder="e.g. Smart Phone" required
                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800">
                </div>
                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Status</label>
                    <select name="status"
                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="mt-6 flex gap-3">
                    <button type="button" onclick="closeModal('addModal')"
                        class="flex-1 rounded-xl border border-slate-200 py-2.5 text-sm font-bold hover:bg-slate-50 dark:border-slate-700 dark:hover:bg-slate-800">Cancel</button>
                    <button type="submit"
                        class="flex-1 rounded-xl bg-brand-500 py-2.5 text-sm font-bold text-white hover:bg-brand-600 shadow-lg shadow-brand-500/30">Save Sub-Category</button>
                </div>
            </form>
        </div>
    </div>

    <!-- 2. Edit Sub-Category Modal -->
    <div id="editModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4 backdrop-blur-sm hidden">
        <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-2xl dark:bg-slate-900">
            <div class="mb-4 flex items-center justify-between border-b border-slate-100 pb-3 dark:border-slate-800">
                <h3 class="text-lg font-bold flex items-center gap-2"><i class="fa-solid fa-pen-to-square text-brand-500"></i> Edit Sub-Category</h3>
                <button type="button" onclick="closeModal('editModal')" class="text-slate-400 hover:text-slate-600 dark:hover:text-white"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>
            <form id="editSubCategoryForm" action="" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <input type="hidden" id="edit_subcat_id" name="id">
                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Parent Category</label>
                    <select id="edit_category_id" name="category_id" required
                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800">
                        <option value="">Select Parent Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Sub-Category Name</label>
                    <input type="text" id="edit_name" name="name" required
                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800">
                </div>
                <div>
                    <label class="block mb-1 text-xs font-bold uppercase text-slate-500">Status</label>
                    <select id="edit_status" name="status"
                        class="h-10 w-full rounded-xl border border-slate-200 bg-slate-50 px-3 text-sm outline-none focus:border-brand-500 dark:border-slate-700 dark:bg-slate-800">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="mt-6 flex gap-3">
                    <button type="button" onclick="closeModal('editModal')"
                        class="flex-1 rounded-xl border border-slate-200 py-2.5 text-sm font-bold hover:bg-slate-50 dark:border-slate-700 dark:hover:bg-slate-800">Cancel</button>
                    <button type="submit"
                        class="flex-1 rounded-xl bg-brand-500 py-2.5 text-sm font-bold text-white hover:bg-brand-600 shadow-lg shadow-brand-500/30">Update Sub-Category</button>
                </div>
            </form>
        </div>
    </div>

    <!-- 3. Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4 backdrop-blur-sm hidden">
        <div class="w-full max-w-sm rounded-2xl bg-white p-6 text-center shadow-2xl dark:bg-slate-900">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-red-100 text-2xl text-red-500 dark:bg-red-900/40">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <h3 class="text-lg font-bold">Are you sure?</h3>
            <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Do you really want to delete sub-category <b id="delete_subcat_name" class="text-slate-800 dark:text-slate-200"></b>? This action cannot be undone.</p>
            <form id="deleteSubCategoryForm" action="" method="POST" class="mt-6 flex gap-3">
                @csrf
                @method('DELETE')
                <button type="button" onclick="closeModal('deleteModal')"
                    class="flex-1 rounded-xl border border-slate-200 py-2.5 text-sm font-bold hover:bg-slate-50 dark:border-slate-700 dark:hover:bg-slate-800">Cancel</button>
                <button type="submit"
                    class="flex-1 rounded-xl bg-red-500 py-2.5 text-sm font-bold text-white hover:bg-red-600 shadow-lg shadow-red-500/30">Delete</button>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function openAddModal() {
            document.getElementById('addModal').classList.remove('hidden');
        }

        function openEditModal(subcat) {
            document.getElementById('edit_subcat_id').value = subcat.id;
            document.getElementById('edit_category_id').value = subcat.category_id;
            document.getElementById('edit_name').value = subcat.name;
            document.getElementById('edit_status').value = subcat.status;

            let updateUrl = "{{ route('admin.subcategories.update', ':id') }}".replace(':id', subcat.id);
            document.getElementById('editSubCategoryForm').action = updateUrl;

            document.getElementById('editModal').classList.remove('hidden');
        }

        function openDeleteModal(id, name) {
            let deleteUrl = "{{ route('admin.subcategories.destroy', ':id') }}".replace(':id', id);
            document.getElementById('deleteSubCategoryForm').action = deleteUrl;

            document.getElementById('delete_subcat_name').innerText = name;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>
@endpush