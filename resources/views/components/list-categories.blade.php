<ul id="category-list">
    @foreach($category_list as $category)
    <li>{{$category->name}}</li>
    <a hx-get="/category/{{$category->id}}/edit" hx-swap="innerHTML" hx-target="#edit-container">edit</a>

    @endforeach
</ul>
