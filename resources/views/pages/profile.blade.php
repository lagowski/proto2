@extends('layouts.index')


{{--To co bedziemy uzywac--}}
{{--@section('metricas')--}}
{{--metricas--}}
{{--@endsection--}}

@include('layouts.modal')

@include('layouts.header')

@include('forms.nav')

@include('forms.menu')
@include('forms.form1')
@include('forms.finance.accounts')


@include('layouts.footer')

