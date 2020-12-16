<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use App\Models\Product;
class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('product.list', $products);
    }
}
