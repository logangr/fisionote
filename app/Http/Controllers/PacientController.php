<?php

namespace App\Http\Controllers;

use App\Pacient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PacientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pacients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacients.create',compact('pacient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pacient::create($request->all());

        Session::flash('message', 'Pacient creat');

        return redirect()->route('pacients.index')
            ->with('success','Pacient creat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pacient  $pacient
     * @return \Illuminate\Http\Response
     */
    public function show(Pacient $pacient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pacient  $pacient
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacient $pacient)
    {
        return view('pacients.edit',compact('pacient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pacient  $pacient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacient $pacient)
    {
        $pacient->update($request->all());

        Session::flash('message', 'Pacient modificat');

        return redirect()->route('pacients.index')
            ->with('success','Pacient actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pacient  $pacient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pacient::destroy($id);
        return redirect()->route('pacients.index')
            ->with('success','Pacient eliminat');
    }
}
