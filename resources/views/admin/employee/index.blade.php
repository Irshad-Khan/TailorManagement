@extends('layout/layout')
@section('content')
<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <div class="row">    
        <div class="col-md-6">
                <h4>Employee Records</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('employee.create')}}" class="btn btn-primary"  style="float: right;">Add New</a>
            </div>
            </div>
        
        <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                   <thead>
                   
                   <th>#</th>
                   <th>Name</th>
                    
                     <th>Address</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>CNIC</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    @foreach($employees as $key=>$value)
    <tr>
    <td>{{$key + 1}}</td>
    <td>{{$value->name}}</td>
    <td>{{$value->address}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->phone}}</td>
    <td>{{$value->cnic}}</td>
    <td>
        <a href="{{route('employee.edit',['id' => $value->id])}}" class="btn btn-primary btn-xs" >
            <span class="glyphicon glyphicon-pencil"></span>
        </a>
    </td>
    <td>
        <a href="{{route('employee.delete',['id' => $value->id])}}" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-trash"></span>
        </a>
    </td>
    </tr>      
    @endforeach
        </tbody>
        
</table>            
        </div>
	</div>
</div>
    
@endsection
