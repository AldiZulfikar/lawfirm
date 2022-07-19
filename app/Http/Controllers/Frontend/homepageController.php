<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita_desa;
use RealRashid\SweetAlert\Facades\Alert;

class homepageController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request,$next){
            if (session('success')) {
                Alert::success(session('success'));
            }

            if (session('error')) {
                Alert::error(session('error'));
            }

            return $next($request);
        });
    }
    public function index ()
    {
        $berita = berita_desa::paginate(3);
        return view("pages.homepage",[
            'berita' => $berita
        ]);
    }
}
