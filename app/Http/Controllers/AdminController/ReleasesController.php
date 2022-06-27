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

    public function list() 
    {
        $releases = Release::all();
        return view('release.list',['releases' => $releases]);
    }

    public function deleteAction($id)
    {
        try{
            Release::find($id)->delete();
            return redirect()->route('lancamentos.list')
            ->with('messageRegister', 'Exclusão realizada com sucesso !');
        }catch(\Exception $e){
            return redirect()->route('lancamentos.list')
            ->with('messageError', 'Ops! a ação não pode ser realizada');
        }
    }

    public function edit($id)
    {
        // chamo esse array para capturar o campo escolhido através da logica implementada no form de edição. Poderia ser apenas uma select com options declarados no form de edicão, mas esse recurso me permite capturar o campo option selecionado optei por usa-lo, porem deve ter outras formas, essa forma serve para formularios de cadastros... 
        $typeReleases = ['DESPESA', 'RECEITA'];
        $data = Release::find($id);
        if($data)
        {
            return view('release.edit',['data'=>$data,'typeReleases'=>$typeReleases]);
        }else{
            return redirect()->route('lancamentos.list');
        }
    }
}
