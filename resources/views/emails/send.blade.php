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
                <input type="text" name="first_name" id="first_name" class="form-control">
          
                <b  class="text-danger" id="first_nameError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">LAST NAME<small class="text-danger">*</small></label>
                <input type="text" name="last_name" id="last_name" class="form-control">

                <b  class="text-danger" id="last_nameError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">PHONE NUMBER<small class="text-danger">*</small></label>
                <input type="text" name="phone" id="phone" class="form-control">

               
                <b  class="text-danger" id="phoneError"></b>
                </div>  
            </div>
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">EMAIL<small class="text-danger">*</small></label>
                <input type="email" name="email" id="email" class="form-control">
              
                <b  class="text-danger" id="emailError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group ">
                <label class="control-label">STORE<small class="text-danger">*</small></label>
                <select name="stroe" id="stroe" class="form-control">
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
                <input type="text" name="date" id="date" class="form-control">
                
                <b  class="text-danger" id="dateError"></b>
                </div>  
            </div>
        </div>
    <div class="row">
        <div class="col-md-12"> 
            <div class="form-group ">
                <label class="control-label">MESSAGE<small class="text-danger">*</small></label>
                <input type="text" name="message" id="message" class="form-control">
                
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