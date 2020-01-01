<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Expensetype;
use DB;


class expenseController extends Controller
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
        //

        $expensetypes=DB::table('expensetypes')->pluck("name","id")->all();
        return view('expenses.output')->with('expensetypes',$expensetypes);

    }
  public function fetchdata(Request $request)

    {

        if($request->ajax()){

            $list = DB::table('expenses')->where('expensetype_id',$request->expensetype_id)->pluck("name","id")->all();

            $data = view('expenses.suboutput',compact('list'))->render();

            return response()->json(['options'=>$data]);

        }

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('expenses.expense');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$expense_type_id)
    {
        //
        $this->validate($request,[
           
            'name'=>'required' 

        ]);
        $expensetype=Expensetype::find($expense_type_id);
        $expenses=new Expense;

        $expenses->name=$request->input('name');
        $expenses->expensetype()->associate($expensetype);
        $expenses->user_id=auth()->user()->id;
        $expenses->save();
        return redirect('expenses')->with('success','submitted');
        

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
