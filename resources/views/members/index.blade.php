@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Members</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('members.create') }}"> Add Member</a>
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
            <th>First Name</th>
            <th>Email Address</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $member->first_name}}</td>
        <td>{{ $member->email_address}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('members.show',$member->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('members.edit',$member->id) }}">Edit</a>

 
            {!! Form::open(['method' => 'DELETE','route' => ['members.destroy', $member->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $members->links() !!}

@endsection