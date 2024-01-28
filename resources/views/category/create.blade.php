<x-layout>
    <h1>Create a Category</h1>
    <form method="post" action={{$action}}>
        @csrf

        <label for="name"></label>
        <input type="text" name="name" id="name">
        <button type="submit">Create</button>

    </form>
</x-layout>
