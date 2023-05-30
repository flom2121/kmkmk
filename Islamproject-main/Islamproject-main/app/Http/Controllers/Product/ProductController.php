<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\ProductReviewModel;
use App\Models\User as UserModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct(Request $request){
        $users= UserModel::rightJoin('product_reviews', 'product_reviews.user_id' , '=' , 'users.id')->where('product_reviews.product_id',$request->id)->get(); 
        $product = ProductModel::where('id', $request->id)->first(); 
        return view('product.view' , ['product'=>$product,'users'=>$users]) ;
    }
    public function storeUserReview(Request $request){
        $productReview = ProductReviewModel::where('user_id', auth()->user()->id)->where('product_id', $request->id);
        if($productReview->first()){
            $productReview->update([
                'review'=>$request->review_text,
                'review_rate'=>$request->rate,
                'user_id'=>auth()->user()->id,
                'product_id'=>$request->id
            ]); 

        }else{
            ProductReviewModel::create([
                'review'=>$request->review_text,
                'review_rate'=>$request->rate,
                'user_id'=>auth()->user()->id,
                'product_id'=>$request->id
            ]); 
        }
        return back(); 
    }
}
