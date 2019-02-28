<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\laravel;
use Illuminate\Support\Facades\Input;
class test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ("welcome2");
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
        $user= new laravel;
        $user->name=Input::get("name");
        $user->gender=Input::get("gender");
        $user->city=Input::get("city");
        $user->email=Input::get("email");
        $user->password=Input::get("password");
        $user->mobile=Input::get("mobile");
        if(Input::hasFile("image")){
            $files=Input::file('image');
            $name=time()."_".$files->getClientOriginalName();
            $image=$files->move(public_path().'/',$name);
            $user->image=$name;
            
        }
        $user->save();
        return redirect('showall');
    
//        return ("Data saved to database");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $user=laravel::all();
        return view("viewall", compact('user'));
    }
    
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
