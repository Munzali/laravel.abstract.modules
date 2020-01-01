<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expensetype;

class expenseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $expensetype=Expensetype::all();
        return view('expensetype.index')->with('expensetypes',$expensetype);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expensetype.expensetype');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

          $this->validate($request,[

            'name'=>'required'
            
        ]);
         
        $expensetype=new Expensetype;
        $expensetype->name=$request->input('name');
        
        $expensetype->save();

        return redirect('expensetype')->with('success','You can now enter your expense');
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

        $expensetype=Expensetype::findorfail($id);
        
         
        return view('expensetype.show')->with('expensetype',$expensetype);
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
