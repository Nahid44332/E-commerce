<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Weight;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('backend.product.create', compact('categories', 'subCategories'));
    }

    public function store(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name'             => 'required|string|max:255',
            'cost_price'       => 'required|numeric|min:0',
            'price'            => 'required|numeric|min:0',
            'discount_price'   => 'nullable|numeric|lt:price',
            'stock_qty'        => 'required|integer|min:0',
            'category_id'      => 'required|exists:categories,id',
            'image'            => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // 2. Calculate Discount Percentage
        $discountPercent = null;
        if ($request->filled('discount_price') && $request->price > 0) {
            $discount = $request->price - $request->discount_price;
            $discountPercent = round(($discount / $request->price) * 100);
        }

       // 3. Main Image Upload (Direct to public/backend/images/products)
        $mainImagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::random(5) . '.' . $file->getClientOriginalExtension();
            
            // সরাসরি public ফোল্ডারে পাথ বলে দেওয়া
            $uploadPath = public_path('backend/images/products');
            
            // ফোল্ডার না থাকলে অটো তৈরি করে নেবে
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            
            $file->move($uploadPath, $filename);
            
            // ডাটাবেজে সেভ হওয়ার জন্য রিলেটিভ পাথ
            $mainImagePath = 'backend/images/products/' . $filename;
        }

        // 4. Multiple Gallery Images Upload
        $galleryImagePaths = [];
        if ($request->hasFile('gallery_images')) {
            $galleryPath = public_path('backend/images/products/gallery');
            
            if (!file_exists($galleryPath)) {
                mkdir($galleryPath, 0777, true);
            }

            foreach ($request->file('gallery_images') as $gFile) {
                $gFilename = time() . '_' . Str::random(8) . '.' . $gFile->getClientOriginalExtension();
                $gFile->move($galleryPath, $gFilename);
                
                $galleryImagePaths[] = 'backend/images/products/gallery/' . $gFilename;
            }
        }
        // 5. Save Product Main Information
        $product = Product::create([
            'name'              => $request->name,
            'slug'              => Str::slug($request->name) . '-' . Str::random(5),
            'brand'             => $request->brand,
            'sku'               => $request->sku ?? 'SKU-' . strtoupper(Str::random(6)),
            'short_description' => $request->short_description,
            'long_description'  => $request->long_description,
            'cost_price'        => $request->cost_price,
            'price'             => $request->price,
            'discount_price'    => $request->discount_price,
            'discount_percent'  => $discountPercent,
            'stock_qty'         => $request->stock_qty,
            'category_id'       => $request->category_id,
            'sub_category_id'   => $request->sub_category_id,
            'badge'             => $request->badge,
            'status'            => $request->status ?? 'active',
            'image'             => $mainImagePath,
            'gallery_images'    => $galleryImagePaths,
        ]);

        // 6. Save Variants (Colors, Sizes, Weights)
        if ($request->has('colors') && is_array($request->colors)) {
            foreach (array_filter($request->colors) as $color) {
                Color::create([
                    'product_id' => $product->id,
                    'color_name' => $color,
                ]);
            }
        }

        if ($request->has('sizes') && is_array($request->sizes)) {
            foreach (array_filter($request->sizes) as $size) {
                Size::create([
                    'product_id' => $product->id,
                    'size_name'  => $size,
                ]);
            }
        }

        if ($request->has('weights') && is_array($request->weights)) {
            foreach (array_filter($request->weights) as $weight) {
                Weight::create([
                    'product_id'  => $product->id,
                    'weight_name' => $weight,
                ]);
            }
        }

        return redirect()->back()->with('success', 'প্রোডাক্ট সফলভাবে যুক্ত হয়েছে!');
    }

   // ১. প্রোডাক্ট লিস্ট পেজ
    public function productList()
    {
        $products = Product::with('category', 'subCategory')->latest()->paginate(10);
        return view('backend.product.list', compact('products'));
    }

    // ২. এডিট পেজ ভিউ
    public function edit($id)
    {
        $product = Product::with('colors', 'sizes', 'weights')->findOrFail($id);
        $categories = \App\Models\Category::all();
        $subCategories = \App\Models\SubCategory::all();
        return view('backend.product.edit', compact('product', 'categories', 'subCategories'));
    }

    // ৩. আপডেট লজিক
   public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // ১. আগের গ্যালারি ইমেজ রিট্রাইভ করা
    $oldGallery = is_string($product->gallery_images) ? json_decode($product->gallery_images, true) : ($product->gallery_images ?? []);
    
    // ইউজার যে গ্যালারি ছবিগুলো ফর্মে রেখেছে
    $retainedGallery = $request->input('existing_gallery_images', []);

    // যেগুলো ইউজার ক্রস করে ডিলিট করে দিয়েছে সেগুলো ফোল্ডার থেকে মুছে ফেলা
    if (is_array($oldGallery)) {
        foreach ($oldGallery as $oldImg) {
            if (!in_array($oldImg, $retainedGallery)) {
                if (file_exists(public_path($oldImg))) {
                    unlink(public_path($oldImg));
                }
            }
        }
    }

    // ২. নতুন কোনো গ্যালারি ছবি আপলোড করা হলে সেগুলো যুক্ত করা
    $finalGalleryPaths = $retainedGallery;

    if ($request->hasFile('gallery_images')) {
        $galleryPath = public_path('backend/images/products/gallery');
        
        if (!file_exists($galleryPath)) {
            mkdir($galleryPath, 0777, true);
        }

        foreach ($request->file('gallery_images') as $gFile) {
            $gFilename = time() . '_' . \Illuminate\Support\Str::random(8) . '.' . $gFile->getClientOriginalExtension();
            $gFile->move($galleryPath, $gFilename);
            
            $finalGalleryPaths[] = 'backend/images/products/gallery/' . $gFilename;
        }
    }

    // ৩. প্রোডাক্ট তথ্য ও গ্যালারি অ্যারে আপডেট করা (JSON ফরম্যাটে)
    $product->update([
        'name'              => $request->name,
        'brand'             => $request->brand,
        'sku'               => $request->sku,
        'short_description' => $request->short_description,
        'long_description'  => $request->long_description,
        'cost_price'        => $request->cost_price,
        'price'             => $request->price,
        'discount_price'    => $request->discount_price,
        'stock_qty'         => $request->stock_qty,
        'category_id'       => $request->category_id,
        'sub_category_id'   => $request->sub_category_id,
        'badge'             => $request->badge,
        'status'            => $request->status,
        'gallery_images'    => json_encode($finalGalleryPaths), // JSON encoded array
    ]);

    return redirect()->back()->with('success', 'প্রোডাক্ট সফলভাবে আপডেট হয়েছে!');
}

    // ৪. ডিলিট লজিক
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // ফোল্ডার থেকে মেইন ছবি ডিলিট
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        // সম্পর্কিত ভেরিয়েন্ট এবং প্রোডাক্ট ডিলিট
        $product->colors()->delete();
        $product->sizes()->delete();
        $product->weights()->delete();
        $product->delete();

        return redirect()->back()->with('success', 'প্রোডাক্ট সফলভাবে ডিলিট হয়েছে!');
    }
}
