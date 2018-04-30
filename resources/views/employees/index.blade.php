@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employees</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Add Employee</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email Address</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($employees as $employee)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $employee->name}}</td>
        <td>{{ $employee->email_address}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>

 
            {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $employees->links() !!}

@endsection