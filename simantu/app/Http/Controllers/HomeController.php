<?php

namespace App\Http\Controllers;
use App\Models\Tugas;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $tugas = Tugas::orderBy('waktu_tenggat', 'asc')->get();
    return view('pages.tugas.index', ['tugas' => $tugas]);
    }
}
