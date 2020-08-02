@extends('layouts.app.app-frame')

@section('body')
    @foreach($component as $c)
        @include('demos.' . $c)
    @endforeach
@endsection
