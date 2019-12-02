@extends('layout/layout')
@section('content')
  <div class="container-fluid  w-25 h-50">

<form method="post" action="{{route('employee.update',['id'=>$employees->id])}}">
    @csrf  
    <h1>Please Enter Employee Info</h1>
   
  <div class="form-group">
    <label for="name">Name:</label>
    <input  type="text" class="form-control" name="name" required value="{{$employees->name}}">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" name="address"value="{{$employees->address}}">
  </div>
  <div class="form-group">
    <label for="phone">Contact Number:</label>
    <input  type="text" class="form-control" name="phone"value="{{$employees->phone}}">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email"value="{{$employees->email}}">
  </div>
  <div class="form-group">
    <label for="cnic">CNIC:</label>
    <input type="text" class="form-control" name="cnic"value="{{$employees->cnic}}">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
    
@endsection