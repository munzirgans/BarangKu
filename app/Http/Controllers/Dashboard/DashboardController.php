<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $total_item = Item::where('user_id', Auth::user()->id)->count();
        $total_price = Item::where('user_id', Auth::user()->id)->sum('price');
        $total_price = "Rp " . number_format($total_price, 0, ',', '.');
        $total_item_this_week = Item::where('user_id', Auth::user()->id)->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
        $expensive_item_price = Item::where('user_id', Auth::user()->id)->max('price');
        $expensive_item_price = $expensive_item_price !== null ? "Rp " . number_format($expensive_item_price, 0, ',', '.') : 0;
        return view('dashboard.index', [
            'total_item' => $total_item, 
            'total_price' => $total_price, 
            'total_item_this_week' => $total_item_this_week,
            'expensive_item_price' => $expensive_item_price
        ]);
    }
}
