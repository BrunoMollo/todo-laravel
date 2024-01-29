@extends('layouts.app')

@section('content')

<h1>Create a Todo</h1>
<form method="post" action={{$action}}>
    @csrf
    @error ('desc')<span>Is required</span>@enderror
    <label for="desc"></label>
    <input type="text" name="desc" id="desc">

    <br>

    @error ('category_id')<span>Is required</span>@enderror
    <select name="category_id">
        @foreach($all_categories as $category)
        <option value={{$category->id}}>{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Create</button>
</form>

@endsection
