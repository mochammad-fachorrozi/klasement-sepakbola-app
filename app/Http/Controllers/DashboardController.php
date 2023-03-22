<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use App\Models\Hasil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $klubs = Klub::all();

        // dd($klubs);
        return view('index', [
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

        return redirect('/')->with('success', 'Berhasil manambah data!');
    }

    public function addGoal()
    {
        $klubs = Klub::all();

        // dd($klubs);
        return view('add-goal', [
            'klubs' => $klubs,
        ]);
    }

    public function storeGoal(Request $request)
    {
        // dd($klubs[0]['nama_klub']);

        $request->validate([
            'inputs.*.klub1' => 'required',
            'inputs.*.klub2' => 'required',
            'inputs.*.gol1' => 'required',
            'inputs.*.gol2' => 'required',
        ]);
        // return count($request->inputs);
        // for ($i = 0; $i <= count($request->inputs); $i++) {

        // klub 1
        // foreach ($request->inputs as $key => $value) {
        //     $klub1 = $request->inputs[$key]['klub1'];
        //     $klub2 = $request->inputs[$key]['klub2'];
        //     $idKlub1 = Klub::all()
        //         ->where('id', $klub1);

        //     $gol1 = $request->inputs[$key]['gol1'];
        //     $gol2 = $request->inputs[$key]['gol2'];
        //     if ($gol1 > $gol2) {
        //         $queryKlub1 = Klub::findOrFail($idKlub1[$key]->id)->update([
        //             'main' => $idKlub1[$key]->main + 1,
        //             'menang' => $idKlub1[$key]->menang + 1,
        //             'gm' => $idKlub1[$key]->gm + $gol1,
        //             'gk' => $idKlub1[$key]->gk + $gol2,
        //             'poin' => $idKlub1[$key]->poin + 3,
        //         ]);
        //     } elseif ($gol1 < $gol2) {
        //         $queryKlub1 = Klub::findOrFail($idKlub1[$key]->id)->update([
        //             'main' => $idKlub1[$key]->main + 1,
        //             'kalah' => $idKlub1[$key]->kalah + 1,
        //             'gm' => $idKlub1[$key]->gm + $gol2,
        //             'gk' => $idKlub1[$key]->gk + $gol1,
        //             'poin' => $idKlub1[$key]->poin + 0,
        //         ]);
        //     } else {
        //         $queryKlub1 = Klub::findOrFail($idKlub1[$key]->id)->update([
        //             'main' => $idKlub1[$key]->main + 1,
        //             'seri' => $idKlub1[$key]->seri + 1,
        //             'gm' => $idKlub1[$key]->gm + $gol1,
        //             'gk' => $idKlub1[$key]->gk + $gol2,
        //             'poin' => $idKlub1[$key]->poin + 1,
        //         ]);
        //     }
        // }

        // klub 2
        // foreach ($request->inputs as $key => $value) {
        //     $klub2 = $request->inputs[$key]['klub2'];
        //     $idKlub2 = Klub::all()
        //         ->where('id', $klub2);

        //     $gol1 = $request->inputs[$key]['gol1'];
        //     $gol2 = $request->inputs[$key]['gol2'];
        //     if ($gol1 > $gol2) {

        //         $queryKlub2 = Klub::findOrFail($idKlub2[$key]->id)->update([
        //             'main' => $idKlub2[$key]->main + 1,
        //             'kalah' => $idKlub2[$key]->kalah + 1,
        //             'gm' => $idKlub2[$key]->gm + $gol1,
        //             'gk' => $idKlub2[$key]->gk + $gol2,
        //             'poin' => $idKlub2[$key]->poin + 0,
        //         ]);
        //     } elseif ($gol1 < $gol2) {

        //         $queryKlub2 = Klub::findOrFail($idKlub2[$key]->id)->update([
        //             'main' => $idKlub2[$key]->main + 1,
        //             'menang' => $idKlub2[$key]->menang + 1,
        //             'gm' => $idKlub2[$key]->gm + $gol2,
        //             'gk' => $idKlub2[$key]->gk + $gol1,
        //             'poin' => $idKlub2[$key]->poin + 3,
        //         ]);
        //     } else {

        //         $queryKlub2 = Klub::findOrFail($idKlub2[$key]->id)->update([
        //             'main' => $idKlub2[$key]->main + 1,
        //             'seri' => $idKlub2[$key]->seri + 1,
        //             'gm' => $idKlub2[$key]->gm + $gol2,
        //             'gk' => $idKlub2[$key]->gk + $gol1,
        //             'poin' => $idKlub2[$key]->poin + 1,
        //         ]);
        //     }
        // }


        foreach ($request->inputs as $key => $value) {
            Hasil::create($value);
        }

        return redirect('/')->with('success', 'Hasil pertandingan berhasil ditambahkan!');
    }
}
