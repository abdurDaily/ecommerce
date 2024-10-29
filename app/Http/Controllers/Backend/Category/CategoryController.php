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
        return view('backend.category.Category');
    }

    //STORE CATEGORY 
    public function storeCategory(Request $request)
    {
        // Validate the request
        $request->validate([
            'category_name' => 'required|unique:categories,category_name|string|max:30',
        ]);

        // Create a new category
        $category = new Category();
        $category->category_name = $request->category_name; // Adjust based on your column name
        $category->category_slug = Str::slug($request->category_name); // Adjust based on your column name
        $category->save();

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
                'id' => 'required|integer|exists:categories,id',
                'category_name' => 'required|string|max:255',
            ]);

            $category = Category::find($request->id);
            $category->category_name = $request->category_name; // Store the actual name
            $category->category_slug = Str::slug($request->category_name); // Create and store the slug
            $category->save();

            return response()->json(['success' => true]);
        }




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
