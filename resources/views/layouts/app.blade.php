<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    
    
</head>

<body>
    <div id="app">
        <div class="grid  grid-cols-12  gap-0">
            
            <div class="col-span-12">
                <nav class="flex items-center justify-between flex-wrap bg-white p-2 border-b-2">
                    <div class="flex items-center flex-shrink-0 text-white mr-6">
                        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                        <span class="font-semibold text-xl tracking-tight text-pink-500">Tailwind CSS</span>
                    </div>
                    <div class="block lg:hidden">
                        <button class="flex items-center px-3 py-2 border rounded text-pink-500 border-teal-400 hover:text-pink-900 hover:border-white focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>
                    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                        <div class="text-sm lg:flex-grow">
                            <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-indigo-500 hover:text-indigo-900 mr-4">
                                Docs
                            </a>
                            <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-indigo-500 hover:text-indigo-900 mr-4">
                                Examples
                            </a>
                            <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-indigo-500 hover:text-indigo-900 mr-4">
                                Examples
                            </a>
                            <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-indigo-500 hover:text-indigo-900 ">
                                Blog
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="grid grid-rows-3 grid-cols-12 grid-flow-col gap-0">
            <div class="hidden md:block row-span-3 col-span-2 bg-white h-screen shadow-sm "></div>
            <div class="row-span-1 col-span-2 ..."></div>
            <div class="row-span-2 col-span-2 ..."></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    @yield('js')
</body>

</html>
