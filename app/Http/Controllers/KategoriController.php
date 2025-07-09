<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View; 

class KategoriController extends Controller
{
    public function list(): View 
    { 
        $data = Kategori::all(); 
        return view('kategori.list', [ 'data' => $data ]); 
    } 
}
