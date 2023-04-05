<x-layout>
<section class="flex flex-col align-top w-screen items-center gap-12">
    <div><p class=" text-white text-4xl mt-12 items-start">{{$movie->title}}</p></div>
    @foreach ($quote as $quotes)
    <x-film-quote :quote="$quotes" />
    @endforeach
</section>
</x-layout>
