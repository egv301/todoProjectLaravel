@extends('layout')

@section('content')

<h1>Задания: </h1>
@if ($tasks->count())
	<table>
	<tr>
		<th>Название</th>
		<th>Дата</th>
	</tr>
	@foreach($tasks as $task)
		<tr>
			<form method="POST" action="/tasks/{{$task->id}}">

				@csrf
				@method('PATCH')

				<td>
					<input type="checkbox" name="completed" onclick="this.form.submit()" {{ $task->completed ? 'checked' : ''}}/>
					<label class=" {{ $task->completed ? 'completed' : ''  }}">{{ $task->description }}</label></td>
				<td>
					{{ $task->date }}
				</td>
			</form>
		</tr> 
	@endforeach
	</table
@else
	<p>Заданий нет</p>
@endif

<br/>
<p>
	<a href="/create">Добавить задание</a>
</p>

@endsection