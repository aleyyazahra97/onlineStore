<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class MyOrdersController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["title"] = "My Orders - Online Store";
        $viewData["subtitle"] = "My Orders";
        
        /** @var \App\Models\User $user */
        $user = Auth::user(); // Masukkan ke variabel ini terlebih dahulu

        // Sekarang $user->getId() tidak akan digarisbawahi merah lagi
        $viewData["orders"] = Order::with(['items.product'])
            ->where('user_id', $user->getId())
            ->get();
        
        return view('myaccount.orders')->with("viewData", $viewData);
    }
}