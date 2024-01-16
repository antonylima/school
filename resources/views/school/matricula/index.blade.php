@extends('layouts.app')
<?php
session_start();
?>
@section('title','MATRÍCULAS')

@section('content')
<div class="container pt-2">
<div class="container text-center">
  <a class="voltar" href="{{route('school-index')}}">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg></a>
  <a class="sair" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
    <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
    </svg></a></div>

<div class="container text-center"><a id="novo" class="btn btn-success mybtn" href="{{route('matriculas-create')}}">Nova matricula</a></div>
</div>
<div class="container pt-2">
<table class="table tabelas">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ALUNO</th>
      <th scope="col">CURSO</th>
      <th scope="col">STATUS</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@foreach($tabMatriculas as $matricula)
<tr>
      <th scope="row">{{$matricula->id}}</th>
      <td>{{$matricula->id_aluno}}</td>
      <td>{{$matricula->id_curso}}</td>
      @if($matricula->stts == 0)
      <td style="color:red">Inativo</td>
      @endif
      @if($matricula->stts == 1)
      <td style="color:green">Ativo</td>
      @endif
      <td><a href="{{route('matriculas-edit',['id'=>$matricula->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a></td>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection   