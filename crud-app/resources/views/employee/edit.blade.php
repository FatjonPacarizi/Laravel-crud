@extends('app')
@section('content')
<div class="row mb-2">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Employee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <li>{{ $errors->first() }}</li>
        </ul>
    </div>
@endif
<form action="{{ route('update', $employee->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input class="form-control" type="text" name="name" value="{{ $employee->name }}" placeholder="e.g. Fatjon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input class="form-control" type="text" name="email" value="{{ $employee->email }}" placeholder="e.g. user@gmail.com">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input class="form-control" type="text" name="address" value="{{ $employee->address }}" placeholder="e.g. Kosovo, Prishtina">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input class="form-control" type="text" name="phone" value="{{ $employee->phone }}" placeholder="e.g. 38312345678">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </div>
</form>
@endsection