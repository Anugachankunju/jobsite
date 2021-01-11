@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="max-width: 500px;">
        <div class="card mb-4 box-shadow">
            <div class="card-body">
                <h5 style="float: left;">Create an Account (it's free)</h5>
                <br><br>
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" style="font-size: 80%;
                   border-radius: 5rem;letter-spacing: .1rem;font-weight: bold;padding: 1rem;transition: all 0.2s;"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" style="background-color: #3b5998; font-size: 80%;
                   border-radius: 5rem;letter-spacing: .1rem;font-weight: bold;padding: 1rem;transition: all 0.2s;"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        <hr>
                            <div class="form-group">
                                 <label for="formGroupExampleInput" style="float: left;">Name</label>
                                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                            </div>

                                <div class="form-group">
                                     <label for="formGroupExampleInput" style="float: left;">Email</label>
                                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                        <div class="form-group">
                                           <label for="formGroupExampleInput" style="float: left;">Mobile Number</label>
                                           <input id="phone" type="tel" class="form-control" id="formGroupExampleInput" placeholder="" required name="mobile" value="{{ old('mobile') }}"> 
                                        </div>

                                            <div class="form-group">
                                                <label for="formGroupExampleInput2" style="float: left;">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                            </div>

                                             <div class="form-group">
                                                <label for="formGroupExampleInput2" style="float: left;">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                            </div>
   
                                                <div class="form-group {{ $errors->has('file_path') ? ' has-error' : '' }}">
                                                    <label for="formGroupExampleInput2" style="float: left;">Resume</label>
                                                    <input type="file" class="form-control" id="formGroupExampleInput2" placeholder="" name="RESUMES" required accept="application/pdf" >
                                                    @if ($errors->has('file_path'))
            <span class="help-block">
                <strong>{{ $errors->first('file_path') }}</strong>
            </span>
        @endif
                                                
                                                
                                                
                                                </div>
                                                <div class="form-group">
                                        <div class="form-check" style="float: left;">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div><br><br>
             
              <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" style="font-size: 80%;
              border-radius: 5rem;
              letter-spacing: .1rem;
              font-weight: bold;
              padding: 1rem;
              transition: all 0.2s;">Create Account</button>
            </form>
            <hr>
            <div class="Sign-footer">
            <p>By creating an account, you agree to Indeed's Terms of Service, Cookie Policy and Privacy Policy. You consent to receiving marketing messages from Indeed and may opt out from receiving such messages by following the unsubscribe link in our messages, or as detailed in our terms.</p>
          </div>
      
          </div>
      </div>
    
    
    </div>

                    </form>
                    <?php
    {
      function reCaptcha($recaptcha){
        $secret = "YOUR SECRET KEY";
        $ip = $_SERVER['REMOTE_ADDR'];
      
        $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);
      
        return json_decode($data, true);
      }
    }
    ?>
            </div>
        </div> 
    </div>
</div>
@endsection
