<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category','subcategory','childcategory'])->get();
        return view('Backend.pages.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get(['id','title']);
        $subcategories = SubCategory::get(['id','title']);
        $childcategories = ChildCategory::get(['id','title']);
        return view('Backend.pages.product.create',compact('categories','subcategories','childcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    public function store(Request $request)
    {
//        return $request;
       $image =  $request->file('product_image');
       $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
        $path = $image->move('images/',$image_name);
        $products = Product::create([
            'category_id' =>$request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'childcategory_id' =>$request->childcategory_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'product_code' => $request->product_code,
            'product_price' => $request->product_price,
            'product_stock' => $request->product_stock,
            'alert_quantity' => $request->alert_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'additional_info' => $request->additional_info,
            'product_image' => $path,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get(['id','title']);
        $subcategories = SubCategory::get(['id','title']);
        $childcategories = ChildCategory::get(['id','title']);
        $product = Product::find($id);
        return view('Backend.pages.product.edit',compact('categories','subcategories','childcategories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find( $id);
        if ($request->hasFile('product_image')){
            $image =  $request->file('product_image');
            $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
            $path = $image->move('images/',$image_name);
        }else{
            $path = $product->product_image;
        }
        $product->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'childcategory_id' => $request->childcategory_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'product_code' => $request->product_code,
            'product_price' => $request->product_price,
            'product_stock' => $request->product_stock,
            'alert_quantity' => $request->alert_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'additional_info' => $request->additional_info,
            'product_image' => $path,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    protected $ss;
    public function destroy(string $id)
    {
        $this->ss = Product::where('id',$id)->first();
        if($this->ss->product_image){
            unlink($this->ss->product_image);
        }
        $this->ss->delete();
        return  redirect()->back();
    }
}
