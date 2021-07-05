<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Category;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends BaseController
{

    public function index()
    {
        $categories = Category::all();
        return $this->sendResponse(CategoryResource::collection($categories), 'Categories fetched.');
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
        $category = Category::create($input);
        return $this->sendResponse(new CategoryResource($category), 'Category created.');
    }


    public function show($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return $this->sendError('Category does not exist.');
        }
        return $this->sendResponse(new CategoryResource($category), 'Category fetched.');
    }


    public function update(Request $request, Category $category)
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
            $category->image = $input['image'];
        }

        $category->title = $input['title'];
        $category->description = $input['description'];

        $category->save();

        return $this->sendResponse(new CategoryResource($category), 'Category updated.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return $this->sendResponse([], 'Category deleted.');
    }
}
