@extends('layouts.app')
@section('content')





<body class="bg-light">
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="{{ route('user.index',  Auth::id()) }}">Dashboard</a>
    <a class="nav-link" href="{{ route('user.edit',  Auth::id()) }}">
      Account Details
     
    </a>
    <a class="nav-link" href="#">Job History</a>
  
    
  </nav>
</div>

<main class="container">

  


<div class="row">
  <div class="col-sm-8">
  
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
   
          <div class="lh-1">
      <h1 class="h2 mb-0 text-white lh-1">{{ Auth::user()->name}}</h1>
      <small>Dubai</small><br>
      <div style="padding-left: 204%;margin-top: -51px;"> 
              <button type="button" class="btn btn-primary " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Email Not Verified
              </button>
       </div>
    </div>
  
  </div>
              <div class="alert alert-info" role="alert">
                              <h6>You can now apply online</h6>
                              <p>You've completed a basic profile. Add more details as your skill and experience grow.
                                  </p>
            </div>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Resume</h6>
    <div class="d-flex text-muted pt-3">
    
    <embed src="{{ asset(auth()->user()->Cvs) }}" width="100%" height="600" alt="pdf" />

 






    
    </div><br> 
    <a href="{{ route('user.edit',  Auth::id()) }}">
    <button type="button" class="btn btn-primary " >Change resume</button></a>
    
    
    
  </div>
  
  
  </div>
  <div class="col-sm-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
       <h6 class="border-bottom pb-2 mb-0">Skills</h6>
        <div class="d-flex text-muted pt-3">

        </div>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
       <h6 class="border-bottom pb-2 mb-0">Latest Experience</h6>
        <div class="d-flex text-muted pt-3">

        </div>
    </div>


    <div class="my-3 p-3 bg-white rounded shadow-sm">
       <h6 class="border-bottom pb-2 mb-0">Last Updated Date</h6>
        <div class="d-flex text-muted pt-3">
        {{ Auth::user()->	updated_at}}



        </div>
    </div>
  
  
  
  </div>
  
</div>

</main>
</body>

@endsection
  