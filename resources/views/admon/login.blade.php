@extends('layouts.master2')
@section('title', $title)
@section('titulo')
    <h1>{{$title}}</h1>
@stop
@section('titulo.side', $title)

@section('main')
    <form action="{{action('PruebaController@validarLogin')}}" method="post" >
        {{csrf_field()}}
        <label for ="user">Usuario</label>
        <input type="text" name="user">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <label for="key">Key</label>
        <input type="text" name="key">
        <br>
        <input type="submit" value="submit">
    </form>




@stop

@section('name', 'Jesús Alejandro Torres Ramírez 5E')
