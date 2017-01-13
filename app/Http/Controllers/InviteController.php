<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invite;
use Mail;
use App\Mail\InviteAccountant;

class InviteController extends Controller
{
    public function send(Request $request) {
    	// return $request;
    	$invite = Invite::create($request->all());
    	$email = $request->email;
        $invite->save();
        Mail::to($email)->send(new InviteAccountant);
        return back();
    }

}
