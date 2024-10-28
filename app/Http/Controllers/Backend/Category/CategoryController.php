<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //CREATE CATEGORY 
    public function createCategory(){
        return view('backend.category.Category');
    }
    
    //STORE CATEGORY 
    public function storeCategory(Request $request){
        dd($request->all());
    }
}
