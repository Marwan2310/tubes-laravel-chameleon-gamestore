<?php

namespace App\Http\Controllers;

use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller

{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    return view('dashboard.categories.index', [
      'categories' => Category::all()

    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard.categories.create', [
      'categories' => Category::all()
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'title' => 'required|max:255',
      'slug' => 'required|unique:categories',

      'image' => 'image|file|max:5024',

    ]);

    if ($request->file('image')) {
      $validatedData['image'] = $request->file('image')->store('post-images');
    }

    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

    Category::create($validatedData);

    return redirect('/dashboard/categories')->with('success', 'New post has been added');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category)
  {
    return view('dashboard.categories.show', [
      'category' => $category
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function edit(Category $category)
  {
    return view('dashboard.categories.edit', [
      'category' => $category,
      'categories' => Category::all()
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $rules = [
      'title' => 'required|max:255',
      'slug' => 'required|unique:categories',
      'image' => 'image|file|max:5024',


    ];

    if ($request->slug != $category->slug) {
      $rules['slug'] = 'required|unique:categories';
    }

    $validatedData = $request->validate($rules);

    if ($request->file('image')) {
      if ($request->oldImage) {
        Storage::delete($request->oldImage);
      }
      $validatedData['image'] = $request->file('image')->store('category-images');
    }

    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

    Category::where('id', $category->id)
      ->update($validatedData);

    return redirect('/dashboard/categories')->with('success', 'Post has been Updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    Category::destroy($category->id);
    return redirect('/dashboard/categories')->with('success', 'Post has been deleted');
  }

  public function checkSlug(Request $request)
  {

    $slug = SlugService::createSlug(Category::class, 'slug', $request->title);
    return response()->json(['slug' => $slug]);
  }
}
