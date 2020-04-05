<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">



</head>

<body>
    <div id="app">
        <header class="fixed w-full font-bold lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-2 py-2 border-b-2">
            <div class="flex-1 flex justify-between items-center">
            <a href="">
                <img src="{{asset('img/logo.png')}}" class="w-6 h-4" alt="">
            </a>
            </div>
            <nav class="">
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-pink-500 border-teal-400 hover:text-pink-900 hover:border-white focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
                <div class="hidden w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow">
                        <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-gray-500 hover:text-indigo-500 mr-4">
                            Docs
                        </a>
                        <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-gray-500 hover:text-indigo-500 mr-4">
                            Examples
                        </a>

                        <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-gray-500 hover:text-indigo-500 ">
                            Blog
                        </a>
                        <a href="#responsive-header" class="block hover:no-underline lg:inline-block lg:mt-0 text-gray-500 hover:text-indigo-500 lg:pl-4">
                            <i class="fa fa-cogs"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="grid grid-cols-12  gap-4">
            <div class="col-span-2">
                <div class="nicescroll w-full mt-10 md:w-1/6 bg-white font-medium md:bg-gray-900 px-2  fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen shadow-md">
                    <ul >
                        <li class=" pl-2 text-gray-700 "><a href="" class="hover:no-underline hover:text-indigo-500"><img src="{{asset('img/profile.jpg')}}" class="w-6 h-6 rounded-full" alt=""> Udipta</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="{{asset(route('home'))}}" class="hover:no-underline hover:text-indigo-600 "><i class="fas fa-tachometer-alt"></i> Dashboard</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-cogs"></i> Actions</a> </li>
                    </ul>
                    <label class="text-gray-700">Components</label>
                    <ul >
                        <li class=" p-2 text-gray-600 "><a href="{{asset(route('alerts'))}}" class="hover:no-underline hover:text-indigo-500"><i class="fas fa-tachometer-alt"></i> Alerts</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="{{asset(route('buttons'))}}" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-tachometer-alt"></i> Buttons</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="{{asset(route('tables'))}}" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-cogs"></i> Tables</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-500"><i class="fas fa-cogs"></i> Actions</a> </li>
                    </ul>
                    <label class="text-gray-700">Pages</label>
                    <ul >
                        <li class=" p-2 text-gray-600 "><a href="{{asset(route('buttons'))}}" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-tachometer-alt"></i> Buttons</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-cogs"></i> Actions</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-pager"></i> Components</a> </li>
                    </ul>
                    <label class="text-gray-700">Typography</label>
                    <ul >
                        <li class=" p-2 text-gray-600 "><a href="{{asset(route('buttons'))}}" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-tachometer-alt"></i> Buttons</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-cogs"></i> Actions</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-pager"></i> Components</a> </li>
                    </ul>
                    <label class="text-gray-700">Forms</label>
                    <ul >
                        <li class=" p-2 text-gray-600 "><a href="{{asset(route('buttons'))}}" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-tachometer-alt"></i> Buttons</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-cogs"></i> Actions</a> </li>
                        <li class=" p-2 text-gray-600 "><a href="" class="hover:no-underline hover:text-indigo-600"><i class="fas fa-pager"></i> Components</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-span-10">
                <div class="container bg-gray-300 pt-16 px-6 pb-16 min-h-screen">
                    @yield('content')
                </div>
                <footer class="p-2 bg-white text-center text-xs">Made with <i class="fa fa-heart text-red-500"></i> by Microcept Technologies & Education</footer>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/aaef35473a.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.nicescroll/jquery.nicescroll.min.js')}}" defer></script>

    <!-- Scripts -->
    @yield('js')
    <script>

    $(document).ready(function(e) {
        $("body").niceScroll({
         cursorcolor:"#667eea",
         cursorwidth:"6px"
        });
        $(".nicescroll").niceScroll({
         cursorcolor:"#667eea",
         cursorwidth:"6px"
        });
        // $(".nicescroll").niceScroll();
    })

    </script>
</body>

</html>
