<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends BaseController
{

    public function index()
    {
        $products = Product::all();
        return $this->sendResponse(ProductResource::collection($products), 'Products fetched.');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }
        if ($files = $request->file('image')) {
            //store file into document folder
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload'), $imageName);
            $input['image'] = $imageName;
        }
        $product = Product::create($input);
        return $this->sendResponse(new ProductResource($product), 'Product created.');
    }


    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return $this->sendError('Product does not exist.');
        }
        return $this->sendResponse(new ProductResource($product), 'Product fetched.');
    }


    public function update(Request $request, Product $product)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        if ($files = $request->file('image')) {
            //store file into document folder
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload'), $imageName);
            $input['image'] = $imageName;
        }
        
        $product->title = $input['title'];
        $product->description = $input['description'];
        $product->image = $input['image'];
        $product->save();

        return $this->sendResponse(new ProductResource($product), 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $this->sendResponse([], 'Product deleted.');
    }
}
