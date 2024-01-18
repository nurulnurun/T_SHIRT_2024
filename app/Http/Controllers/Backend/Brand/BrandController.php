<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function brandList()
    {
        // dd('Brand List');

        $brands = Brand::all();
        return view('Backend.Pages.Brand.BrandList', compact('brands'));
    }

    public function CreateNewBrandForm()
    {
        // dd('Create New Brand Form');

        return view('Backend.Pages.Brand.CreateNewBrandForm');
    }

    public function brandPost(Request $Brand_Post)
    {
        // dd($Brand_Post->all());

        Brand::create([
            'brand_id'=>$Brand_Post->brand_id,
            'brand_name'=>$Brand_Post->brand_name,
            'brand_status'=>$Brand_Post->brand_status,
            'brand_image'=>$Brand_Post->brand_image,
            'brand_description'=>$Brand_Post->brand_description
        ]);

        return redirect()->route('brand.list');
    }
}
