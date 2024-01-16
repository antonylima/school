<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();
    
        return view('school.curso.index',['tabCursos'=>$cursos]);        
    }

    public function create(){
        return view('school.curso.create');
    }

    public function store(Request $req){
        
        try{
            Curso::create($req->all());
            return redirect()->route('cursos-index');
        }catch (error $e){
            echo "Usuário sem privilégios para enviar formulário";
        }   
    }
    public function edit($id){
        $cursos = Curso::where('id',$id)->first();
        if(!empty($cursos)){
            return view('school.curso.edit',['tabCursos'=>$cursos]);
        }
        else{
            return redirect()->route('cursos-index');
        }

            }
            
    public function update(Request $req, $id){
      
        $dados = [
        'nome'=>$req->nome,
        'valor'=>$req->valor,
        'stts'=>$req->stts
      ];
      Curso::where('id',$id)->update($dados);
      return redirect()->route('cursos-index');  

    }

    public function destroy($id){
        Curso::where('id',$id)->delete();


        return redirect()->route('cursos-index');
    }
}

