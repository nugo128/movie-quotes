<x-layout name='{{ $user->name }}'>

<div class="flex flex-col w-full items-center mt-7 mb-10">
    <p class="text-white text-2xl mb-4">Manage movies</p>
    <div id="div1" class="flex-grow-1 bg-white p-8 rounded-md">
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
                                                <a href="{{ route('movies.index', ['id' => $movies->id]) }}">
                                                        {{$movies->title}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="admin/movies/{{$movies->id}}/edit">
                                            <p class="text-blue-500 whitespace-no-wrap">
                                                edit
                                            </p>
                                        </a>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <form method="POST" action="{{ route('movies.destroy', ['movie' => $movies->id]) }}">
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
            <p class="bg-blue-500 text-white px-4 py-2 mt-1 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"><a href="{{ route('movies.create') }}">Add Movie</a></p>
        </div>
    </div>
    <div class="w-max">
        <p class="text-white text-2xl mb-4 mt-10 text-center">Manage quotes</p>
        <div id="div2" class="flex-grow-1 bg-white p-8 rounded-md">
            <div class="flex items-center justify-between pb-6">
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <tbody>
                                    @foreach ($quote as $quotes)
                                    <tr>
                                        <td class="px-10 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $quotes->quote }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-10 py-2">
                                            <div class="w-44">
                                                <img src="/storage/{{$quotes->thumbnail}}" alt="">
                                            </div>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white                                         text-sm">
                                        <a href="{{ route('quotes.edit', ['quote' => $quotes->id]) }}">

                                                <p class="text-blue-500 whitespace-no-wrap">
                                                    edit
                                                </p>
                                            </a>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <form method="POST" action="{{ route('quotes.destroy', ['quote' => $quotes->id]) }}">
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
                <p class="bg-blue-500 text-white px-4 py-2 mt-1 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"><a href="admin/quotes/create">Add Quote</a></p>
            </div>
        </div>
    </div>
</div>

</x-layout>

