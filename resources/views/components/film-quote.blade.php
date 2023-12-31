@props(['quote'])
<section class="flex flex-col justify-center align-middle w-screen items-center">
    <div class="w-1/3">
    <img src="{{ str_contains($quote->thumbnail, 'https') ? $quote->thumbnail : '/storage/' . $quote->thumbnail }}" alt="Thumbnail">

    </div>
    <div class="w-1/3 px-3 py-6 bg-white border rounded-b-md "><p class="text-[#3d3b3b] text-2xl">"{{$quote->quote}}"</p></div>
    
</section>

