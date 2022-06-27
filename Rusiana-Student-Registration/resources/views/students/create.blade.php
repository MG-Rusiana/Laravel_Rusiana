@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">
    <h1>Student Registration Page</h1>

    </div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}

        <label>Student ID</label></br>
        <input type="text" name="studID" id="studID" class="form-control"></br>
       
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" class="form-control"></br>
        
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" class="form-control"></br>

        <label>Middle Initial</label></br>
        <input type="text" name="MI" id="MI" class="form-control"></br>

        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>

        <label>Year Level</label></br>
        <input type="text" name="yearlevel" id="yearlevel" class="form-control"></br>

        <label>User Level</label></br>
        <input type="text" name="userlevel" id="userlevel" class="form-control"></br>

        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop