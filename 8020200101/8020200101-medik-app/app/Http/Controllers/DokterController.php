<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return 'Halo, Saya berada di halaman dokter index';
    }
    public function create()
    {
        return 'Halo, Saya dokter di fungsi create';
    }
    public function edit()
    {
        return 'Halo, saya berada dihalaman edit dengan nilai 1';
    }
    public function show()
    {
        return 'Halo, saya berada dihalaman show dengan nilai 2';
    }
}
