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
                <form action="{{url('contact')}}" method="post">
                        @csrf
    <center><h2>CONTACT US</h2></center>
    <hr width="10%" align="left">
    Please specify your preferred mode of contact and we will respond as quickly as possible <br>
   
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label class="control-label">TITLE<small class="text-danger">*</small></label>
                <select name="preface" id="preface" class="form-control" required>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                    </select>
                <b  class="text-danger" id="emailError"></b>
            </div>
        </div>
        <div class="col-md-5"> 
                <div class="form-group ">
                    <label class="control-label">FIRST NAME<small class="text-danger">*</small></label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                    <b  class="text-danger" id="first_nameError"></b>
                    </div>  
                </div>
            <div class="col-md-5"> 
                <div class="form-group ">
                    <label class="control-label">LAST NAME<small class="text-danger">*</small></label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                    <b  class="text-danger" id="last_nameError"></b>
                    </div>  
                </div>
    </div>
    <div class="row">
            <div class="col-md-6"> 
                    <div class="form-group ">
                        <label class="control-label">EMAIL<small class="text-danger">*</small></label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <b  class="text-danger" id="emailError"></b>
                        </div>  
                    </div>
                    <div class="col-md-6"> 
                            <div class="form-group ">
                                <label class="control-label">PHONE NUMBER<small class="text-danger">*</small></label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                                <b  class="text-danger" id="phoneError"></b>
                                </div>  
                            </div>
    </div>
    <div class="row">
            <div class="col-md-12"> 
                <div class="form-group ">
                    <label class="control-label">YOUR MESSAGE<small class="text-danger">*</small></label>
                    <textarea name="message" id="message" cols="30" rows="5" required class="form-control"></textarea>
              
                    <b  class="text-danger" id="messageError"></b>
                    </div>  
                </div>
            </div>
    <div class="row">
            <div class="form-check">
                    <label class="form-check-label">
                            <input type="checkbox" name="readandaccepted" id="readandaccepted" required><small class="text-danger">*</small>I have read and accepted the terms and conditions and privacy policy 
                    </label>
                  </div>

                  <div class="form-check">
                        <label class="form-check-label">
                                <input type="checkbox" name="accept" id="accept"><small class="text-danger" required >*</small>I accept receiving marketing information about Rolex from NGG TIMEPIECES CO. LTD.
                        </label>
                      </div>
    
           
           
        </div>
    </div>
    <br><br>
    <div class="form-group">
        <center>     {!! NoCaptcha::display() !!}
                
            @if ($errors->has('g-recaptcha-response'))
            <span class="help-block text-danger">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
    </center>
        <br>
                    <center><input type="submit" class="btn btn-default" value="SEND"></center>
            </div>
    </form>
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>