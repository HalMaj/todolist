@extends('layouts.app')

@section('content')

<br>
  <a class="btn btn-light" href="/todolist/public/"> Go Back </a>
<br><br>
 
 <h3><a href="/todolist/public/todo/{{$todo->id}}"> {{$todo->text}} </a></h3>
          
 <h5><span class="btn btn-danger"> {{$todo->due}} </span></h5>
 <hr>
 
 <p> {{$todo->body}} </p>
 <br><br>
 
  <a class="btn btn-outline-success" href="/todolist/public/todo/{{$todo->id}}/edit" > Edit </a>

 {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
      
      {{ Form::hidden('_method', 'DELETE') }} 
      
      {{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger']) }} 

      <br>
 
 {!! Form::close() !!}


@endsection