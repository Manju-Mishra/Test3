<!DOCTYPE html>
<html lang="en">
<head>
   @include('Assignment.head')
</head>
<body>
    <div class="container col-6 table-secondary font-weight-bold">
        <h2 class="font-weight-bold text-info"><i>Edit Details</i></h2>
        @if(Session::has('error'))
          <div class="text-danger font-weight-bold ">{{Session::get('error')}}</div>
          @endif
       <form method="post" action="/edit" enctype="multipart/form-data">
         @foreach($select as $q)
         @csrf
         <input type="hidden" name="id"value="{{$q->id}}">
       <div class="form-group">
           <label>First Name</label>
           <input type="text" name="firstname" class="form-control container" value="{{$q->First_name}}">
         </div>
        <div class="form-group">
           <label>Last Name</label>
           <input type="text" name="lastname" class="form-control container" value="{{$q->Last_name}}">
           
         </div>
        <div class="form-group">
           <label>Email</label>
           <input type="text" name="email" class="form-control container"value="{{$q->Email}}">
          
         </div>
        <div class="form-group">
           <label>Phone Number</label>
           <input type="text" name="number" class="form-control container" value="{{$q->Mobile_num}}">
          
         </div>
        <div class="form-group">
           <label>City</label>
           <input type="text" name="city" class="form-control container" value="{{$q->city}}">
           
         </div>
        <div class="form-group">
           <label>Gender</label>
           <input type="text" name="gender" class="form-control container" value="{{$q->gender}}">
           
         </div>
        <div class="form-group">
           <label>Age</label>
           <input type="number" name="age" class="form-control container" value="{{$q->age}}">
         
        </div>
        <div class="form-group">
           <label>Choose Image</label>
           <input type="file" name="image" class="form-control container" >
           <img src="{{('/uploads/'.$q->image)}}" height="60" width="60"class="mt-1 ml-2">
        </div>
        <div class="form-group">
           <label>Satus</label>
           <input type="text" name="status" class="form-control container" value="{{$q->status}}">
        </div><br>
        <input type="submit" name="sub" value="UPDATE" class="btn btn-success col-6">
        @endforeach
       </form><br>
    </div><br><br>
</body>
</html>