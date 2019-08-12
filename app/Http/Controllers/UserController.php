<?php

namespace LSM\Http\Controllers;

use Illuminate\Http\Request;
use LSM\User;
use Illuminate\Support\Facades\Hash;
use LSM\Http\Controllers\Input;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q = User::query();
        $users = User::all();
        $name = request('Search');
        if($name != null)
        {
            $q->where('Emri','like', $name);
            $users = $q->orderBy('id')->paginate(100);
            return view('insert',compact('users'));
        }
        return view('insert',compact('users'));
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
        return redirect('/Admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('EditUser',compact('user'));
      
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
         $user = User::findOrFail($id);
         $user->update(request()->all());
         return redirect('Admin');
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
        User::findOrFail($id)->delete();;
        return redirect('Admin');
    }
}
