
@extends('layout.usersidebar')

@section('content')

<div class="allprojects">
    <div class=" username col-lg-3 ">
    <h3 style="    margin: 16px 0px 0px 23px;
    "> Welcome {{ $Loggeduserinfo['name'] }} !</h3></div>
    <div class="project">
      <h2>{{     $project->project_name
        }}</h2>
        <p class="status">Status</p>
    <a class="smallbtnproj" href="project-details/{{ $project->id }}">Details </a>
    
    
  @if($project->project_status==1)
  <p class="statusvalue statusvaluecolor" >Complete </p>

   
  @else
  <p class="statusvalue" >In progress </p>
  
  @endif
    </div>
</div>


@endsection