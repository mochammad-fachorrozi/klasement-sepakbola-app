<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $klubs = Klub::all();

        // dd($klubs);
        return view('index',[
            'klubs' => $klubs,
        ]);
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'inputs.*.nama_klub' => 'required',
            'inputs.*.kota_klub' => 'required',
        ]);

        foreach ($request->inputs as $key => $value) {
            Klub::create($value);
        }
        
        // return redirect()->back()->with('success', 'Berhasil manambah data!');
        return redirect('/')->with('success', 'Berhasil manambah data!');
    }
}
