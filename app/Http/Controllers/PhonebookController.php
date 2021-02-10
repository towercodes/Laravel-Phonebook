<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebook;
use DB;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$sql =         DB::table('phonebooks')->get();

return view('index', ['sql' => $sql]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$insert = $request->validate([
'name' => 'required',
]);

DB::table('phonebooks')->insert([
'name' => $insert['name'],
'phone' => $request['phone'],
'email' => $request['email'],
'other' => $request['other'],
]);

return redirect('phonebook');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
$sql = DB::table('phonebooks')->where('id', $id)->first();

        return view('edit', ['upd' => $sql]);
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
     $req = $request->validate([
'name' => 'required',
]);

DB::table('phonebooks')->where('id', $id)->update([
'name' => $req['name'],
   'phone' => $request['phone'],
   'email' => $request['email'],
   'other' => $request['other'],
]);

return redirect('phonebook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
DB::table('phonebooks')->where('id', $id)->delete();        

return redirect('phonebook');
    }

//end of class
}