<x-layout name="{{$user->name}}">
    <div class="flex flex-col w-full items-center mt-28">
        <form action="{{route('movies.store')}}" method="POST" class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">
            @csrf
            <label for="title" class="block text-gray-700 mb-2">Title</label>
            <input type="text" name="title" id="title" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
            <button type="submit" class="mt-4 w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Movie</button>
        </form>
    </div>
</x-layout>
