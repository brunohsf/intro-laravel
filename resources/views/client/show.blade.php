@extends('base')

@section('content')

<h2>Visualizando dados do Cliente</h2>

<p><strong>ID:</strong>{{ $client->id }}</p>

<p><strong>Name:</strong>{{ $client->name }}</p>

<p><strong>Cidade:</strong>{{ $client->city }}</p>

<p><strong>Email:</strong>{{ $client->email }}</p>

<a href="{{ route('client.index') }}">Voltar</a>
    
@endsection