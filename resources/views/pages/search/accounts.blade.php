@extends('layouts.index')


{{--To co bedziemy uzywac--}}
{{--@section('metricas')--}}
{{--metricas--}}
{{--@endsection--}}

@include('layouts.modal')

@include('layouts.header')

@include('forms.nav')

@include('forms.search.menu')
@include('forms.search.accounts')

@include('layouts.footer')

