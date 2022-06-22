<?php

namespace App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Release;


class ReleasesController extends Controller
{
    public function add()
    {
        return view('release.add');
    }
    //method for register the releases
    public function addAction(Request $request)
    {
        //debugando os valores recebidos
        // dd($request->all());
        //debugando valores especificos
        // dd($request->only(['release_type','person']));
        //dessa forma informo os campoa serem  peristidos
        $data = $request->only('release_type','person','description','amount','due_date');
        //usando o metodo create do Request para criar o objeto
        Release::create($data);

        return redirect()->route('lancamentos.list')
        //a msg abaixo só será exibida se o processo de cadastro acontecer. Esta mensagem é conhecida como (flash mensage). Está será exibida na pagina que lista os dados do pet, sendo acessada através da funcao session
        ->with('messageRegister', 'Lançamento cadastrado com sucesso !');
    }

    public function listAction() 
    {
        $releases = Release::all();
        return view('release.list',['releases' => $releases]);
    }

    public function delete($id)
    {
        try{
            Release::find($id)->delete();
            return redirect()->route('lancamentos.list')
            ->with('messageRegister', 'Exclusão realizada com sucesso !');
        }catch(\Exception $e){
            return redirect()->route('lancamentos.list')
            ->with('messageError', 'OPS! A AÇÃO NÃO PODE SER CONCLUÍDA!');
        }
    }

    public  function edit($id)
    {
        
    }
}
