<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
    <link href="{{ asset('css_nggtp/bootstrap.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/style.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/style2.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/dark.css') }}"   rel='stylesheet' type='text/css' />

    <link href="{{ asset('css_nggtp/rolex.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/font-icons.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/animate.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/magnific-popup.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/responsive.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/colors.php') }}"   rel='stylesheet' type='text/css' />

    <link href="{{ asset('css_nggtp/datepicker.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/timepicker.css') }}"   rel='stylesheet' type='text/css' />
    <link href="{{ asset('css_nggtp/daterangepicker.css') }}"   rel='stylesheet' type='text/css' />

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>   
</head>
<body>
    <img src="https://www.nggtimepieces.com/css/desktop/demos/rolex/images/calender_2.png" width="120" height="120">
        <center><h2>BOOK AN APPOINTMENT</h2></center>   
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">FIRST NAME<small class="text-danger">*</small></label>
                {{Form::text('first_name','',['class'=>'form-control','id'=>'first_name'])}}
                <b  class="text-danger" id="first_nameError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">LAST NAME<small class="text-danger">*</small></label>
                {{Form::text('last_name','',['class'=>'form-control','id'=>'last_name'])}}
                <b  class="text-danger" id="last_nameError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">PHONE NUMBER<small class="text-danger">*</small></label>
                {{Form::text('phone','',['class'=>'form-control','id'=>'phone'])}}
                <b  class="text-danger" id="phoneError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">EMAIL<small class="text-danger">*</small></label>
                {{Form::text('email','',['class'=>'form-control','id'=>'email'])}}
                <b  class="text-danger" id="emailError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">STORE<small class="text-danger">*</small></label>
                {{ Form::select('stroe', ['NGG Timepieces Head Office' => 'NGG Timepieces Head Office','Central World' => 'Central World','Central Plaza Ladprao' => 'Central Plaza Ladprao','Central Plaza WestGate'=> 'Central Plaza WestGate','Central Plaza Udonthani'=>'Central Plaza Udonthani'],null, ['class' => 'form-control','id'=>'stroe']) }}
                <b  class="text-danger" id="stroeError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">DATE<small class="text-danger">*</small></label>
                {{Form::text('date','',['class'=>'form-control','id'=>'date'])}}
                <b  class="text-danger" id="dateError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-12"> 
            <div class="form-group ">
                <label class="control-label">MESSAGE<small class="text-danger">*</small></label>
                {{Form::text('message','',['class'=>'form-control','id'=>'message'])}}
                <b  class="text-danger" id="messageError"></b>
                </div>  
            </div>
        </div>

        <div class="form-group">
            <br>
                    <center><button type="button" class="btn btn-default">RESERVE</button></center>
            </div>
        
</body>
</html>