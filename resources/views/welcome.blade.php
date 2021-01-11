@extends('layouts.mainlandapp')
@section('content')
<section id="home-one-info" class="clearfix home-one">

<div id="banner-two" class="parallax-section">
<div class="row text-center">

<div class="col-sm-12 ">
<div class="banner">
<h1 class="title">World’s Largest Classifieds Portal </h1>
<h3>Search from over 15,00,000 classifieds & Post unlimited classifieds free!</h3>

<div class="banner-form">
<form action="#">

<div class="dropdown category-dropdown">
<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu category-change">
<li><a href="#">Fashion & Beauty</a></li>
<li><a href="#">Cars & Vehicles</a></li>
<li><a href="#">Electronics & Gedgets</a></li>
<li><a href="#">Real Estate</a></li>
<li><a href="#">Sports & Games</a></li>
</ul>
</div>
<input type="text" class="form-control" placeholder="Type Your key word">
<button type="submit" class="form-control" value="Search">Search</button>
</form>
</div>


</div>
</div>
</div>
</div>
<div class="container">
<div class="section category-ad text-center">
<ul class="category-list">
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/1.png" alt="images" class="img-fluid"></div>
<span class="category-title">Cars & Vehicles</span>
<span class="category-quantity">(1298)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/2.png" alt="images" class="img-fluid"></div>
<span class="category-title">Electrics & Gedgets</span>
<span class="category-quantity">(76212)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/3.png" alt="images" class="img-fluid"></div>
<span class="category-title">Real Estate</span>
<span class="category-quantity">(212)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/4.png" alt="images" class="img-fluid"></div>
<span class="category-title">Sports & Games</span>
<span class="category-quantity">(972)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/5.png" alt="images" class="img-fluid"></div>
<span class="category-title">Fshion & Beauty</span>
<span class="category-quantity">(1298)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/6.png" alt="images" class="img-fluid"></div>
<span class="category-title">Pets & Animals</span>
<span class="category-quantity">(76212)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/9.png" alt="images" class="img-fluid"></div>
<span class="category-title">Home Appliances</span>
<span class="category-quantity">(1298)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/10.png" alt="images" class="img-fluid"></div>
<span class="category-title">Matrimony Services</span>
<span class="category-quantity">(76212)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/11.png" alt="images" class="img-fluid"></div>
<span class="category-title">Music & Arts</span>
<span class="category-quantity">(212)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/12.png" alt="images" class="img-fluid"></div>
<span class="category-title">Miscellaneous </span>
<span class="category-quantity">(1298)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/7.png" alt="images" class="img-fluid"></div>
<span class="category-title">Job Openings </span>
<span class="category-quantity">(124)</span>
</a>
</li>
<li class="category-item">
<a href="categories.html">
<div class="category-icon"><img src="images/icon/8.png" alt="images" class="img-fluid"></div>
<span class="category-title">Books & Magazines</span>
<span class="category-quantity">(972)</span>
</a>
</li>
</ul>
</div>

<div class="section featureds">
</section>

<section id="download" class="clearfix parallax-section">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<h2>Download on App Store</h2>
</div>
</div>

<div class="row">

<div class="col-md-4">
<a href="#" class="download-app">
<img src="images/icon/16.png" alt="Image" class="img-fluid">
<span class="pull-left">
<span>available on</span>
<strong>Google Play</strong>
</span>
</a>
</div>

<div class="col-md-4">
<a href="#" class="download-app">
<img src="images/icon/17.png" alt="Image" class="img-fluid">
<span class="pull-left">
<span>available on</span>
<strong>App Store</strong>
</span>
</a>
</div>

<div class="col-md-4">
<a href="#" class="download-app">
<img src="images/icon/18.png" alt="Image" class="img-fluid">
<span class="pull-left">
<span>available on</span>
<strong>Windows Store</strong>
</span>
</a>
</div>
</div>
</div>
</section>

@endsection
  