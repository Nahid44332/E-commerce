<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ১. সাব-ক্যাটাগরি পেজ ও লিস্ট ভিউ
    public function index()
    {
        $subcategories = SubCategory::with('category')->latest()->get();
        $categories = Category::where('status', 'active')->orderBy('name', 'asc')->get();
        return view('backend.subcategory.create', compact('subcategories', 'categories'));
    }

    // ২. নতুন সাব-ক্যাটাগরি তৈরি (Store)
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|unique:sub_categories,name',
            'status'      => 'required|in:active,inactive',
        ]);


        SubCategory::create([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'status'      => $request->status,
        ]);

        return redirect()->back()->with('success', 'Sub-Category Created Successfully!');
    }

    // ৩. সাব-ক্যাটাগরি আপডেট (Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|unique:sub_categories,name,' . $id,
            'status'      => 'required|in:active,inactive',
        ]);

        $subcategory = SubCategory::findOrFail($id);


        $subcategory->update([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'status'      => $request->status,
        ]);

        return redirect()->back()->with('success', 'Sub-Category Updated Successfully!');
    }

    // ৪. সাব-ক্যাটাগরি ডিলিট (Destroy)
    public function destroy($id)
    {
        $subcategory = SubCategory::findOrFail($id);

        if ($subcategory->image && file_exists(public_path($subcategory->image))) {
            unlink(public_path($subcategory->image));
        }

        $subcategory->delete();

        return redirect()->back()->with('success', 'Sub-Category Deleted Successfully!');
    }
}
