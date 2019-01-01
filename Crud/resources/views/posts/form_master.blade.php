<div class="get">
<div align="center" class="row">

    <div class="col-sm-2">
        {!! form::label('naam','Naam') !!}
    </div>

    <div class="col-sm-7">
        <div class="form-group {{ $errors->has('naam') ? 'has-error' : "" }}">
            {{ Form::text('naam',NULL, ['class'=>'form-control', 'id'=>'naam', 'placeholder'=>'Name']) }}
            {{ $errors->first('naam', ':message') }}
        </div>
    </div>
</div>

<div align="center" class="row">
    <div class="col-sm-2">
        {!! form::label('adres','Adres') !!}
    </div>
    <div class="col-sm-7">
        <div class="form-group {{ $errors->has('adres') ? 'has-error' : "" }}">
            {{ Form::text('adres',NULL, ['class'=>'form-control', 'id'=>'adres', 'placeholder'=>'Adress']) }}
            {{ $errors->first('adres', ':message') }}
        </div>
    </div>
</div>

<div align="center" class="row">
    <div class="col-sm-2">
        {!! form::label('email','Email') !!}
    </div>
    <div class="col-sm-7">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
            {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email']) }}
            {{ $errors->first('email', ':message') }}
        </div>
    </div>
</div>
<div align="right" class="form-group-btn">
    {{ Form::button(isset($model)? 'Update' : 'Save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}

</div>
</div>