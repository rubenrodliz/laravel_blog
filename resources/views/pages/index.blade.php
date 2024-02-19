@extends('pages/template')

@section('title', 'Home')
@section('description', 'This is the home page')
@section('content')
    @foreach ($threads as $thread)
        @include('pages.components._item')
    @endforeach

    {{ $threads->links() }}
@endsection
