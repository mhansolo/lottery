<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BKK Live Pro</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div id="main_page" class="w-screen h-screen flex flex-col items-center px-7 bg-blue-50">
            <img src="{{asset('images/BKK.png')}}" class="w-1/6 mt-12">
            <div class="w-full flex flex-row items-start mt-10">
                <span class="text-sm text-green-500">15/3/2020</span>
                <span class="text-sm text-red-400 ml-3">12:10:19 AM</span>
            </div>
            <div class="flex flex-row w-full mt-3 justify-between">
                <div class="flex-1 h-24 flex flex-col items-center justify-center shadow-[0_0px_60px_-15px_rgba(0,0,0,0.2)] rounded-lg bg-white mr-2">
                    <div class="flex flex-col justify-center">
                        <span class="text-gray-800 font-bold text-sm">BUY</span>
                        <span class="font-bold text-green-500 text-3xl">1.329</span>
                    </div>
                </div>
                <div class="h-24 flex-1 flex flex-col items-center justify-center shadow-[0_0px_60px_-15px_rgba(0,0,0,0.2)] rounded-lg bg-white ml-2">
                    <div class="flex flex-col justify-center">
                        <span class="text-gray-800 font-bold text-sm">3D</span>
                        <span class="font-bold text-blue-500 text-3xl">329</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-row w-full mt-7 justify-between">
                <div class="h-24 flex-1 flex flex-col items-center justify-center shadow-[0_0px_60px_-15px_rgba(0,0,0,0.2)] rounded-lg bg-white mr-2">
                    <div class="flex flex-col justify-center">
                        <span class="text-gray-800 font-bold text-sm">SELL</span>
                        <span class="font-bold text-red-500 text-3xl">1.329</span>
                    </div>
                </div>
                <div class="h-24 flex-1 flex flex-col items-center justify-center shadow-[0_0px_60px_-15px_rgba(0,0,0,0.2)] rounded-lg bg-white ml-2">
                    <div class="flex flex-col justify-center">
                        <span class="text-gray-800 font-bold text-sm">2D</span>
                        <span class="font-bold text-orange-500 text-3xl">98</span>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-row items-start mt-10">
                <span class="text-sm text-blue-400 font-bold">Round</span>
                <span class="text-sm text-blue-400 font-bold ml-2">12:00 AM</span>
            </div>
            <div class="w-full h-28 mt-3 flex flex-row shadow-[0_0px_60px_-15px_rgba(0,0,0,0.2)] rounded-lg bg-white mr-2">
                <div class="flex-1 flex flex-col items-center justify-center ">
                    <span class="font-bold text-gray-800 text-sm">BUY</span>
                    <span class="mt-4 text-md font-bold text-green-500">1.329</span>
                </div>
                <div class="flex-1 flex flex-col items-center justify-center ">
                    <span class="font-bold text-gray-800 text-sm">SELL</span>
                    <span class="mt-4 text-md font-bold text-red-500">1.329</span>
                </div>
                <div class="flex-1 flex flex-col items-center justify-center ">
                    <span class="font-bold text-gray-800 text-sm">3D</span>
                    <span class="mt-4 text-md font-bold text-blue-500">1.329</span>
                </div>
                <div class="flex-1 flex flex-col items-center justify-center ">
                    <span class="font-bold text-gray-800 text-sm">2D</span>
                    <span class="mt-4 text-md font-bold text-orange-500">1.329</span>
                </div>
            </div>

            <div class="w-full h-44 mt-10 flex flex-row shadow-[0_0px_60px_-15px_rgba(0,0,0,0.2)] rounded-lg bg-white mr-2">
                <div class="flex-1 flex flex-col items-center justify-center">
                    <img class="w-1/4" src="{{asset('images/result.png')}}">
                    <span class="font-bold text-gray-800 text-md mt-2">Results</span>
                </div>
                <div class="flex-1 flex flex-col items-center justify-center">
                    <img class="w-1/4" src="{{asset('images/list.png')}}">
                    <span class="font-bold text-gray-800 text-md mt-2">Results</span>
                </div>
            </div>

            <marquee class="mt-10 font-bold text-blue-500">( Contant Viber : 09943795998)</marquee>
        </div>
    </body>
</html>
