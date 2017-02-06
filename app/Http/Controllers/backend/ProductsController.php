<?php


namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use App\Http\Requests\StoreProducts;
use App\Http\Requests\UpdateProducts;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('backend.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducts $request)
    {
        $product = new Product;
        $product->name = $request->name; 
        $product->category_id = $request->category_id;  
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->status = $request->status;
        if($request->file('image')!==null) :
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $img = Image::make($image->getRealPath())
                        ->resize(426, 590)
                        ->save($destinationPath.'/'.$imageName);
            $product->image = 'img/'.$imageName;
        endif;  
        $product->save();
        return redirect('/backend/products')->with('message' , 'Product added !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('backend.product.update', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducts $request, $id)
    {
        //update product information
        $product = Product::find($id);
        $oldImage = $product->image;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        // $product->description = str_limit($request->description);
        $product->status = $request->status;
        if($request->file('image')!==null) :
            File::delete(public_path($oldImage));
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $img = Image::make($image->getRealPath())
                        ->resize(426,590)
                        ->save($destinationPath.'/'.$imageName);
            $product->image = 'img/'.$imageName;
            File::delete(public_path($img));
        elseif ($request->file('image')==null) :
            $product->image = $oldImage;
        endif;
        $product->save();
        return redirect('backend/products')->with('message' , 'Product info updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        //delete product image
        $oldImage = $product->image;
        File::delete(public_path($oldImage));
        $product->delete();
        return back()->with('message' , 'Product erased !');
    }
}
