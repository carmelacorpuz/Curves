@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>NEW BRANCH</h2>
            </div>

    {!! Form::open(array('route' => 'branches.store','method'=>'POST')) !!}
         @include('branches.form')
    {!! Form::close() !!}

            <!-- <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('branches.index') }}"> Back</a>
            </div> -->
        </div>
    </div>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection