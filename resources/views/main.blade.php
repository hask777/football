<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=@ye, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportAPI</title>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <!-- This is an example component -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <div class="w-screen flex flex-row items-center p-1 justify-between bg-white shadow-xs">
            <div class="ml-8 text-lg text-gray-700 hidden md:flex">SPORTDATA</div>
            <span class="w-screen md:w-1/3 h-10 bg-gray-200 cursor-pointer border border-gray-300 text-sm rounded-full flex">
            <input type="search" name="serch" placeholder="Search"
                class="flex-grow px-4 rounded-l-full rounded-r-full text-sm focus:outline-none">
            <i class="fas fa-search m-3 mr-5 text-lg text-gray-700 w-4 h-4">
            </i>
            </span>
            <div class="flex flex-row-reverse mr-4 ml-4 md:hidden">
            <i class="fas fa-bars"></i>
            </div >
            <div class="flex flex-row-reverse mr-8 hidden md:flex">
                <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Button</div>
                <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Link</div>
            </div>
        </div>
    </header>

    <div class="content w-5/6 m-auto pt-10">
        @yield('content')
    </div>
   
</body>
</html>