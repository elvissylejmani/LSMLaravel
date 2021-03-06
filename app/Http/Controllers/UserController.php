<?php

namespace LSM\Http\Controllers;

use Illuminate\Http\Request;
use LSM\User;
use Illuminate\Support\Facades\Gate;
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
        if (Gate::allows('Admin')) {
        $q = User::query();
        $users = User::all();
        $name = request('Search');
        if($name != null)
        {
            $q->where('Emri','like', $name);
            $users = $q->orderBy('id')->paginate(100);
            return view('Search',compact('users'));
        }
        return view('Search',compact('users'));
    }
    else {
       return redirect('/login');
    }
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
            'NrPersonal' => 'required|numeric',
            'NrIdentifikues' => 'required|numeric',
            'DataELindjes' => 'required',
            'ID_Roli' => 'required',
            'email' => 'required|unique:users',
            'password' => ['required', 'min:6','confirmed']
        ]);
         $attributes['password'] = bcrypt($attributes['password']);
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
        if (Gate::allows('Admin')) {
        $user = User::findOrFail($id);
        return view('EditUser',compact('user'));
        }
        else {
            return redirect('/');
         }
      
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
