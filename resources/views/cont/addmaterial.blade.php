@extends('layout.app')
@section('content')
<main class="materials-page">

<form class="materialsform"action="{{ route('materials.save') }}" method="post">
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
  <h2> Add Material</h2>
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label for="material"class="form-label formheadings">Material </label> 
    
    <input class="form-control formlength"type="text" id="material" name="material" placeholder="e.g Cement,Sand etc">
    <p class="text-danger">@error('material'){{ $message }} @enderror</p>
    </div>
    <input type="hidden"id='projects_id'name='projects_id'value='{{ $id }}'>

        
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings"for="material_brand">Material Brand</label> 
    <input class="form-control formlength"type="text" id="aterial-Brand" name="material_brand" >
    <p class="text-danger">@error('material_brand'){{ $message }} @enderror</p>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings"for="material_supplier">Material Supplier </label> 
    
    
    <input class="form-control formlength"type="text" id="material_supplier" name="material_supplier" >
    <p class="text-danger">@error('material_supplier'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<label class="form-label formheadings"for="material_quantity">Material Quantity </label> 
    
    
    <input class="form-control formlength"type="text" id="material_quantity" name="material_quantity" placeholder="No of sacks, boxes etc">
    <p class="text-danger">@error('material_quantity'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings"for="material_price">Material Price </label> 
    
    
    <input class="form-control formlength"type="text" id="material_price" name="material_price" >
    <p class="text-danger">@error('material_price'){{ $message }} @enderror</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <label class="form-label formheadings"for="added_on">Date </label> 
    
    
    <input class="form-control formlength"type="date" id="added_on" name="added_on" >
    <p class="text-danger">@error('added_on'){{ $message }} @enderror</p>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <button class="btn primary"type="submit">Submit </button>
    </div>
    </div>
    </div>
    </form>
</main>
    @endsection