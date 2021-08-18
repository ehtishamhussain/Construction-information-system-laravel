@extends('layout.contractorsidebar')

@section('content')
<div class="container">
  <div class="row  ">
    <div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">
<a id="detailu"class="details-buttons " href="/register/{{ $id }}">
      <div style="display: flex;" >
        <i style="margin: 5px 5px 0 0; "class="fa fa-plus"></i>
 <i style="margin: 5px 5px 0 0; "class="fa fa-user fa-1x"></i><h4>Add user</h4>
</div>
</a>
</div>
<div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">
  <a id="detailm"class="details-buttons"href="/Add-material/{{ $id }}">
<div style="display: flex;">
<i style="margin: 5px 5px 0 0; "class="fas fa-box-open"></i><h4>Add Material</h4>
</div>
</a>
</div>
<div class="col-lg-4 col-sm-12 col-md-6 col-xl-4">
  <a id="detailw"class="details-buttons "href="/Add-worker/{{ $id }}">
<div style="display:flex;">
<i  style="margin: 5px 5px 0 0; "class="fas fa-hard-hat"></i><h4>Add Worker</h4>
</div>
</a>
</div>
</div>
</div>





<div class="containingtables">
<div class="tab">
    <button class="tablinks" onclick="opentable(event, 'Users')">Users</button>
    <button id="defaultOpen"class="tablinks" onclick="opentable(event, 'Materials')">Materials</button>
    <button class="tablinks" onclick="opentable(event, 'Workers')">Workers</button>
  </div>

  
  <!-- Tab content -->
  <div id="Users" class="tabcontent">
    <table id="u-table"class="table display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Names</th>
                <th>Emails</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($project->projectusers as $projectuser )
                
                
                    
                
            <tr>
                
                <td scope="row">{{ $projectuser->id }}</td>
                
                
                <td>{{$projectuser->name}}</td>
                <td>{{$projectuser->email}}</td>
                <td style="display: flex;"><button style="margin: 0px 5px 0 0;
                  border-radius:20px;"   type="button" class="btn-primary edit" data-bs-toggle="modal" data-bs-target="#editusermodal">
                  Edit
                </button>
                <form action="/delete/users/row/{{ $projectuser->id }}" method="post">
                  @csrf
                  @method('delete')
              <button class="btn-primary table-buttons " type="submit">Delete</button>
                </form>
                </td>
            </tr>
            
            
            @endforeach
        </tbody>
    </table>
  </div>
  
  <div id="Materials" class="tabcontent">
    <table id="materials-table" class="table display ">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Material</th>
                <th>Material Brand</th>
                <th>Material Supplier</th>
                <th>Material Quantity</th>
                <th>Material Price(Rs)</th>
                <th>Added On </th>
                <th>Actions </th>
    
            </tr>
            </thead>
            <tbody>
                @foreach ( $project->materials as $material )
                    
                <tr>
                    <td scope="row">{{ $material->id }}</td>
                    <td>{{ $material->material }}</td>
                    <td>{{ $material->material_brand }}</td>
                    <td>{{ $material->material_supplier }}</td>
                    <td>{{ $material->material_quantity }}</td>
                    <td>{{ $material->material_price }} </td>
                    
                    <td>{{ $material->added_on }}</td>
                    <td style="display: flex;"><button style="margin: 0px 5px 0 0;
                      border-radius:20px;" type="button" class="btn-primary edit" data-bs-toggle="modal" data-bs-target="#materialsmodal">
                      Edit
                    </button>
                    <form action="/delete/materials/row/{{ $material->id }}" method="post">
                      @csrf
                      @method('delete')
                  <button class="btn-primary table-buttons"type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
  </div>
 
  
  <div id="Workers" class="tabcontent">
    <table id="w-table" class="table table-striped table-inverse table-responsive display">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Names</th>
                <th>Father Names</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Expertise</th>
                <th>Joined on</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($project->workers as $worker )
                    
                <tr>
                    <td scope="row">{{ $worker->id }}</td>
                    <td >{{ $worker->name }}</td>
                    <td>{{ $worker->father_name }}</td>
                    <td>{{ $worker->address }}</td>
                    <td >{{ $worker->phone }}</td>
                    <td>{{ $worker->expertise }}</td>
                    <td>{{ $worker->started_working }}</td>
                    
                    <td style="display: flex;">
                        
                        <button style="margin: 0px 5px 0 0;
                        border-radius:20px;"  type="button" class="btn-primary edit" data-bs-toggle="modal" data-bs-target="#workerseditmodal">
                            Edit
                          </button>
                          <form action="/delete-row/{{ $worker->id }}" method="post">
                            @csrf
                            @method('delete')
                        <button class="btn-primary table-buttons" type="submit">Delete</button>
                          </form>
                    </td>
    
                    
                </tr>
                @endforeach

            </tbody>
    </table>
  </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editusermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="/edit/users/row" method="post">
        @csrf
        @method('PUT')

        <label class="form-label"for="username">Username </label> 
        <input type="hidden" class="update" name="id" value="" >
        <input class="form-control" type="text" id="username" name="name" placeholder="Full name">
        
        <input type="hidden"id='projects_id'name='projects_id'value='{{ $id }}'>
            
        
        <label class="form-label"for="Email">Email</label> 
        <input class="form-control" type="email" id="Email" name="email" placeholder="example@xyz" >
        
    
        
        <button class="btn btn-primary" type="submit">Update </button>
        </form>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="workerseditmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/edit/workers/row" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" class="update" name="id" value="" >
            <label class="form-label" for="name">Name</label> 
        
        <input class="form-control" type="text" id="name"  name="name" placeholder="Full name" >
        <label class="form-label"for="father_name">Father Name </label> 
        
        <input class="form-control" type="text" id="father_name" name="father_name"  >
        <label class="form-label"for="address">Address </label> 
    
    
    <input class="form-control" type="text" id="address" name="address" >
    <label class="form-label"for="phone">Phone</label> 
    
    
    <input class="form-control"  type="text" id="phone" name="phone" >
    <label class="form-label"for="expertise">Expertise </label> 
    
    
    <input class="form-control" type="text" id="expertise" name="expertise" >

<label class="form-label"for="started_working">Starting Date of Work </label> 
    
    
    <input  class="form-control" type="date" id="started_working" name="started_working" >

        
        <button class="btn btn-primary" type="submit">Submit </button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
        </div>
      </div>
    </div>
  </div>
  <!--Edit modal end for workers table-->


  <!--Modal for materials table-->
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="materialsmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/edit/materials/row" method="post">
          @csrf
          @method('PUT')   
        <label class="form-label" for="material">Material </label> 
        <input class="form-control" type="text" id="material" name="material" placeholder="e.g Cement,Sand etc">
        <input type="hidden" class="update" name="id" value="" >
        <label class="form-label" for="material_brand">Material Brand</label> 
        <input class="form-control" type="text" id="material-brand" name="material_brand" >
        <label class="form-label"for="material_supplier">Material Supplier </label> 
        <input class="form-control"type="text" id="material_supplier" name="material_supplier" >
        <label class="form-label"for="material_quantity">Material Quantity </label> 
        <input class="form-control"type="text" id="material_quantity" name="material_quantity" placeholder="No of sacks, boxes etc">
        <label class="form-label" for="material_price">Material Price </label> 
        <input class="form-control"type="text" id="material_price" name="material_price" >
        <label class="form-label"for="added_on">Date </label> 
        <input class="form-control"type="date" id="added_on" name="added_on" >
        
        <button class="btn btn-primary" type="submit">Submit </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<script>document.getElementById('defaultOpen').click();</script>

<script>
  edits=document.getElementsByClassName('edit');
  Array.from(edits).forEach((element)=>{
    element.addEventListener("click",(e)=>{
      tr=e.target.parentNode.parentNode;
      
      var id=tr.getElementsByTagName("td")[0].innerText;
      var input=document.getElementsByClassName('update');
      Array.from(input).forEach((element)=>{
        element.value=id;
        
      })
    })
  });
  </script>
  <script>
    $(document).ready( function () {
    $('table.display').DataTable();
} );
    </script>
  
     
         
@endsection
<!-- Button trigger modal -->


<!-- Modal -->
