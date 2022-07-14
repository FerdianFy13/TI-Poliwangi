@extends('partials.main')

@section('content')
{{-- header --}}
@section('header')
@include('core.home.header')
@show
{{-- end header --}}

{{-- about --}}
@section('about')
@include('core.home.about')
@show
{{-- end about --}}

{{-- highlight --}}
@section('highlight')
@include('core.home.highlight')
@show
{{-- end highlight --}}

{{-- contact --}}
@section('contact')
@include('core.home.contact')
@show
{{-- end contact --}}

@endsection