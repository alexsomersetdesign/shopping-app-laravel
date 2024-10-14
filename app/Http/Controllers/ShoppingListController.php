<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class ShoppingListController extends BaseController
{
    public function showShoppingList(Request $request){

    	//Get the user
    	$user = $request->user();

    	//Get all products
    	$allProducts = Product::get();




        return view('/shopping-list', compact('allProducts', 'user'));
    }

    
}