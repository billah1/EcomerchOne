<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest('id')->select('id','title','slug','category_image','created_at')->get();
        return view('Backend.pages.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    protected  static $imageFile, $imageName, $imageDirectory, $imageUrl ;

    protected $mhMethod;
    public function store(Request $request)
    {
        $image =  $request->file('category_image');
        $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
        $path = $image->move('images/',$image_name);


//        self::$imageFile = $request->file('category_image');
//
//
//        self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
//        self::$imageDirectory = 'assets/img/Category/upload/';
//        self::$imageFile->move(self::$imageDirectory, self::$imageName);
//        self::$imageUrl = self::$imageDirectory.self::$imageName;


        $category = Category::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'category_image'=>$path,
        ]);
        return redirect()->route('category.index');
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
    public function edit( $slug)
    {
        $category = Category::whereSlug($slug)->first();
        return view('Backend.pages.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $image =  $request->file('category_image');
        $image_name = Str::random(15).'.'.$image->getClientOriginalExtension();
        $path = $image->move('images/',$image_name);


//        self::$imageFile = $request->file('category_image');
//
//
//        self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
//        self::$imageDirectory = 'assets/img/Category/upload/';
//        self::$imageFile->move(self::$imageDirectory, self::$imageName);
//        self::$imageUrl = self::$imageDirectory.self::$imageName;

        $category = Category::whereSlug($slug)->first();
        $category->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'category_image'=>$path,
        ]);
        return redirect()->route('Backend.pages.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    protected $ss;
    public function destroy(string $slug)
    {
        $this->ss =  Category::where('slug',$slug)->first();
        if ($this->ss->category_image)
        {
            unlink($this->ss->category_image);
        }
        $this->ss->delete();
        return redirect()->back();


    }
}
