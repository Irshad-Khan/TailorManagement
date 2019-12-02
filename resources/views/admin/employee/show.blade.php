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
        
        <div class="table-responsive ">
              <table id="mytable" class="table table-bordred table-striped">
                   <thead>
                   
                   <th>#</th>
                   <th>Name</th>
                    
                     <th>Address</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>CNIC</th>
                      <th>Action</th>
                   </thead>
    <tbody>
    
    <tr>
    <td>{{$employees->id}}</td>
    <td>{{$employees->name}}</td>
    <td>{{$employees->address}}</td>
    <td>{{$employees->email}}</td>
    <td>{{$employees->phone}}</td>
    <td>{{$employees->cnic}}</td>
    </tr>      
    
        </tbody>
        
</table>            
        </div>
	</div>
</div>
    
@endsection
@section('javascript')
<script>
function deletionConfirm()
{
    if (!confirm('Are You Sure?'))
    {
        return false;
    }
}
</script>
@stop