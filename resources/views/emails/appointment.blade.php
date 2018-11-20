<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NGGTM</title>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
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
        <div class="container">
                <center>  <img src="https://www.nggtimepieces.com/css/desktop/demos/rolex/images/calender_2.png" width="120" height="120"></center>   
        <center><h2>BOOK AN APPOINTMENT</h2></center>   
   
        <form action="{{url('appointment')}}" method="post">
                @csrf
     <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">FIRST NAME<small class="text-danger">*</small></label>
                <input type="text" name="first_name" id="first_name" class="form-control" required  value="{{ old('first_name') }}">
          
                <b  class="text-danger" id="first_nameError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">LAST NAME<small class="text-danger">*</small></label>
                <input type="text" name="last_name" id="last_name" class="form-control" required value="{{ old('last_name') }}">

                <b  class="text-danger" id="last_nameError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">PHONE NUMBER<small class="text-danger">*</small></label>
                <input type="text" name="phone" id="phone" class="form-control" required  value="{{ old('phone') }}">

               
                <b  class="text-danger" id="phoneError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">EMAIL<small class="text-danger">*</small></label>
                <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
              
                <b  class="text-danger" id="emailError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">STORE<small class="text-danger">*</small></label>
                <select name="store" id="stroe" class="form-control" required>
                    <option value="">เลือก</option>
                    
                    <option value="NGG Timepieces Head Office">NGG Timepieces Head Office</option>
                    <option value="Central World">Central World</option>
                    <option value="Central Plaza Ladprao">Central Plaza Ladprao</option>
                    <option value="Central Plaza WestGate">Central Plaza WestGate</option>
                    <option value="Central Plaza Udonthani">Central Plaza Udonthani</option>
                   
                </select>
               
                <b  class="text-danger" id="stroeError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">DATE<small class="text-danger">*</small></label>
                <input type="date" name="date_reserve" id="date_reserve" class="form-control" required value="{{ old('date_reserve') }}">
                
                <b  class="text-danger" id="dateError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-12"> 
            <div class="form-group ">
                <label class="control-label">MESSAGE<small class="text-danger">*</small></label>
                <textarea name="message" id="message" cols="30" rows="3" class="form-control" required > {{ old('message') }}</textarea>
              
                
                <b  class="text-danger" id="messageError"></b>
                </div>  
            </div>
        </div>

        <div class="form-group">
                <center>     {!! NoCaptcha::display() !!}
                
                        @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                </center>
            <br>
                    <center>  <input type="submit" value="RESERVE"  class="btn btn-default"></center>
            </div>
      
    </form>
</div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>