@extends('layout.app')
@section('content')
<main class="register-page">
<form class="registerform"action="/auth/save" method="post">
    <h2>Register User </h2>
    @if (Session::get('Success!'))
        <div class="alert alert-success">
        {{ Session::get('Success!') }}
        </div>
    
    
        
    @endif
    @if (Session::get('Oops!')){
        <div class="alert alert-danger">
        {{ Session::get('Oops!') }}
        </div>
    }
    
        
    @endif
    @csrf
  

    <label for="username"class="form-label formheadings">Username </label> 
    
    <input type="text" class="form-control formlength"id="username" name="name" placeholder="Full name">
    <p class="text-danger">@error('name'){{ $message }} @enderror</p>
    <input type="hidden"id='projects_id'name='projects_id'value='{{ $id }}'>
        
    
    <label for="Email"class="form-label formheadings">Email</label> 
    <input type="email"class="form-control formlength" id="Email" name="email" placeholder="example@xyz" >
    <p class="text-danger">@error('email'){{ $message }} @enderror</p>

    <label for="Password"class="form-label formheadings">Password </label> 
    
    
    <input type="password" class="form-control formlength"id="Password" name="password" >
    <p class="text-danger">@error('password'){{ $message }} @enderror</p>

    
    <button type="submit"class="btn primary">Register </button>
    </form>
</main>
    
    @endsection