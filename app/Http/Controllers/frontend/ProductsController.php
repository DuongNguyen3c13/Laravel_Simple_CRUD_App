<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;


class ProductsController extends Controller
{
    public function index() {
    	$products = Product::all();
    	$categories = Category::all();
    	return view('frontend.index', compact('products', 'categories'));
    }
}
