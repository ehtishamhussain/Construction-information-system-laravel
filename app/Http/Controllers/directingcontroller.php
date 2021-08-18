<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\projectusers;
use App\Models\contractors;
use Illuminate\Support\Facades\Hash;
use App\Models\materials;
use App\Models\workers;




class directingcontroller extends Controller
{   
    function home(){
        return view('cont.home');
    }
    function cont(){
        return view('cont.contractorlogin');
    }
    function userslog(){
        return view('/cont/userslogin');
    }
    function conthome(){
        $no_of_projects=projects::all()->count();
        $inprogress=projects::all()->where('project_status','0')->count();
        $completed=projects::all()->where('project_status','1')->count();
        $users=projectusers::all()->count();
        $workers=workers::all()->count();
        $expense=materials::sum('material_price');
        

        if($completed==NULL){
            $completed=0;
        }
        elseif($inprogress==NULL){
            $inprogress=0;
        }
        
        

        //foreach($projects as $project){
           // array_push($no_of_projects,$project->name);
        //
        return view ('/cont/cont-home',[
            'no_of_projects'=>$no_of_projects,
            'inprogress'=>$inprogress,
            'completed'=>$completed,
            'users'=>$users,
            'workers'=>$workers,
            'expense'=>$expense
        ]);
    }
    function register($id){
        return view('cont.register',[
            'id'=>$id
        ]);
    }
    function addmaterial($id){
        return view('cont.addmaterial',[
            'id'=>$id
        ]);
    }
    function savematerial(Request $request){
        //validating
        
        $request->validate([
            
            'material'=>'required',
            'material_brand'=>'required',
            'material_supplier'=>'required',
            'material_quantity'=>'required',
            'material_price'=>'required'
        ]);

        $materials=materials::create([
            'projects_id'=>$request->input('projects_id'),
            'material'=>$request->input('material'),
            'material_brand'=>$request->input('material_brand'),
            'material_supplier'=>$request->input('material_supplier'),
            'material_quantity'=>$request->input('material_quantity'),
            'material_price'=>$request->input('material_quantity'),
            'added_on'=>$request->input('added_on')

        ]);

        
        if($materials){
            return back()->with('Success!',' Material added successfully');
        }
        else{
            return back()->with('Oops!', 'Something went wrong please try again later');
        }
        
    }
    function save(Request $request){
        //validating
        
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:projectusers',
            'password'=>'required|min:4'
        ]);

        $user=projectusers::create([
            'projects_id'=>$request->input('projects_id'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password'))
        ]);

        
        if($user){
            return back()->with('Success!',' New user registered');
        }
        else{
            return back()->with('Oops!', 'Something went wrong please try again later');
        }
        
    }
function check(Request $request){
         $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
        $userinfo=projectusers::where('email',$request->email)->first();
        if(!$userinfo){
            return back()->with('Not', 'Not recognized');
        }
        else{
            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('Loggeduser',$userinfo->id);
                return redirect('/usersdashboard');
            }
            else{
                return back()->with('Incorrect','Incorrect password');
            }
        }


    }
    function logout(){
        if(session()->has('Loggeduser')){
            session()->pull('Loggeduser');
            return redirect('/Userslogin');

        }
    }

    function dashboard(){
        $data=['Loggeduserinfo'=>projectusers::where('id',session('Loggeduser'))->first()];
       $id=$data["Loggeduserinfo"]->projects_id;
        $project=['project'=>projects::find($id)];
        return view('cont.usersdashboard',$data,$project);
    }

    //controlling contractors login and logout

    function contcheck(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);

        $contractor=contractors::where('email',$request->email)->first();
        if(!$contractor){
            return back()->with('fail',"Email not registered");
        }
        else{
            if($request->password==$contractor->password){
                $request->session()->put('contractoruser',$contractor->id);
                return redirect('cont-home');
            }
            else{
                return back()->with('Incorrect',"Incorrect password");
            }
        }
    }
    function contlogout(){
        if(session()->has('contractoruser')){
           session()->pull('contractoruser');
            return redirect('/contractorlogin');
    }

}
function addworker($id){
    return view('cont.addworker',[
        'id'=>$id
    ]);
}
function saveworker(Request $request){
    //validating
    
    $request->validate([
        
        'name'=>'required|unique:workers',
        'father_name'=>'required|unique:workers',
        'address'=>'required',
        'phone'=>'required|unique:workers',
        'expertise'=>'required',
        'started_working'=>'required'

    ]);

    $workers=workers::create([
        'projects_id'=>$request->input('projects_id'),
        'name'=>$request->input('name'),
        'father_name'=>$request->input('father_name'),
        'address'=>$request->input('address'),
        'phone'=>$request->input('phone'),
        'expertise'=>$request->input('expertise'),
        'started_working'=>$request->input('started_working')

    ]);

    
    if($workers){
        return back()->with('Success!',' Worker added successfully');
        
    }
    else{
        return back()->with('Oops!', 'Something went wrong please try again later');
    }
}
function editmaterialstable(Request $request){
    
    $id=$request->input('id');
    $data=materials::where('id',$id)->update([
        'material'=>$request->input('material'),
        'material_brand'=>$request->input('material_brand'),
        'material_supplier'=>$request->input('material_supplier'),
        'material_quantity'=>$request->input('material_quantity'),
        'material_price'=>$request->input('material_price'),
        'added_on'=>$request->input('added_on')

    ]);
    return back();

}
function editworkerstable(Request $request){
    $id=$request->input('id');
    $data=workers::where('id',$id)->update([
        'name'=>$request->input('name'),
        'father_name'=>$request->input('father_name'),
        'address'=>$request->input('address'),
        'phone'=>$request->input('phone'),
        'expertise'=>$request->input('expertise'),
        'started_working'=>$request->input('started_working')

    ]);
    return back();

}
function edituserstable(Request $request){
    
    $id=$request->input('id');
    $data=projectusers::where('id',$id)->update([
        'name'=>$request->input('name'),
        'email'=>$request->input('email')

    ]);
    return back();

}
function completeproject(Request $request,$id){
    $data=projects::find($id)->update([
        'project_status'=>'1'
    ]);
    return back();


}
function deleterow($id){
    $data=workers::find($id);
    
    $data->delete();
    return back();
}
function deletematerialsrow($id){
    $data=materials::find($id);
    
    $data->delete();
    return back();
}
function deleteusersrow($id){
    $data=projectusers::find($id);
    
    $data->delete();
    return back();
}
function projectdetails($id){
    $project=projects::find($id);
        return view('cont.userprojectdetails',[
            'project'=>$project,
            'id'=>$id
        ]);
}
}
