<?php

namespace App\Http\Controllers\Admin\Shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Shop\Brand;

class BrandController extends Controller
{
    function index(Request $request)
    {
        $where = function ($query) use ($request) {
            if ($request->has('keyword') and $request->keyword != '') {
                $search = "%" . $request->keyword . "%";
                $query->where('name', 'like', $search);
            }
        };

        $brands = Brand::where($where)->OrderBy('sort_order')->paginate(4);
//        return $brands;
        return view('Admin/Shop/brand/index')->with('brands', $brands);
    }

    function create()
    {
        return view('Admin/Shop/brand/create');
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
        return view('Admin/Shop/brand/edit')->with('brand', $brand);
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

    function sort_order(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->sort_order = $request->sort_order;
        $brand->save();
    }


    function is_something(Request $request)
    {
        $attr = $request->attr;
        $brand = Brand::find($request->id);
        $value = $brand->$attr ? false : true;
        $brand->$attr = $value;
        $brand->save();
    }

}
