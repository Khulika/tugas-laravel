<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('search')){
            $data = Kelas::where('kelas','LIKE','%'. $request -> search.'%')->paginate(5);
        }else{
            $data = Kelas::paginate(5);
        }

        return view('layouts.backend-dashboard.kelas.index', compact('data'));
    }

    public function Createkelas(Request $request)
    {
        return view('layouts.backend-dashboard.kelas.create');
    }

    public function insertkelas(Request $request)
    {
        kelas::create($request->all());

        return redirect()->route('kelas')->with('success', 'Data kelas berhasil ditambahkan');
    }

    public function editkelas($id)
    {
        $data = kelas::find($id);

        return view('layouts.backend-dashboard.kelas.edit', compact('data'));

    }

    public function Updatekelas(Request $request, $id)
    {
        $data = kelas::find($id);
        $data -> update($request->all());

        return redirect()->route('kelas')->with('success', 'Data kelas berhasil di Update');
    }

    public function deleteKelas($id)
    {
        $data = kelas::find($id);
        $data -> delete();

        return redirect()->route('kelas')->with('success', 'Data kelas berhasil di Delete');

    }
}
