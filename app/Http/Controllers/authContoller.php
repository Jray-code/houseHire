<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class authContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function signin()
    {
        //
         return view('signin');
    }
    public function create()
    {
        //
         return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate=request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);
       $create= User::create($validate);
        Auth::login($create);
        return redirect('/home');
    }
    public function logout(Request $request, User $user)
    {
        //
        Auth::logout($user);
        return redirect('/login');
    }
    public function login(Request $request, User $user)
    {
        //
        $validate=request()->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(!Auth::attempt($validate)){
            throw ValidationException::withMessages(['alert'=>'Wrong credentials']);
        }
        request()-session()->regenerate();
        return redirect('/');
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
