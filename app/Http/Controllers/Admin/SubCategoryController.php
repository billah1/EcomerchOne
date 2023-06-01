<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $subcategories = SubCategory::with('category')->get(['id','category_id','title','slug','subcategory_image','created_at']);
        return view('Backend.pages.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get(['id','title']);
        return view('Backend.pages.subcategory.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    public function store(Request $request)
    {
//        return $request;
        $image =  $request->file('subcategory_image');
         $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
         $path = $image->move('images/',$image_name);
          $subcategory = SubCategory::create([
            'category_id' => $request->category_id,
            'title' => $request->subcategory_title,
            'slug'=>Str::slug($request->subcategory_title),
            'subcategory_image'=>$path,
        ]);
        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $subcategory = SubCategory::find($id);
        return view('Backend.pages.subcategory.show',compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $categories = Category::get(['id','title']);
         $subcategory = SubCategory::find($id);
        return view('Backend.pages.subcategory.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $subcategory = SubCategory::findOrFail($id);

         if ($request->hasFile('subcategory_image')){
             $image =  $request->file('subcategory_image');
             $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
             $path = $image->move('images/',$image_name);
         }else{
             $path = $subcategory->subcategory_image;
         }

        $subcategory->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug'=>Str::slug($request->title),
            'subcategory_image'=>$path,
        ]);
         return redirect()->route('subcategory.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    protected $ss;
    public function destroy(string $id)
    {
//        return $id;
           $this->ss =  SubCategory::where('id',$id)->first();
        if ($this->ss->subcategory_image)
        {
            unlink($this->ss->subcategory_image);
        }
        $this->ss->delete();
        return redirect()->back();
    }
}
