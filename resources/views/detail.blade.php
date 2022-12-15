
@extends('layouts.main')
{{--pake {!! var !!} kalo mau jalanin html dalem text--}} 
@section('container')

    {{ $data->IdUser}}
    {{ $data->User->email }}
    
@endsection