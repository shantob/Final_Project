<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Notifications\NewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $product->comments()->create([
            'body' => $request->body,
            'commented_by' => Auth::id()
        ]);

        $user = User::where('email', 'testprojectems@gmail.com')->first();

        Notification::send($user, new NewNotification($product));
        return redirect()->back();
    }
}
