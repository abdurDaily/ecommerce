<?php

namespace App\Http\Controllers\Backend\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //CREATE CATEGORY 
    public function createCategory()
    {
        $categories = Category::select('id','category_name')->get();
        return view('backend.category.Category', compact('categories'));
    }

    //STORE CATEGORY 
    public function storeCategory(Request $request)
    {
        // Validate the request
        $request->validate([
            'category_name' => 'required|unique:categories,category_name|string|max:30',
            'category_image' => 'nullable|image|mimes:jpeg,svg,png,jpg,gif|max:2048', // .png,.jpg,.webp,.jpeg,.svg,.gif
        ]);



        // Create a new category
        $category = new Category();

        $category->category_name = $request->category_name; // Adjust based on your column name
        $category->category_slug = Str::slug($request->category_name); // Adjust based on your column name
        $category->save();



        // Handle image upload
        if($request->hasFile('category_image')){
            $category_image = $request->category_image->extension();
            $category_image_name  = 'category-' . time().'.'.$category_image;
            $store_image = $request->category_image->storeAs("categoty", $category_image_name, 'public');
            $path_image = env('APP_URL').'/storage/'.$store_image;
            $category->category_image = $path_image;
            $category->save();
        }

        

        // Return a JSON response
        return response()->json(['message' => 'Category created successfully!'], 201);
    }


    // CATEGORY LIST 
    public function categoryList(){
      $categorys = Category::latest()->get();
      return view('backend.category.CategoryList', compact('categorys'));
    }


    // CATEGORY STATUS UPDATE
    public function updateStatus(Request $request)
    {
        $category = Category::find($request->id);
        $category->status = $request->status;
        $category->save();
        return response()->json(['success' => true, 'status' => $category->status]);
    }   


    // CategoryController.php
    public function update(Request $request)
{
    $request->validate([
        'id' => 'required|exists:categories,id',
        'category_name' => 'required|string|max:255',
        'category_image' => 'nullable|image|mimes:png,jpg,jpeg,webp,gif|max:2048', // Validate the image
    ]);

    $category = Category::find($request->id);
    $category->category_name = $request->category_name;

    // Handle image upload
    if ($request->hasFile('category_image')) {
        // Store the image and get the path
        $path = $request->file('category_image')->store('images/categories', 'public');
        $category->category_image = '/storage/' . $path; // Save the path to the database
    }

    $category->save();

    return response()->json([
        'success' => true,
        'category' => $category // Return the updated category data
    ]);
}



        // delete 
        public function delete(Request $request)
            {
                $request->validate([
                    'id' => 'required|integer|exists:categories,id',
                ]);

                $category = Category::find($request->id);
                $category->delete();

                return response()->json(['success' => true]);
            }
}
