<x-layout >
    <div class="flex flex-col w-full items-center mt-28">
        <div class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">
            <h1 class="text-center text-2xl font-bold mb-6">{{__('admin.edit_quote')}}: {{$quote->quote}}</h1>
            <form action="{{ route('quotes.update', ['quote' => $quote->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="quote_en" class="block text-gray-700 mb-2">{{__('admin.quote_en')}}</label>
                    <input type="text" name="quote_en" id="quote_en" value="{{ $quote->getTranslation('quote', 'en') }}" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                    @error('quote_en')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.quote_req_en')}}</p>
                    @enderror
                    <label for="quote_ka" class="block text-gray-700 mb-2">{{__('admin.quote_ka')}}</label>
                    <input type="text" name="quote_ka" id="quote_ka" value="{{ $quote->getTranslation('quote', 'ka') }}" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                    @error('quote_ka')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.quote_req_ka')}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="movie_id" class="block text-gray-700 mb-2">{{__('admin.movie')}}</label>
                    <select name="movie_id" id="movie_id" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                        @foreach($movies as $movie)
                            <option value="{{$movie->id}}" @if($movie->id == $quote->movie_id) selected @endif>{{$movie->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                <label for="thumbnail" class="block mt-4 text-gray-700 mb-2">{{__('admin.thumbnail')}}</label>
            <input type="file" name="thumbnail" id="thumbnail" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
            @error('thumbnail')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.thumbnail_req')}}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">{{__('admin.edit_movie')}}</button>
            </form>
        </div>
    </div>
</x-layout>
