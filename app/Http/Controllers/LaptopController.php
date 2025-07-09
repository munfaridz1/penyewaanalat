<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LaptopController extends Controller
{
    
    public function list(): View
    {
        $data = Laptop::all();
        return view('laptop.list', ['data' => $data]);
    }

    public function list_Kategori($id): View
    {
        $data = Laptop::where('id_kategori', $id)->get();
        $dataKategori = Kategori::find($id);
        return view('laptop.kategori', ['data' => $data, 'kategori' => $dataKategori]);
    }

    public function detail($id)
{
    $data = laptop::find($id);

    if (!$data) {
        abort(404);
    }

    return view('laptop.detail', ['data' => $data]);
}
}
