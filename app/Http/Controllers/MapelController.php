<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('search')){
            $data = Mapel::where('nama_mapel','LIKE','%'. $request -> search.'%')->paginate(5);
        }else{
            $data = Mapel::paginate(5);
        }

        return view('layouts.backend-dashboard.mapel.index', compact('data'));
    }

    public function Createmapel(Request $request)
    {
        return view('layouts.backend-dashboard.mapel.create');
    }

    public function insertmapel(Request $request)
    {
        Mapel::create($request->all());

        return redirect()->route('mapel')->with('success', 'Data Mapel berhasil ditambahkan');
    }

    public function editmapel($id)
    {
        $data = Mapel::find($id);

        return view('layouts.backend-dashboard.mapel.edit', compact('data'));

    }

    public function Updatemapel(Request $request, $id)
    {
        $data = Mapel::find($id);
        $data -> update($request->all());

        return redirect()->route('mapel')->with('success', 'Data Mapel berhasil di Update');
    }

    public function deleteMapel($id)
    {
        $data = Mapel::find($id);
        $data -> delete();

        return redirect()->route('mapel')->with('success', 'Data Mapel berhasil di Delete');

    }
    
}

