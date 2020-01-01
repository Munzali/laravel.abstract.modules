<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title></title>
	<script src="js/jquery-2.2.3.min.js"></script>
  <!-- css files -->
	<!-- <link rel="stylesheet" href="{{asset ('css/style.css')}}" type="text/css" media="all" /> -->
	<!-- Style-CSS -->
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  

</head>
<body>
  {!! Form::open() !!}



    <div class="form-group">

      <label>Select Country:</label>

      {!! Form::select('expensetype_id',[''=>'--- Select Country ---']+$expensetypes,null,['class'=>'form-control']) !!}
     </div>
    <div class="form-group">

      <label>Select State:</label>

      {!! Form::select('id_expense',[''=>''],null,['class'=>'form-control']) !!}

    </div>



    


  {!! Form::close() !!}

<script type="text/javascript">

  $("select[name='expensetype_id']").change(function(){

      var expensetype_id = $(this).val();

      var token = $("input[name='_token']").val();

      $.ajax({

          url: "<?php echo route('select-ajax') ?>",

          method: 'POST',

          data: {expensetype_id:expensetype_id, _token:token},

          success: function(data) {

            $("select[name='id_expense'").html('');

            $("select[name='id_expense'").html(data.options);

          }

      });

  });

</script>



</body>