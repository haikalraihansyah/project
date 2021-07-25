<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required',
           'jabatan' => 'required',
           'umur' => 'required|numeric',
           'alamat' => 'required'
        ]);

        return view('proses',['data' => $request]);
    }
}