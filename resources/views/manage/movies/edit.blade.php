<x-layout name="{{$user->name}}">
    <h1>edit movie : {{$movie->title}}</h1>
    <form action="/admin/movies/{{$movie->id}}" method="POST">
        
        @csrf
        @method('PATCH')
       <div><label for="title">title</label>
       <input type="text" name="title" id="title" value="{{$movie->title}}"> </div>
       <button type="submit">Edit Movie</button>
    </form>

</x-layout>