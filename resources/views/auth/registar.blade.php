@extends('layouts.app')

@section('content')
   <div class="text-center">
      <h1>Sign up</h1>
   </div>
   
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         {!! Form::open(['route' => 'signup.post']) !!}
            <div class="form-group">
               {!! Form::label('name', 'Name') !!}
               {!! Form::text('name', old('name'),['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
               {!! Form::label('email', 'Email') !!}
               {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
               {!! Form::label('password_confirmation', 'confirmation') !!}
               {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            
        {!! Form::submit('sign up', ['class' => 'but btn-primary btn-block']) !!}
     {!!Form::close() !!}            
   </div>
</div>