<x-layout>
    <h1>Create a Category</h1>
    <form method="post" action={{$action}}>
        @csrf

        <label for="name"></label>
        @error('name')<span>Is required</span>@enderror
        <input type="text" name="name" id="name">
        <button type="submit">Create</button>

    </form>
</x-layout>
