@extends('layout.app')

@section('content')


<div class="indexpg">
<div>
<a href="/" class="smallbtn indbtn">Home</a>
</div>
  <div class="design">
  </div>
  <div id="contractorlogin" class="indheading">
    <h2>Contractor Login </h2>

  </div>
  <div class="form">
<form action="{{ route('auth.contrcheck') }}" method="post">
  @if (Session::get('fail'))
  <div class="alert alert-danger">
    {{ Session::get('fail') }}
  </div>
    
  @endif
  @if(Session::get('Incorrect'))
  <div class="alert alert-danger">
    {{ Session::get('Incorrect') }}
  </div>
  @endif
  @csrf
    <div class="mb-3 ">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name='email'>
    </div>
    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
      
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
    <div> 
    <button style="margin:30px 0px 0px 0px;"type="submit" class="btn btn-primary">Submit</button>
    <div>
  </form>
</div>
</div>

@endsection