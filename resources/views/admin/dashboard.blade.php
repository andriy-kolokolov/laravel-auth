@php $user = Auth::user(); @endphp

@extends('admin.layouts.base')

@section('contents')

    <h2 class="">
        Benvenuto , {{ $user->name }} !
    </h2>

@endsection
