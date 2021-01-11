
     
      <a class="p-2 text-dark" href="#">Find Jobs</a>
      <a class="p-2 text-dark" href="#">Company Reviews</a>
      <a class="p-2 text-dark" href="#">Upload your Cv</a>
     
      <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
      <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
      <nav class="my-2 my-md-0 mr-md-3">
     
     
        @if (Auth::guest())
        
        <a class="btn btn-outline-primary" href="{{ route('Jobsite.employee.login') }}">Employers / Post Job</a>
        <a class="btn btn-outline-primary" href="{{ route('Jobsite.candidate.login') }}">Canidate Login</a>
        @else
        <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Profile Settings
  </button>
  <div class="dropdown-menu">
   
   
    <a class="dropdown-item" href="#">Profile Details</a>
    <div class="dropdown-divider">Something else here</div>
  
    <a class="dropdown-item" href="{{ route('logout') }}">Sign Out</a>
   
  </div>
</div>
       
       
        @endif
       
      </nav>
    
    </div>