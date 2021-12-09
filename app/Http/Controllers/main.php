<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Support\Validate;
use Illuminate\Http\Request;
use App\Models\test3;

use Illuminate\Support\Facades\DB;
class main extends Controller
{
    public function add()
    {
      return view("Assignment.add");
    }
   


    public function sendpost(Request $req)
     {
       
      $Validated=$req->validate([
        'firstname'=>'required|min:5|max:50',
        'lastname'=>'required|min:5|max:50',
        'email'=>'required',
        'age'=>'required',
        'gender'=>'required',
        'city'=>'required',
        'number'=>'required',
        'status'=>'required',
        'image'=>'required',
      ]
   );
   if($Validated)
   {
     $file=$req->file('image');
    $dest=public_path('/uploads');
    $filename="Image-".rand()."-".time().".".$file->extension();
    $file->move(public_path('/uploads'),$filename);
    DB::table('test3s')->insert([
      'First_name'=>$req->firstname,
       'Last_name'=>$req->lastname,
       'Email'=>$req->email,
       'Mobile_num'=>$req->number,
       'city'=>$req->city,
       'gender'=>$req->gender,
       'age'=>$req->age,
       'image'=>$filename,
       'status'=>$req->status,
    ]);
   return redirect('show');
   }
   else
   {
     return back()->with("error","fill all the feilds correctlly");
   }
    
  }




  // Show Details
  public function List(Request $req)
  {
    $select=DB::table("test3s")->get()->toArray();
    return view('List',compact('select'));
  }


  //For edit
  public function update(Request $req)
  {
    $select=DB::table("test3s")->where('id',$req->id)->get()->toArray();
    return view('Assignment.Edit',compact('select'));
  }


  public function edit(Request $req)
  {
    //$userid=test3::find($id);
     $file=$req->file('image');
    $dest=public_path('/uploads');
    $filename="Image-".rand()."-".time().".".$file->extension();
    $file->move(public_path('/uploads'),$filename);
    $up=DB::table('test3s')->where('id',$req->id)->update([
      'First_name'=>$req->firstname,
       'Last_name'=>$req->lastname,
       'Email'=>$req->email,
       'Mobile_num'=>$req->number,
       'city'=>$req->city,
       'gender'=>$req->gender,
       'age'=>$req->age,
       'image'=>$filename,
       'status'=>$req->status,
    ]);
   
    if($up){
      return   redirect('show');
    }
    else
    {
     return back()->with('error',"data not updated");
    }


           
        
   
  }
  



  //For delete
  public function delete( $id)
  {
     $sel= DB::table('test3s')->where('id',$id)->delete();
    return   redirect('show');
  }




}
