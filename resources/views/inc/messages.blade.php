@if (count($errors) > 0)
   @foreach($error->all() as $error)
      <div class="alert alert-danger">
      	{{$error}}
      </div>
   @endforeach 
@end if


@elseif(session('success'))
   <div class="alert alert-success">
   	{{session('success')}}
   </div>
@endif