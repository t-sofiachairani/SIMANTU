<?php

namespace App\Http\Controllers;
use App\Models\Tugas;
use App\Models\User;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index(){
        $tugas = Tugas::orderBy('waktu_tenggat', 'asc')->get();
    return view('pages.tugas.index', ['tugas' => $tugas]);
    }

    public function create() {
        return view('pages.tugas.create', [
            'tugas' => Tugas::all()
        ]);
    }

    public function store(Request $request) {
        $data = $request->all();
        $tugas = Tugas::create($data);
        return redirect()->route('tugas.index');
    }

    public function edit($Id) {
        return view('pages.tugas.edit', [
            'tugas' => Tugas::find($Id)
        ]);
    }

    public function update(Request $request, $Id) {
        $data = $request->all();
        $tugas = Tugas::find($Id)->update($data);
        return redirect()->route('tugas.index');
    }

    public function destroy(string $Id) {
        Tugas::find($Id)->delete();
        return redirect()->route('tugas.index');
    }
}
