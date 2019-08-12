<?php

namespace LSM\Http\Controllers;

use Illuminate\Http\Request;
use LSM\Libri;
use DB;

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

       // $shtepiatBotuese = DB::table('shtepia_botueses');
      
        return view('Libri',compact('librat'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'VitiIRibotimit',
            'Vellimi' => 'required',
            'ID_Rafti' => 'required',
            'Statusi' => 'required',
            'NumriILexuesve' => 'required',
        ]);
        Libri::create( $attributes);
        return redirect('/librat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libri = Libri::findOrFail($id);
        return view('EditLibri',compact('libri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $libri = Libri::findOrFail($id);
        $libri->update(request()->all());
        return redirect('librat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Libri::findOrFail($id)->delete();
        return redirect('librat');
    }
}
