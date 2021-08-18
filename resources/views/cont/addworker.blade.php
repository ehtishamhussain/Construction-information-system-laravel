@extends('layout.app')
@section('content')
<main class="workers-page">
<form class="materialsform"action="{{ route('workers.save') }} " method="post">
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
  
    <h2> Add Worker</h2>
    <div class="container">
    <div class="row">
     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label for="name"class="form-label formheadings">Worker Name</label> 
    
    <input class="form-control formlength"type="text" id="name" name="name" placeholder="Full name">
    <p class="text-danger">@error('name'){{ $message }} @enderror</p>
    </div>

    <input type="hidden"id='projects_id'name='projects_id'value='{{ $id }}'>
        
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings"for="father_name">Father Name</label> 
    <input class="form-control formlength"type="text" id=father_name" name="father_name" >
    <p class="text-danger">@error('father_name'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings"for="address">Address </label> 
    
    
    <input class="form-control formlength"type="text" id="address" name="address" >
    <p class="text-danger">@error('address'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<label class="form-label formheadings"for="phone">Phone</label> 
    
    
    <input class="form-control formlength"type="text" id="phone" name="phone" placeholder="No of sacks, boxes etc">
    <p class="text-danger">@error('phone'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings"for="expertise">Expertise </label> 
    
    
    <input class="form-control formlength"type="text" id="expertise" name="expertise" >
    <p class="text-danger">@error('expertise'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings" for="started_working">Starting Date of Work </label> 
    
    
    <input class="form-control formlength"type="date" id="started_working" name="started_working" >
    <p class="text-danger">@error('started_working'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <button type="submit"class="btn primary">Add</button>
    </div>
    </form>
</div>
</div>
</main>
    
    @endsection
 