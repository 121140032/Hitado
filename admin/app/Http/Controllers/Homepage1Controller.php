<?php

namespace App\Http\Controllers;
use App\Models\Homepage1;

use Illuminate\Http\Request;

class Homepage1Controller extends Controller
{
    public function index()
    {
        return view ('Pelanggan.view.detail');
    }
}
