<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function allcategories(){
        return view('home', [
            "title" => "All categories",
            "categories" => Category::all()
        ]);
    }}
