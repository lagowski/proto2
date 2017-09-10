@extends('layouts.index')


{{--To co bedziemy uzywac--}}
{{--@section('metricas')--}}
{{--metricas--}}
{{--@endsection--}}

@include('layouts.modal')

@include('layouts.header')

@include('forms.nav')

@include('forms.finance.menu')
@include('forms.finance.accounts')

@include('layouts.footer')

