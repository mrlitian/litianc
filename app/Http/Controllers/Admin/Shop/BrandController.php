<?php

namespace App\Http\Controllers\Admin\Shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Shop\Brand;

class BrandController extends Controller
{
    function index()
    {

        $brands = Brand::OrderBy('sort_order')->get();
//        return $brands;
        return view('Admin/brand/index')->with('brands', $brands);
    }

    function create()
    {
        return view('Admin/brand/create');
    }

    function store(Request $request)
    {
//        return $request->all();
        Brand::create($request->all());
        return redirect('admin/Shop/brand');
    }

    function edit($id)
    {
//        return 111;
        $brand = Brand::find($id);
        return view('Admin/brand/edit')->with('brand', $brand);
    }

    function update(Request $request, $id)
    {
//        return $request;
        $brand = Brand::find($id);
        $brand->update($request->all());
        return redirect('admin/Shop/brand');
    }

    function destroy($id)
    {
//        return $id;
        $brand = Brand::find($id);
        $brand->destroy($id);
        return redirect('admin/Shop/brand');
    }
}
