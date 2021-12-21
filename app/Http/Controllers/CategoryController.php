<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    // get all controllers
    public static function categories()
    {
        return Category::all();
    }
}
