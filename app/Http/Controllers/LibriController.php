<?php

namespace LSM\Http\Controllers;

use Illuminate\Http\Request;

class LibriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $librat = Libri::all();

        return view('librat.index', compact('librat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $zhanri = Zhanri::lists('Zhanri', 'id')->all();
        $shtepiaBotuese = ShtepiaBotuese::lists('ShtepiaBotuese_Emri', 'id')->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $attributes = request()->validate([
            'NumriSerik' => 'required',
            'FotoLibrit' => 'required',
            'ID_Zhanri' => 'required',
            'Titulli' => 'required',
            'Autori' => 'required',
            'ID_ShtepiaBotuese' => 'required',
            'NumriIFaqeve' => 'required',
            'VitiIBotimit' => 'required',
            'VitiIRibotimit'.
            'Vellimi'.
            'ID_Rafti' => 'required',
            'Statusi' => 'required',
            'NumriILexuesve' => 'required',
        ]);
        quotes::create($attributes);
        //return redirect('/User');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
