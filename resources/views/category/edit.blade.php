<div id="edit-container">
    <h1>Edit a Category</h1>
    <form hx-put={{$action}} hx-swap="outerHTML" hx-target="#category-list" hx-on::after-request="close()">
        @csrf
        <label for="name"></label>
        <input type="text" name="name" id="name" value={{$category->name}}>
        <button type="submit">Edit</button>
    </form>
</div>
