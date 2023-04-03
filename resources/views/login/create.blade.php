<x-layout>
<div class="flex flex-col items-center justify-center w-full">
    <form class="bg-white rounded-lg shadow-lg p-10">
        <h1 class="text-2xl font-bold mb-6">Login</h1>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password">
        </div>
        <div class="flex items-end justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Sign In
            </button>

        </div>
    </form>
</div>

</x-layout>