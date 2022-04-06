@extends('base')

@section('content')

<h2>Produtos Cadastrados</h2>
<hr>

@if (count($products)) 

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->value }}</td>
            </tr>
        @endforeach

    </table>
    @else       
        <h3>Não há produtos cadastrados!</h3>

@endif
    
@endsection