<x-layout name="{{auth()->check() ? $user->name: ''}}">
@if ($quote)
<section class="flex flex-col gap-10 justify-center align-middle w-screen items-center">
    @if ($movie)
    <div class="w-1/2">
    <img src="/storage/{{$quote->thumbnail}}"></img>
    </div>
    <div><p class="text-white text-4xl">"{{$quote->quote}}"</p></div>
    <div><a href="{{ route('films.index', ['id' => $movie->id]) }}" class="underline text-white text-4xl mt-12">{{$movie->title}}</a></div> 
    @else
    <h2 class="text-2xl text-white">there are no movies added yet! you can <a href="/login" class="underline">Log In</a> and add your desired movies and quotes</h2>       
    @endif
</section>
@endif
</x-layout>
