<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;
use Validator;
use App\Category;

class ProductsController extends Controller
{
    public function index() {
      $products = Product::with('category','images')->get();
      return response()->json($products);
    }

    public function show($id) {
      $product = Product::find($id);
      return response()->json($product);
    }

    public function store(Request $request) {

      $validator = Validator::make($request->all(), [
        'name_spanish' => 'required',
        'name_english' => 'required',
        'description_spanish' => 'required',
        'description_english' => 'required',
        'price' => 'required',
        'category_id' => 'required'
     ]);

      if ($validator->fails()) {
         return response()->json(['error' => 'todos los campos del producto son requeridos']);
      }

      $category = Category::find($request->category_id);

      if ($category == null) {
        return response()->json(['error' => 'la categoria no existe']);
      }

      $product = Product::create($request->all());

      return response()->json($product);

    }

    public function update($id, Request $request) {
      $validator = Validator::make($request->all(), [
        'name_spanish' => 'required',
        'name_english' => 'required',
        'description_spanish' => 'required',
        'description_english' => 'required',
        'price' => 'required',
        'category_id' => 'required'
     ]);

      if ($validator->fails()) {
         return response()->json(['error' => 'todos los campos del producto son requeridos']);
      }

      $category = Category::find($request->category_id);

      if ($category == null) {
        return response()->json(['error' => 'la categoria no existe']);
      }

      $product = Product::find($id);

      if ($product == null) {
        return response()->json(['error' => 'el producto no existe']);
      }

      $product->update($request->all());

      return response()->json($product);

    }
}
