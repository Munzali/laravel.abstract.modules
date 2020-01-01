@extends('layout.submain')
@section('content')
  <div class="container">
    <div class="row">
<div class="col-md-8 offset-md-2">


<div class="card bg-light mb-3 mt-5 text-center" style="max-width: 40rem;" >
  <div class="card-header"><h2>Expenses Lister</h2></div>
  <div class="card-body">
   
     {!! Form::open() !!}



    <div class="form-group">

    {!!Form::label('Expensetype', 'Select Expensetype:')!!}

      {!! Form::select('expensetype_id',[''=>'Select Expense Type']+$expensetypes,null,['class'=>'form-control']) !!}
     </div>
    <div class="form-group">

     {!!Form::label('Expenses', 'List of Expenses:')!!}

      {!! Form::select('id_expense',[''=>''],null,['class'=>'form-control']) !!}

    </div>



  {!! Form::close() !!}
  </div>
</div>
</div>
</div>


 
</div>
<script type="text/javascript">

  $("select[name='expensetype_id']").change(function(){

      var expensetype_id = $(this).val();

      var token = $("input[name='_token']").val();

      $.ajax({

          url: "{{route('suboutput') }}",

          method: 'POST',

          data: {expensetype_id:expensetype_id, _token:token},

          success: function(data) {

            $("select[name='id_expense'").html('');

            $("select[name='id_expense'").html(data.options);

          }

      });

  });

</script>



@endsection