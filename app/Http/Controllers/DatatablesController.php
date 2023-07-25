<?php

namespace App\Http\Controllers;

use App\Pacient;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function pacients()
    {
        return Datatables::of(Pacient::query())
            ->addColumn('action', function ($pacient) {
                return '<a href="/pacients/'.$pacient->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>';
            })
            ->make(true);
    }
}
