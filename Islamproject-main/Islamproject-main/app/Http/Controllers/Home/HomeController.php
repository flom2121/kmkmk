<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\User as UserModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = ProductModel::get(); 
        $users=UserModel::whereNotNull('review_rate')->select('first_name' , 'last_name' , 'review_rate' , 'review')->orderBy('review_rate','desc')->get(); 
        return view('home.index', [
            'products'=>$products,
            'users'=>$users
        ]); 
    }
    public function storeUserReview(Request $request){
        UserModel::find(auth()->user()->id)->update([
            'review_rate'=>$request->rate, 
            'review'=>$request->review_text
        ]); 
        return redirect(route('home')); 
    }
}
