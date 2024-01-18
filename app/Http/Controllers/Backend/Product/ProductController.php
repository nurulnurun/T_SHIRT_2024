<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        // dd('Product List');

        $product = Product::all();
        return view('Backend.Pages.Product.ProductList', compact('product'));
    }

    public function createNewProductForm()
    {
        // dd('Create New Product Form');

        return view('Backend.Pages.Product.CreateNewProductForm');
    }

    public function productStore(Request $Product_Post)
    {
        // dd($Product_Post->all());

        $fileName = null;
        if($Product_Post->hasFile('product_image'))
        {
            $file = $Product_Post->file('product_image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/Uploads_File', $fileName);
        }

        Product::create([
            'product_id'=>$Product_Post->product_id,
            'product_name'=>$Product_Post->product_name,
            'product_image'=>$fileName,
            'product_price'=>$Product_Post->product_price,
            'product_stock'=>$Product_Post->product_stock,
            'product_status'=>$Product_Post->product_status
        ]);

        return redirect()->route('product.list');

    }
}
