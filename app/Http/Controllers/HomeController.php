<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try {
            return view('pages.home');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
