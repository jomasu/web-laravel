@extends('layouts.layout')

@section('title', 'Electronicos y perifericos')

<!--Slider-->
@section('content')
	@include('slider')
@endsection

<!--Contenido de la página-->
@section('body')
	@include('body')
@endsection

<!--Footer de la página-->
@section('footer')
	@include('layouts.footer')
@endsection
