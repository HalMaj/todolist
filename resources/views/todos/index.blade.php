@extends('layouts.app')

@section('content')

<br>
<h1> Todos </h1>
<br>

@if(count($todos) > 0)
   
   @foreach($todos as $todo)
       
       <div class="well">

       <h3> <a href="/todolist/public/todo/{{$todo->id}}"> {{$todo->text}} <span class="btn btn-danger"> {{$todo->due}} </span> </a> </h3>

       </div>

       <br>

   @endforeach

@endif

@endsection