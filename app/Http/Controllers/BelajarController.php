<?php

namespace App\Http\Controllers;
use App\Models\belajar;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {

        return view('belajar.belajar');
    }
}
