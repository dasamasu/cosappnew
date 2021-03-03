<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class ComprasController extends Controller
{
    public function index(){

        return view('compras.index');

    }

    public function edit(Compra $compra){
        return view('compras.edit', compact('compra'));
    }
}
