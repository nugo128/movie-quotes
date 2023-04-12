<x-layout>
<div class="flex flex-col items-center justify-center w-full">
    <form method="POST" action="{{route('login')}}" class="bg-white rounded-lg shadow-lg p-10">
        @csrf
        <h1 class="text-2xl font-bold mb-6">{{__('auth.login')}}</h1>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
                {{__('auth.email')}}
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Enter your email">
            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{__('auth.email_req')}}</p>
                    @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="password">
            {{__('auth.password')}}
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="Enter your password">
            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{__('auth.pass_req')}}</p>
                    @enderror
        </div>
        <div class="flex items-end justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            {{__('auth.sign_in')}}
            </button>

        </div>
    </form>
</div>

</x-layout>