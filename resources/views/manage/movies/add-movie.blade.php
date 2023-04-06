<x-layout name="{{$user->name}}">
    <form action="/admin/movies/create" method="post">
        @csrf
       <label for="title"></label>
       <input type="text" name="title" id="title"> 
       <button type="submit">Add Movie</button>
    </form>

</x-layout>