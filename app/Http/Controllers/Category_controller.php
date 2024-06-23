<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Category_controller extends Controller
{
    public function allcategories(){
        return view('categories', [
            "title" => "All categories",
            "categories" => Category::all()
        ]);
    }

    public function calculator_categories(){
        return view('measure', [
            "title" => "All categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('category', [
            "title" => "$category->name Recommendation for Your Diet",
            "posts" => $category->posts->load('category')
        ]);
    }



}
