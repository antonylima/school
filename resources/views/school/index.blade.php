@extends('layouts.app')
<?php
session_start();
?>
@section('title','HOME')

@section('content')

    <div class="container text-center p-0">
        <div class="row row-cols-3 p-3">
        <div id="cur" class="col card pb-2 pt-2 bg-dark"><a class="btn btn-primary" href="{{route('cursos-index')}}">CURSOS</a></div>
        <div id="mat" class="col card pb-2 pt-2 bg-dark"><a class="btn btn-primary" href="{{route('matriculas-index')}}">MATRÍCULA</a></div>
        <div id="alu" class="col card pb-2 pt-2 bg-dark"><a class="btn btn-primary" href="{{route('alunos-index')}}">ALUNOS</a></div>
        </div>   
    </div>

<style>
    /*body{
    background-color: cadetblue;
    /*background-image: url('../img/school2.jpg');*/
*/
#divlog{
    width: 70%;
    margin-top: 100px;
}
</style>
@endsection   