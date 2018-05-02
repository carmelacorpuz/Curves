<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Keytag No:</strong>
            {!! Form::text('keytag_id', null, array('placeholder' => 'XXXXXXXX','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>First Name:</strong>
            {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
        </div>
    </div>
</div> 

<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Middle Initial:</strong>
            {!! Form::text('middle_initial', null, array('placeholder' => 'Middle Initial','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Last Name:</strong>
            {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
        </div>
    </div>
</div>

<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Address:</strong>
            {!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Nickname:</strong>
            {!! Form::text('nickname', null, array('placeholder' => 'nickname','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Birthdate:</strong>
            {!! Form::text('birthdate', null, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Landline:</strong>
            {!! Form::text('landline', null, array('placeholder' => 'XXXXXXX','class' => 'form-control')) !!}
        </div>
    </div>
</div>

<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Occupation:</strong>
            {!! Form::text('occupation', null, array('placeholder' => 'occupation','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Email Address:</strong>
            {!! Form::text('email_address', null, array('placeholder' => 'Email Address','class' => 'form-control')) !!}
        </div>
    </div>
</div>

<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Mobile Number:</strong>
            {!! Form::text('mobile_number', null, array('placeholder' => 'XXXXXXXXXXX','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Age:</strong>
            {!! Form::text('age', null, array('placeholder' => 'Age','class' => 'form-control')) !!}
        </div>
    </div>
</div>

<div class="row">    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Marital Status:</strong>
            {!! Form::text('marital_status', null, array('placeholder' => 'marital status','class' => 'form-control')) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <a class="btn btn-primary" href="{{ route('members.index') }}"> Back</a>
    </div>
</div>
 
