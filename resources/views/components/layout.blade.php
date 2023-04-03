<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#4E4E4E]">
    <section class="flex h-screen">
        <div class="flex flex-col items-center justify-center h-full ml-3 gap-2 fixed">
            <div
                class="w-10 h-10 rounded-full text-white border-2 border-white flex items-center justify-center hover:cursor-pointer">
                <p>EN</p>
            </div>


            <div
                class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:cursor-pointer">
                <p>KA</p>
            </div>
        </div>
        {{ $slot }}
    </section>
</body>

</html>
