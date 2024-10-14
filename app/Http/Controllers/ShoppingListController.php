<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class ShoppingListController extends BaseController
{
    public function showShoppingList(Request $request){

    	$user = $request->user();

        return view('/shopping-list');
    }

    
}