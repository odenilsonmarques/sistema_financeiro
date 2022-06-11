<?php

namespace App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Release;


class ReleasesController extends Controller
{
    public function registerRelease(){
        return view('AdminViews.registerRelease');
    }
    //method for register the releases
    public function registerReleaseAction(Request $request){
        //debugando os valores recebidos
        // dd($request->all());

        //debugando valores especificos
        // dd($request->only(['release_type','person']));

        //dessa forma informo os campoa serem  peristidos
        $data = $request->only('release_type','person','description','amount','due_date');
        //usando o metodo create do Request para criar o objeto
        Release::create($data);
    }

    public function listRelease() {
        $releases = Release::all();
        return view('AdminViews.listRelease',['releases' => $releases]);

    }
}
