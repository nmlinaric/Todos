@extends('layout')

@section('content')

		<div class="row">

			<div class="col-md-6 offset-md-3">
				
				<form action="/create/todo" method="post">

					{{ csrf_field() }}
					<h1>My Todos</h1>
					<div class="input-group">
						<input type="text" class="form-control input-lg" name="todo"  
							placeholder="Create new todo" required>
					</div>
					<button class="btn btn-primary" type="submit" value="Submit">Submit</button>
				
				</form>

			</div>

		</div>

		<hr>

        @foreach($todos as $todo)

        {{$todo->todo}} 

        <a href="{{ route ('todo.delete', ['id' => $todo->id]) }}"
        	 class="btn btn-danger"> x </a>

        <a href="{{ route ('todo.update', ['id' => $todo->id]) }}"
        	 class="btn btn-info btn-xs"> Update </a> 

		@if(!$todo->completed)

			<a href="{{ route ('todos.completed', ['id' => $todo->id ]) }}" class="btn btn-xs btn-success"> Mark as completed</a>

		@else
			
			<span class="text-success">Completed!</span>

		@endif



        <hr>

        @endforeach

@stop