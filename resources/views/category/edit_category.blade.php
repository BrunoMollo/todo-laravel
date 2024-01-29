@extends('layouts.app')

@section('content')
    <div id="edit-container">
        <h1>Edit a Category</h1>
        <form action={{$action}} method="post">
            @method('PUT')
            @csrf
            <label for="name"></label>
            @error('name')<span>Is required</span>@enderror
            <input type="text" name="name" id="name" value={{$category->name}}>
            <button type="submit">Edit</button>
        </form>
    </div>
@endsection
