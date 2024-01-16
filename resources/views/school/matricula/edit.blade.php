@extends('layouts.app')
<?php
session_start();
?>
@section('title','EDITAR MATRÍCULA')

@section('content')
<div class="container pt-2">
<div class="container text-center">
  <a class="voltar" href="{{route('matriculas-index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
  </svg></a>
  <form action="{{route('matriculas-destroy',[$tabMatriculas->id])}}" method="post">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger mybtn" type="submit">Excluir Registro</button>
  </form>
  
  <a class="sair" href="#">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
  </svg></a></div>

<div class ="container text-center">
  <div class="form-group">
    <form action="{{route('matriculas-update',['id'=>$tabMatriculas->id])}}" method="POST">
      @csrf
      @method('PUT')
      <div>
      <label class="lb m-1" for="id_alun">Nome:<input name="id_aluno" class="form-control" id="id_aluno" type="number" value="{{$tabMatriculas->id_aluno}}"></label>
      </div>
      <div>
      <label class="lb m-1" for="id_curso">Valor: <input name="id_curso" class="form-control" id="id_curso" type="number" value="{{$tabMatriculas->id_curso}}"></label>
      </div>
      <div>
      <label class="lb m-1" for="stts">Status: <input name="stts" class="form-control" id="stts" type="number" value="{{$tabMatriculas->stts}}"></label>
      </div>
      <div class="p-2"><button type="submit" id="cadastrar" class="btn btn-success mybtn">ATUALIZAR</button></div>
    </form>
  </div>

  
</div>
@endsection   