<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vignette;

class SiteController extends Controller
{
    public function index() {
        $vignettes = Vignette::all();
        return view('vignette', ['vignettes' => $vignettes]);
    }

    public function show($id) {
        $vignette = Vignette::find($id);
        return view('show', ['vignette' => $vignette]);
    }
}
