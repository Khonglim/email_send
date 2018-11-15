<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h2>CONTACT US</h2></center>
    <hr width="10%" align="left">
    Please specify your preferred mode of contact and we will respond as quickly as possible <br>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label class="control-label">TITLE<small class="text-danger">*</small></label>
                <select name="stroe" id="stroe" class="form-control">
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
                    <input type="text" name="first_name" id="first_name" class="form-control">
                    <b  class="text-danger" id="first_nameError"></b>
                    </div>  
                </div>
            <div class="col-md-5"> 
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
                        <label class="control-label">EMAIL<small class="text-danger">*</small></label>
                        <input type="email" name="email" id="email" class="form-control">
                        <b  class="text-danger" id="emailError"></b>
                        </div>  
                    </div>
                    <div class="col-md-6"> 
                            <div class="form-group ">
                                <label class="control-label">PHONE NUMBER<small class="text-danger">*</small></label>
                                <input type="text" name="phone" id="phone" class="form-control">
                                <b  class="text-danger" id="phoneError"></b>
                                </div>  
                            </div>
    </div>
    <div class="row">
            <div class="col-md-12"> 
                <div class="form-group ">
                    <label class="control-label">YOUR MESSAGE<small class="text-danger">*</small></label>
                    <input type="text" name="message" id="message" class="form-control">
                    <b  class="text-danger" id="messageError"></b>
                    </div>  
                </div>
            </div>
    <div class="row">
        <div class="form-group">
            <input type="checkbox" name="readandaccepted" id="readandaccepted"><small class="text-danger">*</small>I have read and accepted the terms and conditions and privacy policy 
            <b  class="text-danger" id="readandacceptedError"></b>
            <input type="checkbox" name="accept" id="accept"><small class="text-danger">*</small>I accept receiving marketing information about Rolex from NGG TIMEPIECES CO. LTD.
            <b  class="text-danger" id="acceptError"></b>
        </div>
    </div>
    <div class="form-group">
            <br>
                    <center><button type="button" class="btn btn-default">SEND</button></center>
            </div>
    
</body>
</html>