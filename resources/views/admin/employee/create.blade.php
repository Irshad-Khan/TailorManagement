@extends('layout/layout')
@section('content')
<div class="container">

    <form method="post" action="{{route('employee.store')}}">
    @csrf  
    <h1>Please Enter Employee Info</h1>
   
  <div class="form-group">
    <label for="name">Name:</label>
    <input  type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="form-group">
    <label for="phone">Contact Number:</label>
    <input  type="text" class="form-control" name="phone">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="cnic">CNIC:</label>
    <input type="text" class="form-control" name="cnic">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
@stop