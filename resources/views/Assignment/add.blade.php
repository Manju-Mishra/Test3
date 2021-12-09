<!DOCTYPE html>
<html lang="en">
<head>
   @include('Assignment.head')
</head>
<body>
    <div class="container col-6 table-success font-weight-bold">
        <h2 class="font-weight-bold text-info"><i>Register</i></h2>
        @if(Session::has('error'))
          <div class="text-danger font-weight-bold ">{{Session::get('error')}}</div>
          @endif
       <form method="post" action="{{url('/sendpost')}}" enctype="multipart/form-data">
          @csrf()
          
       <div class="form-group">
           <label>First Name</label>
           <input type="text" name="firstname" class="form-control container" placeholder="Enter first name">
           @if($errors->has('firstname'))
       <label class="text-danger  font-weight-bold col-8" >{{$errors->first('firstname')}}</label>
      @endif
         </div>
        <div class="form-group">
           <label>Last Name</label>
           <input type="text" name="lastname" class="form-control container" placeholder="enter last name">
           @if($errors->has('lastname'))
       <label class="text-danger  font-weight-bold col-8">{{$errors->first('lastname')}}</label>
      @endif
         </div>
        <div class="form-group">
           <label>Email</label>
           <input type="text" name="email" class="form-control container" placeholder="email@12gamil.com">
           @if($errors->has('email'))
       <label class="text-danger  font-weight-bold col-8" >{{$errors->first('email')}}</label>
      @endif
         </div>
        <div class="form-group">
           <label>Phone Number</label>
           <input type="text" name="number" class="form-control container" placeholder="enter contact number">
           @if($errors->has('number'))
       <label class="text-danger  font-weight-bold col-8">{{$errors->first('number')}}</label>
      @endif
         </div>
        <div class="form-group">
           <label>City</label>
           <input type="text" name="city" class="form-control container" placeholder="enter city">
           @if($errors->has('city'))
       <label class="text-danger  font-weight-bold col-8">{{$errors->first('city')}}</label>
      @endif
         </div>
        <div class="form-group">
           <label>Gender</label>
           <input type="text" name="gender" class="form-control container" placeholder="enter gender">
           @if($errors->has('gender'))
       <label class="text-danger  font-weight-bold col-8" >{{$errors->first('gender')}}</label>
      @endif
         </div>
        <div class="form-group">
           <label>Age</label>
           <input type="number" name="age" class="form-control container" placeholder="enter your age">
           @if($errors->has('age'))
           <label class="text-danger  font-weight-bold col-8" >{{$errors->first('age')}}</label>
           @endif
        </div>
        <div class="form-group">
           <label>Choose Image</label>
           <input type="file" name="image" class="form-control container" >
           @if($errors->has('image'))
           <label class="text-danger  font-weight-bold col-8" >{{$errors->first('image')}}</label>
           @endif
        </div>
        <div class="form-group">
           <label>Satus</label>
           <input type="text" name="status" class="form-control container" placeholder="enter status">
           @if($errors->has('status'))
           <label class="text-danger  font-weight-bold col-8" >{{$errors->first('status')}}</label>
           @endif
        </div><br>
        <input type="submit" name="sub" value="ADD" class="btn btn-success col-6">
       </form><br>
    </div><br><br>
</body>
</html>