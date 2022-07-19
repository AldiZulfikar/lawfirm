<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_desa;

class beritaController extends Controller
{
    public function detail($slug)
    {
        $berita = berita_desa::where('slug', $slug)->first();

        return view("pages.detail-berita", [
            'berita' => $berita
        ]);
    }
}
