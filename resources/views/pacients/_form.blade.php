<div class="row">
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
            {!! Form::label('nom','Nom') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('llinatges') ? ' has-error' : '' }}">
            {!! Form::label('llinatges','Llinatges') !!}
            {!! Form::text('llinatges', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('data_naixement') ? ' has-error' : '' }}">
            {!! Form::label('data_naixement','Data naixement') !!}
            @if(empty($pacient->data_naixement))
                {{--            {!! Form::text('data_naixement', null, ['class' => 'form-control']) !!}--}}
                {!! Form::date('data_naixement', null, ['class' => 'form-control']) !!}
            @else
                {!! Form::date('data_naixement', date('Y-m-d', strtotime($pacient->data_naixement)), ['class' => 'form-control']) !!}
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
            {!! Form::label('dni','DNI') !!}
            {!! Form::text('dni', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('tutor_legal') ? ' has-error' : '' }}">
            {!! Form::label('tutor_legal','Pare, mare o tutor legal') !!}
            {!! Form::text('tutor_legal', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('dni_tutor_legal') ? ' has-error' : '' }}">
            {!! Form::label('dni_tutor_legal','DNI pare, mare o tutor legal') !!}
            {!! Form::text('dni_tutor_legal', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('adreca_1') ? ' has-error' : '' }}">
            {!! Form::label('adreca_1','Adreça 1') !!}
            {!! Form::text('adreca_1', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('adreca_2') ? ' has-error' : '' }}">
            {!! Form::label('adreca_2','Adreça 2') !!}
            {!! Form::text('adreca_2', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('telefon_1') ? ' has-error' : '' }}">
            {!! Form::label('telefon_1','Telèfon 1') !!}
            {!! Form::text('telefon_1', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('telefon_2') ? ' has-error' : '' }}">
            {!! Form::label('telefon_2','Telèfon 2') !!}
            {!! Form::text('telefon_2', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group{{ $errors->has('antecedents_pat') ? ' has-error' : '' }}">
            {!! Form::label('antecedents_pat','Atecedents patològics') !!}
            {!! Form::textarea('antecedents_pat', null, ['class' => 'form-control', 'rows' => 20]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group{{ $errors->has('historia') ? ' has-error' : '' }}">
            {!! Form::label('historia','Història clínica') !!}
            {!! Form::textarea('historia', null, ['class' => 'form-control', 'rows' => 30]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
</div>