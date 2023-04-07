<x-layout name="{{auth()->check() ? $user->name: ''}}">
@if ($quote)
<section class="flex flex-col gap-10 justify-center align-middle w-screen items-center">
    <div class="w-1/2">
    <img src="{{$quote->thumbnail}}"></img>
    <p></p>
    </div>
    <div><p class="text-white text-4xl">"{{$quote->quote}}"</p></div>
    <div><a href="{{ route('films.index', ['id' => $movie->id]) }}" class="underline text-white text-4xl mt-12">{{$movie->title}}</a></div>
</section>
@endif
</x-layout>
