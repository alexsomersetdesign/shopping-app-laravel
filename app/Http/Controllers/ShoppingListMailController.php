<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ShoppingListMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller as BaseController;


class ShoppingListMailController extends BaseController
{
    
	public function sendShoppingListEmail(Request $request) {

		$body = $request->body;
		$email_address = $request->email_address;

		$request->validate([
            'email_address' => 'required|email',
        ]);

		Mail::to('testreceiver@gmail.com')->send(new ShoppingListMail($body));

		return redirect('/shopping-list')->with('message', 'Email Sent Sucessfully');


	}
    
}