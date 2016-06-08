<?php

namespace App\Http\Controllers\Admin\Shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    function index()
    {
        return view('Admin/Shop/category/index');
    }
}
