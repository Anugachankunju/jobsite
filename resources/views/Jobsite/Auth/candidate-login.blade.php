@extends('layouts.app')



@section('content')
<div class="container">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="max-width: 500px;">
   
        

   <div class="card mb-4 box-shadow">
    
     <div class="card-body">
       
       <h5 style="float: left;">Sign In</h5>
       
       <br><br>
      
       <form method="POST" action="{{ route('login') }}">
    @csrf
      
         <div class="form-group">
           <label for="formGroupExampleInput" style="float: left;">Email</label>
           <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="formGroupExampleInput" placeholder="" required>
           @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
         </div>
         <div class="form-group">
           <label for="formGroupExampleInput2" style="float: left;">Password</label>
           <input type="password"class="form-control @error('password') is-invalid @enderror" name="password" id="formGroupExampleInput2" placeholder="" required>

           @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
         </div>
         <div class="form-group">
           <div class="form-check" style="float: left;">
             <input class="form-check-input" type="checkbox" value="checked" id="invalidCheck" required>
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
         transition: all 0.2s;">Sign In</button><hr>
       </form>
       <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
       <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
       <div class="accnt-link">
       <p><a href="{{ route('candidate.register') }}">New to Account? Create Account Here</a></p>
   </div>
       
       <hr>
       <div class="Sign-footer">
       <p>By creating an account, you agree to Indeed's Terms of Service, Cookie Policy and Privacy Policy. You consent to receiving marketing messages from Indeed and may opt out from receiving such messages by following the unsubscribe link in our messages, or as detailed in our terms.</p>
     </div>
 
     </div>
 </div>
</div>
@endsection

