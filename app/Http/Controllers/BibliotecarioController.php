<?php

namespace App\Http\Controllers;

use App\Bibliotecario;
use Illuminate\Http\Request;

class BibliotecarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bibliotecarios = Bibliotecario::all();

       return view('bibliotecario.index', compact("bibliotecarios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('bibliotecario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Bibliotecario::create($request->all());

       return redirect()->route('bibliotecarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bibliotecario  $bibliotecario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bibliotecario = Bibliotecario::find($id);

        return view('bibliotecarios.show', compact('bibliotecario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bibliotecario  $bibliotecario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bibliotecario = Bibliotecario::find($id);

        return view('bibliotecarios.edit', compact('bibliotecario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bibliotecario  $bibliotecario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('bibliotecario')
         ->where('id', $id)
         ->update(
            [
                'nome' => $request->nome,
                'CPF' => $request->CPF
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bibliotecario  $bibliotecario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bibliotecario::detroy($id);

        $bibliotecarios = Bibliotecario::all();

        return view('bibliotecarios.index', compact('bibliotecarios'));
    }
}
