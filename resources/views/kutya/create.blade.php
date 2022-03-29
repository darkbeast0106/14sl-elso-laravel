@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Új kutya</h1>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('kutya.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nev">Név</label>
                <input id="nev" name="nev" type="text" placeholder="Név" @class(['form-control', 'is-invalid' => array_key_exists('nev', $errors->messages())])
                    value="{{ (old('nev')) ?  old('nev') : ""}}"
                >
                @error('nev')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="eletkor">Életkor</label>
                <input id="eletkor" name="eletkor" type="number" placeholder="Életkor" @class(['form-control', 'is-invalid' => array_key_exists('eletkor', $errors->messages())])
                    value="{{ (old('eletkor')) ?  old('eletkor') : ""}}">
                @error('eletkor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="fajta">Fajta</label>
                <input id="fajta" name="fajta" type="text" placeholder="Fajta" @class(['form-control', 'is-invalid' => array_key_exists('fajta', $errors->messages())])
                    value="{{ (old('fajta')) ?  old('fajta') : ""}}"
                >
                @error('fajta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gazda_neve">Gazda neve</label>
                <input id="gazda_neve" name="gazda_neve" type="text" placeholder="Gazda neve" @class(['form-control', 'is-invalid' => array_key_exists('gazda_neve', $errors->messages())])
                    value="{{ (old('gazda_neve')) ?  old('gazda_neve') : ""}}"
                >
                @error('gazda_neve')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-secondary" type="submit">Felvétel</button>
            </div>
        </form>
    </div>
@endsection
