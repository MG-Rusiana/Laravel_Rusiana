@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Update Record Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />

        <label>Student ID</label></br>
        <input type="text" name="studID" id="studID" value="{{$students->studID}}" class="form-control"></br>
        
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" value="{{$students->lastName}}" class="form-control"></br>
       
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" value="{{$students->firstName}}" class="form-control"></br>
       
        <label>Middle Initial</label></br>
        <input type="text" name="MI" id="MI" value="{{$students->MI}}" class="form-control"></br>
       
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"></br>
      
        <label>Year Level</label></br>
        <input type="text" name="yearlevel" id="yearlevel" value="{{$students->yearlevel}}" class="form-control"></br>
       
        <label>User Level</label></br>
        <input type="text" name="userlevel" id="userlevel" value="{{$students->userlevel}}" class="form-control"></br>
       
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$students->status}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop