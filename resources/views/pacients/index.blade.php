@extends('app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12"><a class="btn btn-info" href="{{ route('pacients.create') }}">Nou pacient</a></div>
    </div>

    <div class="row" style="margin-top: 20px">
        <div class="col-lg-12">
            <table class="table table-bordered" id="pacients-table">
                <thead>
                <tr>
                    <th>Llinatges</th>
                    <th>Nom</th>
                    <th>DNI</th>
                    <th>Telèfon</th>
                    <th>Email</th>
                    <th>Accions</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@push('scripts')
<script>
    $(function() {
        $('#pacients-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.pacients') !!}',
            columns: [
                { data: 'llinatges', name: 'llinatges' },
                { data: 'nom', name: 'nom' },
                { data: 'dni', name: 'dni' },
                { data: 'telefon_1', name: 'telefon_1' },
                { data: 'email', name: 'email' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endpush