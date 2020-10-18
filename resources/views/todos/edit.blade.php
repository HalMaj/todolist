@extends('layouts.app')

@section('content')

 <br>
 <a type="button" class="btn btn-light" href="/todolist/public/todo/{{$todo->id}}"> Go Back </a>
 <br>
   
   <br>
   <h1>Edit Todo</h1>
   <br>

   {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
      
      {{ Form::bsText('text', $todo->text) }}
      
      {{ Form::bsTextArea('body', $todo->body) }}
      
      {{ Form::bsText('due', $todo->due) }}
      
      {{ Form::hidden('_method', 'PUT') }} <br>
     
      {{ Form::bsSubmit('Edit', ['class' => 'btn btn-primary']) }} <br>
  
   {!! Form::close() !!}

@endsection