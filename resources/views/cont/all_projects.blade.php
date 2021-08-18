
@extends('layout.contractorsidebar')

@section('content')

<div class="allprojects">
@foreach ($projects as $project)
<div class="project">
  <h2>{{     $project->project_name
    }}</h2>
    <p class="status">Status</p>
<a class="smallbtnproj" href="projects/{{ $project->id }}/edit">Edit </a>
<a class="smallbtnproj" href="projects/{{ $project->id }}">Details </a>




  @if($project->project_status==1)
  <p class="statusvalue statusvaluecolor" >Complete </p>

    <form action="/status/complete/{{$project->id}}" method="post">
    @csrf
    @method("PUT")

  <button type="submit" id="mark-complete" class="smallbtnproj completebtn">Completed</button>
  </form>

  
  @else
  <p class="statusvalue" >In progress </p>

    <form action="/status/complete/{{ $project->id}}" method="post">
    @csrf
    @method("PUT")

  <button type="submit" id="mark-complete" class="smallbtnproj inprogressbtn">Mark Complete</button>
  </form>
  

@endif



<form action="/projects/{{ $project->id }}" method="POST">
    @csrf
    @method('delete')
    <button class="smallbtnproj delbtn"type="submit">Delete</button>
</form>
</div>
@endforeach

</div>

@endsection
