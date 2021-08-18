@extends('layout.app')
@section('content')
<main class="create-page">
<div class="createform"> 
    <h2> Create project </h2>
 



<form action="/projects" method="POST">
    @csrf
    <label for="projectname" class="form-label formheadings">Project Name </label> 


<input type="text" id="projectname" class="form-control formlength" name="project_name" placeholder="E.g Plaza, House, Road etc">

<label for="address" class="form-label formheadings">Address </label> 

<input type="text" id="address" class="form-control formlength"name="address" >
<label for="land_area" class="form-label formheadings">Land Area </label> 

<input type="text" id="land_area" class="form-control formlength "name="land_area" placeholder="Enter in Marla" >
<input type="hidden" name='project_status' id='project_status' value='{{ $value }}'>


<button type="submit" class="btn primary">Submit </button>
</form>
</div>
</main>
@endsection
