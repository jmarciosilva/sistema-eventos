@extends('layouts.main')

@section('title', 'Sistema de Eventos - JMarcio')

@section('content')
        <h1>Seja Bem Vindo ao Laravel</h1>
        <img src="img/banner.jpg" alt="Banner">
        @if(10 > 5)
            <p>A condição é verdadeiro</p>
        @else
            <p>A condição é falsa</p>
        @endif

        <p>O Nome Recuperado pela Rota: <strong> {{$nome}}</strong></p>

@endsection