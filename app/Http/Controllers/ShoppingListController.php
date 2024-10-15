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

        //Ensure user is set, if not return to login, error may occur if session expires
        if($user) {

        	//Get user products
        	$userProducts = $user->products()->get();

            //Get shopping list total price
            $list_total_price = $userProducts->sum('price');

            //Get user spending limit
            if($list_total_price >= $user->spending_limit) {
                $display_message = true;
            } else {
                $display_message = false;
            }
            return view('/shopping-list', compact('allProducts', 'user', 'userProducts', 'list_total_price', 'display_message'));
        } else {
            return redirect('/login')->with('message', 'Please Login to use App');
        }
    }

    public function setSpendingLimit(Request $request) {

    	//Get the user 
    	$user = $request->user();

    	$user->spending_limit = $request->spending_limit;

    	$user->save();

    	return redirect('/shopping-list')->with('message', 'Spending Limit Updated');
    }

    
}