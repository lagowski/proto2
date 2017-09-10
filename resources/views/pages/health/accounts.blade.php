@extends('layouts.index')


{{--To co bedziemy uzywac--}}
{{--@section('metricas')--}}
{{--metricas--}}
{{--@endsection--}}

@include('layouts.modal')

@include('layouts.header')

@include('forms.nav')

@include('forms.health.menu')
@include('forms.health.accounts')

@include('layouts.footer')

