<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Laravel</title>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="content">
            <h1 style="text-align: center"> To do List </h1> <br>
            <form  action="{{ route('createTask') }}" method="POST">
                  <div class=" row form-group">
                    <div class="col-12" style="margin-left: 5px">
                      <label for="task">&nbsp;&nbsp;&nbsp; Enter a new task:</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="task" name="task" placeholder="Enter a new task">
                    </div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary">Add Task</button>
                      <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>
                  </div>
              </form> 

              <br>

              <h2>To do list tasks</h2>
                          
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Task</th>
                    <th>Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach($tasks as $task)
                  <tr>
                    <td>{{ $task->note }}</td>
                    <td><a href="{{ route('deleteTask', ['task_id' => $task->id]) }}" class="btn btn-danger" onclick="return('Are you sure you want  delete this task?')"> Delete Task </a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>

        </div>
        </div>
    </body>
</html>
