@extends('layout.submain')

@section('content')
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ExpenseType</th>
      <th scope="col" >Action</th>

      
    </tr>
  </thead>
  <tbody>
  	@foreach($expensetypes as $expensetype)



    <tr>
      <th scope="row">{{$expensetype->id}}</th>
      <td>{{$expensetype->name}}</td>
      <td><a href="/expensetype/{{$expensetype->id}}" class="btn btn-success">Add Expenses</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection


