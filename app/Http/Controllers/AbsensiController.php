<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absensi;
use App\Models\karyawan;

class AbsensiController extends Controller
{
    public function index()
    {
        // $absensi = absensi::with('karyawan')->get();
        // return view('absensi.index', compact('absensi'));
        return view('sidebar.absensi.index');

    }

    public function create()
    {
        $karyawan = karyawan::all();
        return view('absensi.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'check_in' => 'required|date',
        ]);

        absensi::create($request->all());

        return redirect()->route('absensi.index');
    }

    public function checkOut(Request $request, $id)
    {
        $absensi = absensi::findOrFail($id);
        $absensi->check_out = now();
        $absensi->save();

        return redirect()->route('absensi.index');
    }
}
