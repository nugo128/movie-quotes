<x-layout>
<section class="flex flex-col gap-10 justify-center align-middle w-screen items-center">
    <div class="w-1/2">
    <img src="{{$quote->thumbnail}}"></img>
    </div>
    <div><p class="text-white text-4xl">"{{$quote->quote}}"</p></div>
    <div><p class="underline text-white text-4xl mt-12">{{$movie->title}}</p></div>
</section>
</x-layout>
