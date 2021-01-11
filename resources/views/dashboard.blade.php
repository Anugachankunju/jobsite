@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="search-heading">
                <h5>What</h5>
            </div>
                <div class="search-title">
                    <p>Job title, keywords, or company </p>
                </div>
            <div class="search-field">
               <input type="text" class="form-control" placeholder="Job Title,keywords, or company">
            </div>
        </div>
      
        <div class="col-lg-5">
            <div class="search-heading">
                <h5>Where</h5>
            </div>
                <div class="search-title">
                  <p>City, Emirate, Place or Location </p>
                </div>
                    <div class="search-field">
                     <input type="text" class="form-control" placeholder="City, Emirate, Place or Location">
                   </div>
        </div>
        
        <div class="col-lg-2">
            <div class="job-btn">
                <button type="button" class="btn btn-primary">Find Jobs</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
           <div class="search-field">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Canidates</button>
          </div>

        </div>
      
        <div class="col-lg-5">
            <div class="search-field">
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Employer Post</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h3>Popular searches</h3>
        <div class="card mb-4 box-shadow">
            <div class="card-body">
              sdsd<button type="button" class="btn btn-lg btn-block btn-outline-primary">Employer Post</button><button type="button" class="btn btn-lg btn-block btn-outline-primary">Employer Post</button><button type="button" class="btn btn-lg btn-block btn-outline-primary">Employer Post</button><button type="button" class="btn btn-lg btn-block btn-outline-primary">Employer Post</button>
            </div>
        </div>
    </div>
</div>

@endsection
  