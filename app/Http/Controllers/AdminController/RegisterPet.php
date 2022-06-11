<?php

namespace App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pet;

class RegisterPet extends Controller
{
    //metodo para adicionar um usuario
    public function add(Request $request){
        $name = $request->input('name');

        $pet = new Pet();
        $pet->name = $name;
        $pet->save();

    }
}
