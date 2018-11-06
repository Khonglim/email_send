@extends('layouts.app')

@section('content')
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                <form method="POST" action="{{url('email')}}" aria-label="{{ __('Register') }}">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fristname') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="fristname" value="{{ old('name') }}" required autofocus>

                 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('name') }}" required autofocus>

                        
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="phone" value="{{ old('name') }}" required autofocus>

                        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                              
                            </div>
                        </div>
                                 
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Store') }}</label>

                            <div class="col-md-6">
                                <input id="Store" type="text" class="form-control" name="store" value="{{ old('name') }}" required autofocus>

                        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('message') }}</label>

                            <div class="col-md-6">
                                <input id="message" type="text" class="form-control" name="message" required>

                            
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('message') }}</label>
    
                                <div class="col-md-6">
                                    <input id="message" type="date" class="form-control" name="date" required>
    
                                
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="message" class="col-md-4 col-form-label text-md-right"></label>
                                    {!! NoCaptcha::display() !!}

                                    @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                
                               
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
