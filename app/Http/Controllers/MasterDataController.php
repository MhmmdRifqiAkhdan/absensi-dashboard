<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function index()
    {
        return view('sidebar.masterdata.index');
    }

    public function create()
    {
        return view('sidebar.masterdata.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data
    }

    public function edit($id)
    {
        // Logika untuk mengambil data berdasarkan $id
        return view('sidebar.masterdata.edit');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data
    }
}





