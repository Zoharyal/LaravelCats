<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Vignette;
use Validator;


class AdminController extends Controller
{

    public function home() {
        $user = Auth::user();
        return view('admin', ['user' => $user]);
    }
    public function index() {
        $vignettes = Vignette::all();
        return view('index', ['vignettes' => $vignettes]);
    }

    public function create() {
        return view('create');
    }

    public function save(Request $request) {
        $validator = Validator::make($request->all(), [
            'legende' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $vignette = new Vignette;
        $vignette->url = $request->input('url');
        $vignette->legende = $request->input('legende');
        $vignette->description = $request->input('description');
        $vignette->save();
        $vignettes = Vignette::all();
        return back()->with('message', 'Vignette crée');
    }
    
    public function delete($id) {
        $vignette = Vignette::find($id);
        $vignette->delete();
        return back()->with('message', 'Vignette supprimée');
    }

    public function show($id) {
        $vignette = Vignette::find($id);
        return view('edit', ['vignette' => $vignette]);
    }

    public function edit(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'legende' => 'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $vignette = Vignette::find($id);
        $vignettes = Vignette::all();
        $vignette->legende = $request->input('legende');
        $vignette->description = $request->input('description');
        $vignette->save();
        // return view('index', ['vignettes' => $vignettes])->with('message', 'Modification effectuée');
        return back()->with('message', 'Modification effectuée');
    }

}
