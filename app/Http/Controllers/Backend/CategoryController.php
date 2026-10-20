<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.category.create', compact('categories')); 
    }

  public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|unique:categories,name',
            'image'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/categories'), $imageName);
            $imagePath = 'backend/images/categories/' . $imageName;
        }

        Category::create([
            'name'   => $request->name,
            'slug'   => Str::slug($request->name),
            'image'  => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Category Created Successfully!');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'     => 'required|exists:categories,id',
            'name'   => 'required|unique:categories,name,' . $request->id,
            'image'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $category = Category::findOrFail($request->id);
        $imagePath = $category->image;

        if ($request->hasFile('image')) {
            // পুরানো ছবি ডিলিট করা
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/categories'), $imageName);
            $imagePath = 'backend/images/categories/' . $imageName;
        }

        $category->update([
            'name'   => $request->name,
            'slug'   => Str::slug($request->name),
            'image'  => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Category Updated Successfully!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image && file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category Deleted Successfully!');
    }
}