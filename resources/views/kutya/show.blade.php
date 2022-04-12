@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $kutya->nev }} ({{ $kutya->eletkor }})</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $kutya->fajta }}</h6>
                <p class="card-text">Gazdája: {{ $kutya->gazda_neve }}</p>

                <a href="{{ route('kutya.edit', $kutya->id) }}" class="btn btn-outline-secondary">Módosítás</a>
                @include('kutya.delete-button', ['kutyaId' => $kutya->id])
            </div>
        </div>
    </div>
@endsection
