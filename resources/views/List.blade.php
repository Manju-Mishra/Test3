<!DOCTYPE html>
<html >
<head>
    @include('Assignment.head')
</head>
<body>
<main class=" col">
     <div class="mt-4">
        <table class="table table-hover" border=2>
            <tr>
                <td colspan="12" align="center" id="addlist" style="font-size:30px;font-weight:bold;background-color:brown"><a href="add" class="text-warning">Add</a></td>
            </tr>
            <tr>
                <td colspan="12" align="center" id="a" class="table-success" style="font-size:30px; font-weight:bold;color:brown">Details</td>
            </tr>
            <tr class="bg-dark text-light">
                <th>S.no</th>
                <th>First_name</th>
                <th>Last_name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Age</th>
                <th>Gender</th>
                <th>City</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
             @php
             $sn=1;
             @endphp
              @foreach($select as $q)
              <tr class="table-secondary">
                        <td>{{$sn}}</td>
                        <td>{{$q->First_name}}</td>
                        <td>{{$q->Last_name}}</td>
                        <td>{{$q->Email}}</td>
                        <td>{{$q->Mobile_num}}</td>
                        <td>{{$q->age}}</td>
                        <td>{{$q->gender}}</td>
                        <td>{{$q->city}}</td>
                        <td>
                            <img src="{{('/uploads/'.$q->image)}}" height="40" width="40">
                           
                        </td>
                        <td>{{$q->status}}</td>
                        <td>
                            <a href="edit/{{$q->id}}" >Edit</a>
                            <a href="del/{{$q->id}}" >Delete</a>
                        </td>
             </tr>
             @php
             $sn++;
             @endphp
            @endforeach
           
        </table>
    </div><br><br><br>
     </main>
</body>
</html>
