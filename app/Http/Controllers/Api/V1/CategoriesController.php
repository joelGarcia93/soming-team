<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Category;
use Validator;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(Request $request) {

      $validator = Validator::make($request->all(), [
        'name_spanish' => 'required',
        'name_english' => 'required',
        'description_spanish' => 'required',
        'description_english' => 'required'
     ]);

      if ($validator->fails()) {
         return response()->json(['error' => 'todos los campos de la categoria son requeridos']);
      }

      $category = Category::create($request->all());

      return response()->json($category);

    }
}
