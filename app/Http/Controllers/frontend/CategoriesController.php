<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function showProducts($category) {
    	$products = Category::find($category)->products;
    	$currentCategory = Category::find($category);
    	$categories = Category::all();
    	return view('frontend.index', compact('products', 'categories', 'currentCategory'));
    }
}
