@extends('app')

@section('content')

    <div class="jumbotron" style="text-align: center">
        <div class="page-header">
            <h2>Benvingut a Fisionote</h2>
            <h3>Què vols fer?</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-lg-offset-3 small-top-margin"><a class="btn btn-lg btn-info" href="{{ route('pacients.create') }}">Nou pacient</a></div>
            <div class="col-lg-3 small-top-margin"><a class="btn btn-lg btn-default" href="{{ route('pacients.index') }}">Cercar pacient</a></div>
        </div>
    </div>

@stop