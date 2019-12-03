<?php

namespace App\Http\Controllers;

use App\Emprestimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emprestimos.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Emprestimos::create($request->all());

        return redirect()->route('emprestimos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Emprestimos::create($request->all());

       return redirect()->route('emprestimos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emprestimo = Emprestimos::find($id);

        return view('emprestimos.show', compact('emprestimo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emprestimo = Emprestimo::find($id);

        return view('emprestimo.edit', compact('emprestimo'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprestimo $emprestimo)
    {
        DB::table('cliente')
        ->where('id', $id)
        ->update(
           [
               'data_retirada' => $request->nome,
               'data_prevista' => $request->CPF,
               'data_devolucao' => $request->email
                );
           ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprestimo $emprestimo)
    {
        Emprestimos::detroy($id);

        $emprestimos = Emprestimo::all();

        return view('emprestimo.index', compact('emprestimos'));
    }
}
