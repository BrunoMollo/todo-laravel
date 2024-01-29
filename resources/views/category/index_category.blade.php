<x-layout>
    <a href="category/create">Create category</a>
    <ul id="category-list">
        @foreach($category_list as $category)
        <li>{{$category->name}}</li>
        <a href="/category/{{$category->id}}/edit">edit</a>
        @endforeach
    </ul>
</x-layout>
