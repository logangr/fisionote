@extends('app')

@section('content')
    <div class="row">
        <div class="col-xs-10">
            <h1>Editar pacient</h1>
        </div>
        <div class="col-xs-2 text-right small-top-margin">
            <div class="btn-toolbar" role="toolbar">
                {!! Form::open(['method' => 'DELETE', 'route' => ['pacients.destroy', $pacient->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
                    <button type="submit" class="btn btn-danger btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr/>

    @include('errors.list')

    {!! Form::model($pacient,['method'=>'PATCH','route' => ['pacients.update',$pacient]]) !!}
    @include('pacients._form',['submitButtonText' => 'Guardar canvis'])
    {!! Form::close() !!}

@stop
@push('scripts')
<script src="https://cdn.tiny.cloud/1/15u3ezcsq1u7rdp02ct0l1m1m5ahern70ey2o639womam9m0/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'#antecedents_pat' });
    tinymce.init({ selector:'#historia' });

    function ConfirmDelete() {
        var confirmat = confirm("Segur que vols eliminar el pacient?");
        if (confirmat)
            return true;
        else
            return false;
    }
</script>

@endpush