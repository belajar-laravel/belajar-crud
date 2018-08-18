<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Pegawai;
use Input;
use Session;
use Redirect;

class AppController extends Controller {

    public function index() {
        $pegawai = Pegawai::all();

        return View::make('pegawai.index')->with('pegawai', $pegawai);
    }

    public function create() {
        return View::make('pegawai.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama' => 'required'
        ]);

        $pegawai = new Pegawai;
        
        $pegawai->nip = $request->input('nip'); // Input::get('nim');
        $pegawai->nama = $request->input('nama'); // Input::get('nama');
        $pegawai->tempat_lahir = $request->input('tempat_lahir'); // Input::get('tempat_lahir');

        $pegawai->save();

        // redirect
        Session::flash('message', 'Data telah tersimpan');
        return Redirect::to('app');        
    }

    public function show($id) {
        $pegawai = Pegawai::find($id);
        return View::make('pegawai.show')->with('pegawai', $pegawai);
    }

    public function edit($id) {
        $pegawai = Pegawai::find($id);
        return View::make('pegawai.edit')->with('pegawai', $pegawai);
    }

    public function update($id) {
        $pegawai = Pegawai::find($id);
        $pegawai->nip = Input::get('nip');
        $pegawai->nama = Input::get('nama');
        $pegawai->tempat_lahir = Input::get('tempat_lahir');
        $pegawai->save();

        Session::flash('message', 'Data telah tersimpan');
        return Redirect::to('app');
    }

    public function destroy($id) {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        Session::flash('message', 'Data telah terhapus');
        return Redirect::to('app');
    }
    
}
