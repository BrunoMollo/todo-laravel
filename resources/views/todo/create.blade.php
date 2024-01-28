<x-layout>
    <h1>Create a Todo</h1>
    <form method="post" action={{$action}}>
        @csrf
        <label for="desc"></label>
        <input type="text" name="desc" id="desc">
        <button type="submit">Create</button>

    </form>
</x-layout>
