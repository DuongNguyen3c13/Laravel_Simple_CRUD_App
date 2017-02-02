<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function showProducts($category) {
    	$categories = Category::all();
    	$products = Category::find($category)->products;
    	return view('frontend.index', compact('products', 'categories'));
    }
}
