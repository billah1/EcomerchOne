<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $childcategories = ChildCategory::with(['category','subcategory'])->get();
      //return $childcategories = ChildCategory::with('category','subcategory')->get(['id','category_id','subcategory_id ','title','slug','childcategory_image','created_at']);
        return view('Backend.pages.childcategory.index',compact('childcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get(['id','title']);
        $subcategories = SubCategory::get(['id','title']);
        return view('Backend.pages.childcategory.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;
    public function store(Request $request)
    {

        $image =  $request->file('childcategory_image');
        $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
        $path = $image->move('images/',$image_name);
         $childcategory = ChildCategory::create([
            'category_id' =>$request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'childcategory_image' => $path,
        ]);

          return redirect()->route('childcategory.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $childcategory = ChildCategory::find($id);
        return view('Backend.pages.childcategory.show',compact('childcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get(['id','title']);
        $subcategories = SubCategory::get(['id','title']);
        $childcategory = ChildCategory::find($id);
        return view('Backend.pages.childcategory.edit',compact('categories','subcategories','childcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $childcategory = ChildCategory::findOrFail($id);
        if ($request->hasFile('childcategory_image')){
            $image =  $request->file('childcategory_image');
            $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
            $path = $image->move('images/',$image_name);
        }else{
            $path = $childcategory->childcategory_image;
        }
        $childcategory->update([
            'category_id' =>$request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'childcategory_image' => $path,
        ]);
        return redirect()->route('childcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    protected $ss;
    public function destroy(string $id)
    {
        $this->ss = ChildCategory::where('id',$id)->first();
        if($this->ss->childcategory_image){
            unlink($this->ss->childcategory_image);
        }
        $this->ss->delete();
        return  redirect()->back();
    }
}
