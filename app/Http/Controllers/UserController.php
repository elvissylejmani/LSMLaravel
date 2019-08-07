<?php

namespace LSM\Http\Controllers;

use Illuminate\Http\Request;
use LSM\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('User',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'Emri' => 'required',
            'Mbiemri' => 'required',
            'NrPersonal' => 'required',
            'NrIdentifikues' => 'required',
            'DataELindjes' => 'required',
            'ID_Roli' => 'required',
            'Email' => 'required',
            'password' => ['required', 'min:6']
        ]);
       $attributes['password']= Hash::make('password', [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2,
        ]);
        User::create($attributes);
        return redirect('/User');
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
      $user = User::findOrFail($id);
        dd($user);
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
