@extends('layouts.app')
<?php
?>
@section('title','LOGIN')

@section('content')
    <style>
    </style>

    <div id="lg" class="container nav text-center justify-content-center p-3" >
        <form class="form-control nav-item bg-dark" action="{{route('validation')}}">    
        @csrf
        <div class="m-2 login">
            <input type="text" id="user" name="user" placeholder="user" value="">
            </div>
            <div class="login m-2">
            <input type="text" id="pass" name="pass" placeholder="password" value="">
            </div>
            <input class="m-2 btn btn-success" type="submit" name="submit" value="Login">
        </form>
        <p id="dica">User/Password: admin</p>
    </div>
    <script>

    </script>
@endsection  