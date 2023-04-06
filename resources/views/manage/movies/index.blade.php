<x-layout name='{{ $user->name }}'>

<div class="flex flex-col w-full items-center justify-center">
<p class="text-white">click here to <a class="underline text-lg" href="/manage/movies/create">create new movie</a>, or edit and delete below</p>
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
                                                    <a href="/movies/{{$movies->id}}">
                                                        {{$movies->title}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="/manage/movies/{{$movies->id}}/edit">
                                            <p class="text-blue-500 whitespace-no-wrap">
                                                edit
                                            </p>
                                        </a>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <form method="POST" action="/manage/movies/{{$movies->id}}">
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
    </div>
</div>

</x-layout>
