<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index(){
        $items = Item::where('user_id', Auth::user()->id)->get();
        foreach($items as $item){
            $item->price = "Rp " . number_format($item->price, 0, ',', '.');
        }
        return view('barang.index', ['items' => $items]);
    }

    public function create(){
        return view('barang.create');
    }

    public function store(Request $req){
        $credentials = $req->validate([
            'name' => 'required|string|max:30',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0'
        ]);
        $credentials['user_id'] = Auth::user()->id;
        Item::create($credentials);
        return redirect()->route('data-barang.index')->with('success', 'Item added successfully! Your inventory just got bigger and better.');
    }

    public function edit($id){
        $item = Item::find($id);
        if($item->user_id != Auth::user()->id){
            return redirect()->route('data-barang.index')->withErrors(['error' => "Sorry! You can't modify item data that doesn't belong to you!"]);
        }
        return view('barang.edit', ['item' => $item]);
    }

    public function update(Request $req, $id){
        $credentials = $req->validate([
            'name' => 'required|string|max:30',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0'
        ]);
        $item = Item::find($id);
        if($item->user_id != Auth::user()->id){
            return redirect()->route('data-barang.index')->withErrors(['error' => "Sorry! You can't modify item data that doesn't belong to you!"]);
        }
        $item->name = $req->name;
        $item->description = $req->description;
        $item->price = $req->price;
        $item->save();
        return redirect()->route('data-barang.index')->with('success', 'Item successfully modified! Everything is now up to date.');
    }

    public function delete($id){
        $item = Item::find($id);
        if($item->user_id != Auth::user()->id){
            return redirect()->route('data-barang.index')->withErrors(['error' => "Sorry! You can't modify item data that doesn't belong to you!"]);
        }
        $item->delete();
        return redirect()->route('data-barang.index')->with('success', 'The item has been removed successfully. No traces left!');
    }
}
