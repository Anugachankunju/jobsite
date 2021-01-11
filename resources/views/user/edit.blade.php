@extends('layouts.app')
@section('content')





<body class="bg-light">
<div class="nav-scroller bg-white shadow-sm">
<nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link " aria-current="page" href="{{ route('user.index',  Auth::id()) }}">Dashboard</a>
    <a class="nav-link active" href="{{ route('user.edit',  Auth::id()) }}">
      Account Details
     
    </a>
    <a class="nav-link" href="#">Job History</a>
  
    
  </nav>
</div>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
  
    <div class="lh-1">
    <h1 class="h2 mb-0 text-white lh-1">{{ Auth::user()->name}}</h1>
      <small>Dubai</small><br>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Profile Details</h6>
    <div class="d-flex text-muted pt-3">
     
    {!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}

    <div class="card-body">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                       @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
                @endif
  <div class="row">
    <div class="col-6">
    <label for="inputEmail4">Name</label>
    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'id' => 'name')) !!}
    </div>
    <div class="col-6">
    <label for="inputEmail4">Email</label>
    {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control', 'id' => 'email')) !!}
    </div>
    <div class="col-6">
    <label for="inputEmail4">Mobile Number</label>
    {!! Form::number('mobile', null, array('placeholder' => 'Mobile','class' => 'form-control', 'id' => 'mobile')) !!}
    </div>
    <div class="col-6">
    <label for="inputEmail4">Password</label>
    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
    </div>
    <div class="col-6">
    <label for="inputEmail4">Confirm Password</label>
    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
    </div>
    
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  {!! Form::close() !!}


    </div>
    
   
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Basic Details</h6>
    <div class="d-flex text-muted pt-3">
     
    {!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}

    <div class="card-body">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                       @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
                @endif
  <div class="row">
    <div class="col-6">
    <label for="inputEmail4">Qualifications</label>
    <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Above Graduation</option>
        <option> Graduation</option>
        <option>Under Graduation</option>
       
      </select>
    </div>
    <div class="col-6">
    <label for="inputEmail4">Year Of Experince</label>
    <select id="inputState" class="form-control">
    <option selected>Choose...</option>
        <option>Fresher</option>
        <option> 1-3</option>
        <option>3-5</option>
        <option>Above 5</option>
       
      </select>
    </div>
    <div class="col-6">
    <label for="inputEmail4">Previous Job Title</label>
    {!! Form::text('Job', null, array('placeholder' => 'Previous Job Title','class' => 'form-control', 'id' => 'mobile')) !!}
    </div>
    <div class="col-6">
    <label for="inputEmail4">Previous Salary</label>
    {!! Form::text('salary', null, array('placeholder' => 'Previous Salary','class' => 'form-control', 'id' => 'mobile')) !!}
    </div>
    <div class="col-6">
    <label for="inputEmail4">Expected Salary</label>
    {!! Form::text('Exsalary', null, array('placeholder' => 'Expected Salary','class' => 'form-control', 'id' => 'mobile')) !!}
    </div>
    <div class="col-6">
    <label for="inputEmail4">Realted Skills</label>
    {!! Form::text('Job', null, array('placeholder' => 'Realted Skills','class' => 'form-control', 'id' => 'mobile')) !!}
    </div>
    
  </div>

  
    
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  {!! Form::close() !!}


    </div>
    
   
  </div>
</main>
</body>

@endsection
  