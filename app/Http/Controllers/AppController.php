<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Validator;
use App\Pegawai;

class AppController extends Controller {

    public function index() {
        $pegawai = Pegawai::all();

        return View::make('pegawai.index')->with('pegawai', $pegawai);
    }

    public function create() {
        return View::make('pegawai.create');
    }

    public function store() {
        $rules = array(
            'nim' => 'required', 
            'nama' => 'required',
            'tempat_lahir' => 'optional'
        );
        $validator = Validator::make(Input::all(), $rules);

        if($validator->failes()) {
            return Redirect::to('pegawai/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $pegawai = new Pegawai;
            $pegawai->nim = Input::get('nim');
            $pegawai->nama = Input::get('nama');
            $pegawai->tempat_lahir = Input::get('tempat_lahir');
            $pegawai->save();

            // redirect
            Session::flash('message', 'Data telah tersimpan');
            return Redirect::to('pegawai');
        }
    }

    public function show($id) {}

    public function edit($id) {}

    public function update($id) {}

    public function delete($id) {}
    
}
