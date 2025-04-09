<?php

use function Livewire\Volt\{state};

$files = glob(resource_path('views/pages/*.blade.php'));

$navItems = array_map(function ($file) {
    $routeName = pathinfo($file, PATHINFO_FILENAME);
    return [
        'name' => ucwords(str_replace('-', ' ', $routeName)),
        'url' => url($routeName)
    ];
}, $files);

//dd($navItems);

//state([
//    'navItems' => $navItems,
//]);


state([
    'navItems' => [
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Services', 'url' => '/services'],
        ['name' => 'About Us', 'url' => '/about'],
        ['name' => 'Contact Us', 'url' => '/contact'],
    ],
])

//

?>

<section class="">
    <nav class="relative py-6 bg-gray-900 z-0">
        <div class="container mx-auto px-4 z-10 flex justify-between items-center">
            <a class="text-white text-3xl font-bold leading-none z-10" href="#">
                <img class="h-14 z-10" src="{{ asset('images/planet9logoNameBGDark.png') }}" alt="" width="auto">
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-white p-3">
                    <svg class="block h-4 w-4 fill-current" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                @foreach($navItems as $navItem)

                <li><a class="text-sm text-gray-300 hover:text-white" href="#">{{ $navItem['name'] }}</a></li>
                <li class="text-gray-800">
                    <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                    </svg>
                </li>
                @endforeach
            </ul>
            <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 text-sm text-white font-bold border-2 border-gray-800 hover:border-gray-700 rounded-l-xl rounded-t-xl transition duration-200" href="#">Sign In</a><a class="hidden lg:inline-block py-2 px-6 bg-green-500 hover:bg-green-600 text-sm text-white font-bold rounded-l-xl rounded-t-xl transition duration-200" href="#">Sign up</a>
        </div>
    </nav>
    <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="relative flex flex-col py-6 px-6 h-full w-full bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img class="h-10" src="atis-assets/logo/atis/atis-mono-black.svg" alt="" width="auto">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    @foreach($navItems as $navItem)
                    <li class="mb-1"><a
                            class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                            href="#">{{ $navItem['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6"><a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-l-xl rounded-t-xl" href="#">Sign in</a><a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-600 hover:bg-green-700 rounded-l-xl rounded-t-xl" href="#">Sign Up</a></div>
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>© 2020 All rights reserved.</span>
                </p>
                <div class="text-center">
                    <a class="inline-block px-1" href="#">
                        <img src="atis-assets/social/facebook.svg" alt="">
                    </a>
                    <a class="inline-block px-1" href="#">
                        <img src="atis-assets/social/twitter.svg" alt="">
                    </a>
                    <a class="inline-block px-1" href="#">
                        <img src="atis-assets/social/instagram.svg" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </div>
</section>
