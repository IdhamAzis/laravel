<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        Message::create([
            'message' => $request->message
        ]);
        
        return redirect('/profile');
    }
}
