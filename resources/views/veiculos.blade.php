@extends('layouts.app')

@section('title', 'Veículos')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <veiculos></veiculos>
    </div>
@endsection
