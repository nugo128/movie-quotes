<x-layout>
<div class="flex flex-col w-full items-center mt-28">
        <!-- class="flex flex-col w-full items-center mt-7" -->
        <div class="w-full max-w-sm p-8 bg-white rounded-md shadow-md">
            <h1 class="text-center text-2xl font-bold mb-6">{{__('admin.edit_movie')}}: {{$movie->title}}</h1>

            <form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="POST">

                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="title_en" class="block text-gray-700 mb-2">{{__('admin.title_en')}}</label>
                    <input type="text" name="title_en" id="title_en" value="{{ $movie->getTranslation('title', 'en') }}" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                    @error('title_en')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.title_req_en')}}</p>
                    @enderror
                    <label for="title_ka" class="block text-gray-700 mb-2">{{__('admin.title_ka')}}</label>
                    <input type="text" name="title_ka" id="title_ka" value="{{ $movie->getTranslation('title', 'ka') }}" class="w-full border border-gray-400 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                    @error('title_ka')
                            <p class="text-red-500 text-xs mt-1">{{__('validation.title_req_ka')}}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">{{__('admin.edit_movie')}}</button>
            </form>
        </div>
    </div>
</x-layout>
