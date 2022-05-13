@extends('layouts/layout')

@section('title', 'Task')

@section('main')
<h2>
	{{$tasks->title}}
</h2>
<div>

	{{$tasks->description}}
</div>
<div>
	{{$tasks->created_at}}
</div>
<a href="/delete/{{$tasks->id}}">
	<button>Delete</button>
</a>
@endsection