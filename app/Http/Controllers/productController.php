<?php

namespace App\Http\Controllers;

use App\Models\scrapped_data;
use Illuminate\Http\Request;

use Exception;


use function Laravel\Prompts\alert;

class productController extends Controller
{
    public function index()
    {
        $products = scrapped_data::take(10)->get();
        return view('product', ['products' => $products]);
    }

    public function append($page)
    {
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $products = scrapped_data::offset($offset)->limit($perPage)->get(); // Corrected model name
        return response()->json($products);
    }


    public function search(Request $request){
        $query=$request->input("query");
        $products=scrapped_data::where('title', 'like', "%$query%")->get();
        return view('product',compact('products'));

    }
    
    public function searchSuggestion($term){
        $suggestions = scrapped_data::where('title', 'like', "%$term%")->take(3)->get(['title']);
        return response()->json($suggestions);
    }

    public function searchProduct($term)
    {
        $matchingData = scrapped_data::where('id', '=', $term)->first();
    
        return response()->json($matchingData);
    }
    
public function deleteProduct($term)
{
    try {
        scrapped_data::where('id', $term)->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    } catch (Exception $e) {
        // Log the error for debugging purposes
        // Log::error($e->getMessage());
        return response()->json(['error' => 'Error deleting product' + $e], 500);
    }
}

// public function updateProduct(Request $request, $productId)
//     {

//         $requestData = json_decode($request->getContent(), true);
//         $product = scrapped_data::where('id', '=', $productId)->first();
//         if (!$product) {
//             return response()->json(['error' => 'Product not found'], 404);
//         }
//         if ($request->input('id') != $productId) {
//             return response()->json(['error' => 'Product ID mismatch'], 422);
//         }
//         try{
//             $product->update($requestData->all());
//             return response()->json($product);
//         }catch(Exception $e){
//             return response()->json(['error' => 'Failed to update product: ' + $e], 500);
//         }
//     }



public function updateProducts(Request $request){
    $oldProd = scrapped_data::where('id', '=', $request->input('id'))->first();
    if($oldProd){
        if($request->isMethod('post')){
            $oldProd->title = $request->input('title');
            $oldProd->link = $request->input('link');
            $oldProd->price = $request->input('price');
            $oldProd->description = $request->input('description');
            $oldProd->company = $request->input('company');
            $oldProd->image_source = $request->input('image_source');
            $oldProd->save();
        
            return view('analyticsManage');
    }
    }
    else{
        return view('analyticsManage', alert("Error Updating Product!"));
    }
    
}  
    public function insertProducts(Request $request)
{
    // $data = json_decode($request->getContent(), true);
    // $data = new scrapped_data;
    if($request->isMethod('post')){
            $products = new scrapped_data();
            
            $products->title = $request->input('title');
            $products->link = $request->input('link');
            $products->price = $request->input('price');
            $products->description = $request->input('description');
            $products->company = $request->input('company');
            $products->image_source = $request->input('image_source');
            $products->save();
        
            return view('analyticsAdd');
    }
    
}


}
