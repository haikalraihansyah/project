<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	$nama = "Diki Alfarabi Hadi";

    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web","ngoding"];

    	return view('biodata',['nama' => $nama , 'matematika' => $pelajaran]);
    }
}