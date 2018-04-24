@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
    
    <div class="row">
        <a href="{{url('/admin/addbranch')}}" class="btn btn-success">Add Branch</a>
        <a href="{{url('/admin/branches')}}" class="btn btn-default">Branches</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="panel-body">
                    @component('components.who-is-logged-in')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
