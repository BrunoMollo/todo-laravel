<x-layout>
    <ul>
        @foreach($todos_list as $todo)
        <li>{{$todo->desc}}</li>
        @endforeach
    </ul>
</x-layout>