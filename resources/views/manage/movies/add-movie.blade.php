<x-layout name="{{$user->name}}">
    <div class="flex flex-col w-full items-center mt-28">

    <form action="{{ route('movies.store') }}" method="post" class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">

            @csrf
            <label for="title_en" class="block text-gray-700 mb-2">title_en</label>
            <input type="text" name="title_en" id="title_en" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
            @error('title_en')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            <label for="title_ka" class="block text-gray-700 mb-2">title_ka</label>
            <input type="text" name="title_ka" id="title_ka" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
            @error('title_ka')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            <button type="submit" class="mt-4 w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Movie</button>
        </form>
    </div>
</x-layout>
