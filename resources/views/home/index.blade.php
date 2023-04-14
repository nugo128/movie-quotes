<x-layout>
<section class="flex flex-col gap-10 justify-center align-middle w-screen items-center">
    @if ($quote)
    <div class="w-1/2 flex justify-center">
    <img src="{{ str_contains($quote->thumbnail, 'https') ? $quote->thumbnail : '/storage/' . $quote->thumbnail }}" alt="Thumbnail">

    </div>
    <div><p class="text-white text-4xl">"{{$quote->quote}}"</p></div>
    <div><a href="{{ route('films.index', ['id' => $quote->movie->id]) }}" class="underline text-white text-4xl mt-12">{{$quote->movie->title}}</a></div> 
    @else
    <h2 class="text-2xl text-white">{{__('nav.no_movies')}}</h2>       
    @endif
</section>

</x-layout>
