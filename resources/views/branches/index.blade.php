@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Branches</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('branches.create') }}"> Add Branch</a>
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
            <th>Location</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($branches as $branch)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $branch->name}}</td>
        <td>{{ $branch->location}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('branches.show',$branch->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('branches.edit',$branch->id) }}">Edit</a>

 
            {!! Form::open(['method' => 'DELETE','route' => ['branches.destroy', $branch->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $branches->links() !!}

@endsection