@extends('layout')

@section('content')

	<h1>Новое задание</h1>

	<form method="POST" action="/tasks">
		@csrf
		<div>
			<label for="task">Введите дату:</label>
			<input type="date" name="date" placeholder="Enter date" required="">
		</div>
		<div>
			<label for="taskName">Задание:</label>
			<input type="text" name="description" placeholder="Enter task" required="" />
		</div>
		<div>
			<input type="submit" name="submit" value="Добавить задание">
		</div>
	</form>

	<p>
		<a href="/">Список заданий</a>
	</p>

@endsection