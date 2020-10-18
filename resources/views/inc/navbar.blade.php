
  <nav class="navbar navbar-inverse"> 
    
     <div class="container">
        
     <nav class="navbar navbar-dark bg-dark"> 
        
         <div class="navbar-header"> 

         <a class="navbar-brand" href="/todolist/public"> Todolist </a>
        
         <a class="navbar-brand" class="{{Request::is('/') ? 'active' : ''}}"> <a href="/todolist/public"> Home </a></a>

         <a class="navbar-brand" class="{{Request::is('todo/create') ? 'active' : ''}}"> <a href="/todolist/public/todo/create"> Create Todo </a></a>   

         </div>

     </nav>

     </div>
     
</nav>
