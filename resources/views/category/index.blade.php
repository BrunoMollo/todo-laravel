<x-layout>
    <ul>
        @foreach($category_list as $category)
        <li>{{$category->name}}</li>
        @endforeach
    </ul>
</x-layout>
