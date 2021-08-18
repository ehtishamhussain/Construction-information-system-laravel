@extends('layout.app')
@section('content')
<main class="edit-page">
<form class="registerform"action="/projects/{{ $editrow->id }}" method="POST">
    <h2> Update Project </h2>

    @csrf
    @method('PUT')
    <label class="form-label formheadings"for="projectname">Project Name </label> 

<input class="form-control formlength" type="text" id="projectname"  name="project_name" placeholder="E.g Plaza, House, Road etc" value="{{ $editrow->project_name }}">
<label class="form-label formheadings"for="address">Address </label> 

<input class="form-control formlength" type="text" id="address" name="address" value="{{ $editrow->address }}" >
<label class="form-label formheadings"for="land_area">Land Area </label> 

<input class="form-control formlength"  type="text" id="land_area" name="land_area" placeholder="Enter in Marla" value="{{ $editrow->land_area }}" >

<button type="submit" class="btn primary">Submit </button>
</form>
</main>
@endsection
