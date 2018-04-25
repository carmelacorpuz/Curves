@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>

                    <div class="row">
                        <a href="{{url('/admin/branches/create')}}" class="btn btn-success">Add Branch</a>
                        <a href="{{url('/admin/branches')}}" class="btn btn-default">Branches</a>
                    </div>
 
                    <div class="panel-body">
                        @component('components.who-is-logged-in')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection