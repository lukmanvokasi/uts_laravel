<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembelian;
use App\Barang;

class UserBarangController extends Controller
{

    public function index()
    {
        $barang = Barang::paginate(3);
        return view('userbarang.index', compact("barang"));
    }

    public function create($id)
    {
        $data = Barang::find($id);
        return view('userbarang.create', compact("data"));
    }

    public function order(Request $request)
    {
        Pembelian::create([
            'id_barang' => $request->id_barang,
            'banyak' => $request->banyak,
            
            ]);
        return redirect()->route("userbarang.index");
    }

    public function show($id)
    {
        $data = Barang::find($id);
        return view("userbarang.show", compact("data"));
    }

    
}
