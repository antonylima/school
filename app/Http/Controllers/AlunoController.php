<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::all(); 
        return view('school.aluno.index',['tabAlunos'=>$alunos]);
    }
    
    public function create(){
        return view('school.aluno.create');
    }

    public function store(Request $req){
        
        try{
            Aluno::create($req->all());
            return redirect()->route('alunos-index');
        }catch (error $e){
            echo "Usuário sem privilégios para enviar formulário";
        }   
    }
    public function edit($id){
        $alunos = Aluno::where('id',$id)->first();
        if(!empty($alunos)){
            return view('school.aluno.edit',['tabAlunos'=>$alunos]);
        }
        else{
            return redirect()->route('alunos-index');
        }

            }
            
    public function update(Request $req, $id){
      
        $dados = [
        'nome'=>$req->nome,
        'rg'=>$req->rg,
        'cidade'=>$req->cidade,
        'curso'=>$req->curso,
        'stts'=>$req->stts
      ];
      Aluno::where('id',$id)->update($dados);
      return redirect()->route('alunos-index');  

    }

    public function destroy($id){
        Aluno::where('id',$id)->delete();

        return redirect()->route('alunos-index');
    }





}

