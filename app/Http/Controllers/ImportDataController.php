<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportDataController extends Controller
{
    public function index()
    {
        return view('sidebar.importdata.index');
    }
}
