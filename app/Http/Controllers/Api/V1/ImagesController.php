<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Image;
use App\Product;
use App\Http\Controllers\Controller;
use Validator;

class ImagesController extends Controller
{
    public function store(Request $request) {

      $validator = Validator::make($request->all(), [
         'image' => 'required|image|mimes:jpeg,jpg,png',
         'product_id' => 'required'
     ]);

     if ($validator->fails()) {
        return response()->json(['error' => 'La imagen y el producto son requeridos']);
     }

     $product = Product::find($request->product_id);

     if ($product == null) {
       return response()->json(['error' => 'el producto no existe']);
     }

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $fileName = $image->getClientOriginalName();
        $destinationPath = base_path() . '/public/uploads/images/' . $fileName;
        $image->move($destinationPath, $fileName);

        $image = Image::create([
          'filename' => $fileName,
          'url' => $destinationPath,
          'product_id' => $request->product_id
        ]);

        return response()->json($image);
    }
  }

  public function update(Request $request, $id) {

    $validator = Validator::make($request->all(), [
       'image' => 'required|image|mimes:jpeg,jpg,png'
   ]);

   if ($validator->fails()) {
      return response()->json(['error' => 'La imagen es requerida']);
   }

   if ($request->hasFile('image')) {
       $image = $request->file('image');

       $fileName = $image->getClientOriginalName();
       $destinationPath = base_path() . '/public/uploads/images/' . $fileName;
       $image->move($destinationPath, $fileName);

       $imageObject = Image::find($id);

       if ($imageObject == null) {
         return response()->json(['error' => 'la imagen no existe']);
       }

       $imageObject->update([
         'filename' => $fileName,
         'url' => $destinationPath
       ]);

       return response()->json($imageObject);
   }

  }
}
