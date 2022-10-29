<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index (Request $req){
        echo 'Token Salah Tidak Bisa Login';
    }
    function create (Request $req){
        return view  ('createMahasiswa');
    }
}
