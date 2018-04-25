<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Email Address:</strong>
            {!! Form::text('email_address', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
</div> 

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
    </div>
</div>

