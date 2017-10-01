<?php

namespace App\Http\Controllers;

use App\Signup;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'doc' => 'required'
    ]);
        $path = request()->file('doc')->store('documents');
        $path = $request->file('doc')->storeAs(
    'documents', str_slug(request()->name, '')
    );
    
        Signup::create([
      'name' => request()->name,
      'email' => request()->email,
      'file_path' => $path
    ]);
        Mail::to(request()->email)->queue(new FormReceived(request()->name));
        return view('success')->with([
      'name' => request()->name,
      'email' => request()->email,
      'faker' => Faker::create()
    ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function show(Signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function edit(Signup $signup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signup $signup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signup $signup)
    {
        //
    }
}
