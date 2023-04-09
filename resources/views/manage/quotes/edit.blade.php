<x-layout name="{{$user->name}}">
    <div class="flex flex-col w-full items-center mt-28">
        <div class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">
            <h1 class="text-center text-2xl font-bold mb-6">Edit Movie: {{$quote->quote}}</h1>
            <form action="{{ route('quotes.update', ['quote' => $quote->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="quote" class="block text-gray-700 mb-2">quote</label>
                    <input type="text" name="quote" id="quote" value="{{$quote->quote}}" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="movie_id" class="block text-gray-700 mb-2">Movie ID</label>
                    <select name="movie_id" id="movie_id" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                        <!-- Loop through movies to generate options -->
                        @foreach($movies as $movie)
                            <option value="{{$movie->id}}" @if($movie->id == $quote->movie_id) selected @endif>{{$movie->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="thumbnail" class="block text-gray-700 mb-2">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Edit quote</button>
            </form>
        </div>
    </div>
</x-layout>
