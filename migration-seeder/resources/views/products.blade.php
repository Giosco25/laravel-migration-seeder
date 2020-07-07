@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">name</th>
                            <th scope="col">price</th>
                            <th scope="col">category</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($prodotti as $dati_prodotto)
                            <tr>
                                <td>{{ $dati_prodotto['id'] }}</td>
                                <td>{{ $dati_prodotto['name'] }}</td>
                                <td>{{ $dati_prodotto['price'] }}</td>
                                <td>{{ $dati_prodotto['category'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
