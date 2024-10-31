<?php

namespace App\Http\Controllers\Backend\Category;

use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    // STORE SUB CATEGORY 
    public function storeSubCategory(Request $request)
    {
        // Validate the request
        $request->validate([
            'category_id' => 'required|exists:categories,id', // Ensure the category exists
            'category_name' => 'required|string|max:255', // Adjust max length as needed
            'subcategory_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        // Create a new subcategory
        $subCategory = new SubCategory();
        $subCategory->categorie_id = $request->category_id; // Foreign key from categories table
        $subCategory->sub_cat_name = $request->category_name; // Subcategory name
        $subCategory->sub_cat_slug = Str::slug($request->category_name); // Generate slug from name
        $subCategory->sub_cat_status = false; // Set status (you can adjust this logic)

        // Handle image upload
        if ($request->hasFile('subcategory_image')) {
            $subcategory_image = $request->subcategory_image->extension();
            $subcategory_image_name = 'subcategory-' . time() . '.' . $subcategory_image; // Create a unique image name
            $store_image = $request->subcategory_image->storeAs("subcategories", $subcategory_image_name, 'public'); // Store image
            $path_image = url('storage/' . $store_image); // Get the public URL of the image
            $subCategory->sub_cat_image = $path_image; // Save image path
        }

        try {
            $subCategory->save(); // Save the subcategory
            // Return a JSON response
            return response()->json(['message' => 'Subcategory created successfully!', 'data' => $subCategory], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating subcategory: ' . $e->getMessage()], 500);
        }
    }
}