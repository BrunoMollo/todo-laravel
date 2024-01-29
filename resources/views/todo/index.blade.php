@extends('layouts.app')

@section('content')

<a href="todo/create">Create todo</a>
<ul>
    @foreach($todos_list as $todo)
    <li>{{$todo->desc}} ({{$todo->category->name}})</li>
    @endforeach
</ul>

@endsection
