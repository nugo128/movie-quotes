<x-layout name="{{$user->name}}">
    <div class="flex flex-col w-full items-center mt-28">
        <form action="/admin/quotes/create" method="post" enctype="multipart/form-data" class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">
            @csrf
            
            
            <label for="quote_en" class="block mt-4 text-gray-700 mb-2">Quote_en</label>
            <textarea name="quote_en" id="quote_en" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500"></textarea>
            <label for="quote_ka" class="block mt-4 text-gray-700 mb-2">Quote_ka</label>
            <textarea name="quote_ka" id="quote_ka" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500"></textarea>
            
            <label for="movie_id" class="block mt-4 text-gray-700 mb-2">movie</label>
            <select name="movie_id" id="movie_id" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                @foreach ($movie as $movies)
                    <option value="{{$movies->id}}">{{$movies->title}}</option>
                @endforeach
            </select>
            
            <label for="thumbnail" class="block mt-4 text-gray-700 mb-2">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
            
            <button type="submit" class="mt-4 w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Quote</button>
        </form>
    </div>
</x-layout>
