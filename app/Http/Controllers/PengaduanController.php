<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'title' => 'Pemas',
            'category' => Category::all(),
            'pengaduans' => Pengaduan::latest()->get(),
        ]);
    }

    public function create(Request $request) {
        if($request->isMethod('post')){
            $data = $request->all();
            $pegawai = new Pengaduan;
            $pegawai->judul = $data["judul"];
            $pegawai->category_id = $data["category"];
            $pegawai->user_id = 1;
            $pegawai->body = $data["body"];
            $pegawai->save();

            return redirect()->back()->with('tambahPengaduan', 'Pengaduan anda berhasil ditambahkan!');
        }
    }
}
