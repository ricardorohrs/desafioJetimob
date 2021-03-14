@extends('layouts.app')

@section('title', 'Histórico')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <historico></historico>
</div>
@endsection
