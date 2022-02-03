@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartaMagics as $cartaMagic)
                <tr>
                    <td>
                        {{ $cartaMagic->titulo }}
                    </td>
                    <td>
                        <a href="{{ route('carta_magics.edit', $cartaMagic->id) }}" class="btn btn-primary">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>




</div>
@endsection