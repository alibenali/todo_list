<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
        <title>Hello, world!</title>
      </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Todo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('todo.index') }}">Todo List <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('todo.create') }}">Create task</a>
                </li>
              </ul>

            </div>
          </nav>
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                @foreach($goals as $todo)
                <div class="card">
                    <div class="card-body">
                    <p><b>Goal:</b> {{$todo->goal}}</p>
                    <p><b>Deadline:</b> {{$todo->deadline}}</p>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-primary float-right">Edit</a>
                    <form method="POST" action="{{ route('todo.destroy', $todo->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger float-right mr-2">Delete</button>
                    </form>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
