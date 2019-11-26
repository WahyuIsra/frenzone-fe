<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
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
        return view('Register');
    }
    
    public function create_post(Request $request){
        $Collegue = new Collegue;
        $Collegue->name=$request["name"];
        $Collegue->email=$request["email"];
        $Collegue->nim=$request["nim"];
        $Collegue->gender=$request["gender"];
        $Collegue->password=$request["password"];
        $Collegue->role_id=$request["role_id"];
        $Collegue->faculty_id=$request["faculty_id"];
        $Collegue->save();
        return view('View_Register',['Collegue' => $Collegue]);

    }
    public function get(){
        $View_Register = Collegue::all();
        return view('View_Register',['View_Register' => $View_Register]);
    }

    public function process(Request $request){
        $this->validate($request,[
            'name' => 'required|max:60',
            'nim' => 'required|equal:10',
            'gender' => 'required',
            'password' => 'required',
            'email' => 'required',
            'faculty' => 'required'
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
