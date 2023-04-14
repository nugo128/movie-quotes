
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#4E4E4E] h-screen">
<div class="flex justify-end items-center gap-4 text-white text-xl m-4">
    
    @auth
        <p>{{__('nav.welcome', ['name'=>auth()->user()->name])}}</p>
        <a href="{{route('admin')}}">{{__('nav.admin')}}</a>
        <form action="{{route('logout')}}" method="post">

            @csrf
            <button type="submit">{{__('nav.logo_out')}}</button>
        </form>
    @endauth
</div>

    <section class="flex h-screen">
        <div class="flex flex-col items-center justify-center h-full ml-3 gap-2 fixed">
            <div
                class="w-10 h-10 rounded-full text-white border-2 border-white flex items-center justify-center hover:cursor-pointer">
                <a href="{{ route('setLocale', ['locale' => 'en']) }}">en</a>
            </div>


            <div
            class="w-10 h-10 rounded-full text-white border-2 border-white flex items-center justify-center hover:cursor-pointer">
                <a href="{{ route('setLocale', ['locale' => 'ka']) }}">ka</a>
            </div>
        </div>
        {{ $slot }}
    </section>
</body>

</html>
