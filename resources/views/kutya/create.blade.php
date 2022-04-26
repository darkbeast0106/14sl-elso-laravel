@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Új kutya felvétele</h1>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <form action="{{ route('kutya.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nev" class="form-label">Név:</label>
                <input type="text" id="nev" placeholder="Név" name="nev"
                    value="{{ old('nev') ? old('nev') : '' }}" @class([
                        'form-control',
                        'is-invalid' => array_key_exists('nev', $errors->messages()),
                    ])>
                @error('nev')
                    <div class="invalid-feedfack text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="eletkor" class="form-label">Életkor:</label>
                <input type="number" id="eletkor" placeholder="Életkor" name="eletkor"
                    value="{{ old('eletkor') ? old('eletkor') : '' }}" @class([
                        'form-control',
                        'is-invalid' => array_key_exists('eletkor', $errors->messages()),
                    ])>
                @error('eletkor')
                    <div class="invalid-feedfack text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fajta" class="form-label">Fajta:</label>
                <input type="text"id="fajta" placeholder="Fajta" name="fajta"
                    value="{{ old('fajta') ? old('fajta') : '' }}" @class([
                        'form-control',
                        'is-invalid' => array_key_exists('fajta', $errors->messages()),
                    ])>
                @error('fajta')
                    <div class="invalid-feedfack text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gazda_neve" class="form-label">Gazda neve:</label>
                <input type="text" id="gazda_neve" placeholder="Gazda neve" name="gazda_neve"
                    value="{{ old('gazda_neve') ? old('gazda_neve') : '' }}" @class([
                        'form-control',
                        'is-invalid' => array_key_exists('gazda_neve', $errors->messages()),
                    ])>
                @error('gazda_neve')
                    <div class="invalid-feedfack text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-secondary">Felvétel</button>
        </form>
    </div>
@endsection
