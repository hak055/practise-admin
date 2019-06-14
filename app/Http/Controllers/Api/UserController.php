<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  $this->validate($request, [
                                'name' => 'required|string|max:191',
                                'email' => 'required|string|email|max:191|unique:users',
                                'password' => 'required|string|min:4',
                                'type' => 'required'
                            ]);

        if($validator)
        {
            $request['password'] = Hash::make($request['password']);
            User::create($request->all());
        }
        return redirect()->back()->withErrors($validator);
        

        //User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'type' => $request['type'],
        //     'bia' => $request['bio'],
        //     'photo' => $request['photo'],
        //     'password' => Hash::make($request['password']),
        // ]);
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
        $user = User::findOrFail($id);
        $user->delete();
       
        return ['message' => 'User Deleted'];
    }
}
