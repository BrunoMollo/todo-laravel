<script>
    function open() {
        const dialog = document.querySelector("dialog")
        setTimeout(() => dialog.showModal(), 5)
    }

    function close() {
        const dialog = document.querySelector("dialog")
        setTimeout(() => dialog.close(), 5)
    }
</script>

<x-layout>
    @fragment('category-list')
    <ul id="category-list">
        @foreach($category_list as $category)
        <li>{{$category->name}}</li>
        <button hx-get="/category/{{$category->id}}/edit" hx-swap="innerHTML" hx-target="#edit-category"
            hx-on::after-request="open()">edit</button>

        @endforeach
    </ul>
    @endfragment
    <dialog>
        <button type="button" onclick="close()">X</button>
        <div id="edit-category">
            <span>Loading</span>
        </div>
    </dialog>
</x-layout>
