<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller as BaseController;


class ProductController extends BaseController
{
    public function addProductToList(Request $request){

    	$user_id = $request->user_id;
    	$product_id = $request->product_id;

    	
    	$user = User::where('id', $user_id)->first();


    	$user->products()->attach($request->product_id);


        return redirect('/shopping-list')->with('message', 'Product Added to List');
    }

    
}