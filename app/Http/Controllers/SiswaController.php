<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Excelsiswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Siswa::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Siswa::paginate(5);
        }

        return view('layouts.backend-dashboard.siswa.index', compact('data'));
    }

    public function createSiswa(Request $request)
    {
        return view('layouts.backend-dashboard.siswa.create');
    }

    public function insertsiswa(Request $request)
    {

        Siswa::create($request->all());

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function editsiswa($id)
    {
        $data = Siswa::find($id);

        return view('layouts.backend-dashboard.siswa.edit', compact('data'));
    }

    public function updateSiswa(Request $request, $id)
    {

        $data = Siswa::find($id);
        $data->update($request->all());

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil di Update');
    }

    public function deleteSiswa($id)
    {
        $data = Siswa::find($id);

        if ($data) {
            $data->delete();
            return redirect()->route('siswa')->with('success', 'Data siswa berhasil di Delete');
        } else {
            return redirect()->route('siswa')->with('error', 'Data siswa tidak ditemukan');
        }
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('DataSiswa', $namafile);

        Excel::import(new Excelsiswa, public_path('/DataSiswa/' . $namafile));

        return redirect()->back();
    }
}
