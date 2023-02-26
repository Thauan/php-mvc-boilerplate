@extends('layouts.index')

@section('title', 'Page Title - Home')

@section('content')
<h1>Hello word essa pagina funcionou!</h1>

<p>Aqui abaixo um foreach:</p>
@if(count($users))
<ul>
    @foreach ($users as $user)
    <li>{{ $user }}</li>
    @endforeach
</ul>
@endif

<p>Aqui abaixo uma interpolação:</p>
<h2>{{ $nome }}</h2>

<h1>teste</h1>
@endsection