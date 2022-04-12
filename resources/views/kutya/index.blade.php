@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Név</th>
                    <th>Életkor</th>
                    <th>Fajta</th>
                    <th>Gazda Neve</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kutyak as $kutya)
                    <tr>
                        <td>{{ $kutya->nev }}</td>
                        <td>{{ $kutya->eletkor }}</td>
                        <td>{{ $kutya->fajta }}</td>
                        <td>{{ $kutya->gazda_neve }}</td>
                        <td>
                            <a href="{{ route('kutya.show', $kutya->id) }}" class="btn btn-outline-secondary">Részletek</a>
                            <a href="{{ route('kutya.edit', $kutya->id) }}" class="btn btn-outline-secondary">Módosítás</a>
                            @include('kutya.delete-button', ['kutyaId' => $kutya->id])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
