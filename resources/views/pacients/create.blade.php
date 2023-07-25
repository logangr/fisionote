@extends('app')

@section('content')
    <h1>Nou pacient</h1>
    <hr/>

    @include('errors.list')

    {!! Form::open(['route' => 'pacients.store']) !!}
    @include('pacients._form',['submitButtonText' => 'Crear'])
    {!! Form::close() !!}

@stop

@push('scripts')
<script src="https://cdn.tiny.cloud/1/15u3ezcsq1u7rdp02ct0l1m1m5ahern70ey2o639womam9m0/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'#antecedents_pat' });
    tinymce.init({ selector:'#historia' });
</script>

@endpush