@extends('layout.app')
@section('content')
<script>

    $(document).ready(function(){
        $('.sidebar').click(function(){
            $('.sidebar').toggleClass('active');
            $('.sidebarbtn').toggleClass('hur');
        })
    })
    </script>



<div class="sidebar">
    <ul>
        <li><a href="/cont-home" ><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
        <!--<li><a href="" ><i class="fas fa-user"></i>Register User</a></li>-->
        <li><a href="projects/create" ><i class="fas fa-plus"></i>Create Project</a></li>
        <li><a href="/projects" ><i class="fas fa-plus"></i>Projects</a></li>
        <li><a href="{{ route('auth.contrlogout') }}"><i class="fas fa-sign-out-alt"></i>



            Logout</a></li>


    </ul>
    <button class="sidebarbtn"><span></span></button>
</div>

    <div class="cont-home-nav">
        <h2>Construction Information System </h2>
    </div>
<div class="container">
<div class="row">
    <div class=" col-4 col-md-4">
        <div class="conttileeach totalproject">
        <h3>{{ $no_of_projects }}</h3>
        <h5>Total Projects</h5>
        <i class="tileicon fas fa-list-alt fa-3x"></i>

        </div>
    </div>
    <div class=" col-4 col-md-4">
        <div class="conttileeach inprogress">
            <h3>{{ $inprogress }}</h3>
            <h5>In progress</h5>
            <i class="tileicon fas fa-sync-alt fa-3x"></i>

        </div>
    </div>
    <div class=" col-4 col-md-4 ">
        <div class="conttileeach completed">
            <h3>{{ $completed }}</h3>
        
        <h5>Completed</h5>
        <i class="tileicon fas fa-check-circle fa-3x"></i>
        </div>
    </div>
    <div class=" col-4 col-md-4  ">
        <div class="conttileeach userstile"><h3>{{ $users}}</h3>
        <h5>Users</h5>
        <i class="tileicon fas fa-users fa-3x"></i>
    </div>
    </div>
    <div class=" col-4 col-md-4  ">
        <div class="conttileeach labour">
            <h3>{{ $workers }}</h3>
        <h5>Labour</h5>
        <i class="tileicon fas fa-hard-hat fa-3x"></i>
    </div>
    </div>
    <div class=" col-4 col-md-4  ">
        <div class="conttileeach expense">
            <h3>{{ $expense }}</h3>
        <h5>Expense</h5>
        <i class="tileicon fas fa-hand-holding-usd fa-3x"></i>
    </div>
    </div>
</div>



<a href="projects/create"class="btn cont-homebtn"><i class="fas fa-plus"></i>

Create Project</a>





</div>

@endsection
