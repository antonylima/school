<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index(){
        $matriculas = Matricula::all();
        return view('school.matricula.index',['tabMatriculas'=>$matriculas]);
    }


    public function create(){
        return view('school.matricula.create');
    }

    public function store(Request $req){
        
        try{
            Matricula::create($req->all());
            return redirect()->route('matriculas-index');
        }catch (error $e){
            echo "Usuário sem privilégios para enviar formulário";
        }   
    }
    public function edit($id){
        $matricula = Matricula::where('id',$id)->first();
        if(!empty($matricula)){
            return view('school.matricula.edit',['tabMatriculas'=>$matricula]);
        }
        else{
            return redirect()->route('matriculas-index');
        }

            }
            
    public function update(Request $req, $id){
      
        $dados = [
        'id_aluno'=>$req->id_aluno,
        'id_curso'=>$req->id_curso,
        'stts'=>$req->stts
      ];
      Matricula::where('id',$id)->update($dados);
      return redirect()->route('matriculas-index');  

    }

    public function destroy($id){
        Matricula::where('id',$id)->delete();

        return redirect()->route('matriculas-index');
    }
}
