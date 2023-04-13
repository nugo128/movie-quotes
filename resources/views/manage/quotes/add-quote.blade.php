<x-layout>
    <div class="flex flex-col w-full items-center mt-28">
        <form action="{{route('quotes.store.post')}}" method="post" enctype="multipart/form-data" class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">
            @csrf
            
            
            <label for="quote_en" class="block mt-4 text-gray-700 mb-2">Quote_en</label>
            <textarea name="quote_en" id="quote_en" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500"></textarea>
            @error('quote_en')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.quote_req_en')}}</p>
                    @enderror
            <label for="quote_ka" class="block mt-4 text-gray-700 mb-2">Quote_ka</label>
            <textarea name="quote_ka" id="quote_ka" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500"></textarea>
            @error('quote_ka')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.quote_req_ka')}}</p>
                    @enderror
            <label for="movie_id" class="block mt-4 text-gray-700 mb-2">{{__('admin.movie')}}</label>
            <select name="movie_id" id="movie_id" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                @foreach ($movie as $movies)
                    <option value="{{$movies->id}}">{{$movies->title}}</option>
                @endforeach
            </select>
            @error('movie_id')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            
            <label for="thumbnail" class="block mt-4 text-gray-700 mb-2">{{__('admin.thumbnail')}}</label>
            <input type="file" name="thumbnail" id="thumbnail" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
            @error('thumbnail')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.thumbnail_req')}}</p>
                    @enderror
            <button type="submit" class="mt-4 w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">{{__('admin.add_q')}}</button>
        </form>
    </div>
</x-layout>
