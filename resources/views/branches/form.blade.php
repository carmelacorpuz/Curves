<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Location:</strong>
            {!! Form::textarea('location', null, array('placeholder' => 'Location','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
</div> 
<div class="row"> 
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Registration Date:</strong>
            {!! Form::text('registration_date', null, array('placeholder' => 'Registration Date','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>License Number:</strong>
            {!! Form::text('license_number', null, array('placeholder' => 'License Number','class' => 'form-control')) !!}
        </div>
    </div>
</div>
<div class="row"> 
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Branch Owner:</strong>
            {!! Form::text('branch_owner', null, array('placeholder' => 'Branch Owner','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Contact Number:</strong>
            {!! Form::text('contact_number', null, array('placeholder' => 'Contact Number','class' => 'form-control')) !!}
        </div>
    </div>
</div>
<div class="row"> 
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Email Address:</strong>
            {!! Form::text('email_address', null, array('placeholder' => 'email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Facebook Link:</strong>
            {!! Form::text('facebook_link', null, array('placeholder' => 'facebook','class' => 'form-control')) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Photo:</strong>
            {!! Form::text('photo', null, array('placeholder' => 'photo','class' => 'form-control')) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <a class="btn btn-primary" href="{{ route('branches.index') }}"> Back</a>
    </div>
</div>

