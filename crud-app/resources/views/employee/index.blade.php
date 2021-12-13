@extends('app')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manage Employees</h2>
        </div>
        <div class="pull-right mb-2">
            <a class="btn btn-success" href="{{ route('create')}}">Add New Employee</a>
        </div>
    </div>
</div>
@if(session('message') !== null)
<div class="alert alert-success">
    <p>{{ session('message') }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th width="280px">Action</th>
    </tr>
    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->address }}</td>
        <td>{{ $employee->phone }}</td>
        <td>
            <div class="row">
                <div class="col text-center">
                    <a href="{{ route('edit', $employee->id) }}" class="btn btn-primary">Edit</a>   
                </div>
                <div class="col text-center">
                    <form action="{{ route('destroy', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>      
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</table>  
<div>
    {{ $employees->links('pagination::bootstrap-4') }}
</div> 
@endsection