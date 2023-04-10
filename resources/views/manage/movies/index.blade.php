<x-layout name='{{ $user->name }}'>

    <div class="flex flex-col w-full items-center mt-7">
        <p class="text-white text-2xl mb-4">Manage movies</p>
        <div class="bg-white p-8 rounded-md">
            <div class="flex items-center justify-between pb-6">
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <tbody>
                                    @foreach ($movie as $movies)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            <a href="{{ route('movies.index', $movies->id) }}">
                                                                {{ $movies->title }}
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="{{ route('movies.edit', $movies->id) }}">
                                                    <p class="text-blue-500 whitespace-no-wrap">
                                                        edit
                                                    </p>
                                                </a>
                                            </td>

                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <form method="POST"
                                                    action="{{ route('movies.destroy', $movies->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <p
                    class="bg-blue-500 text-white px-4 py-2 mt-1 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    <a href="admin/movies/create">Add Movie</a>
                </p>
            </div>
        </div>
    </div>

</x-layout>