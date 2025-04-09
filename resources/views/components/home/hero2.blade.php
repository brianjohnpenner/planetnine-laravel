<?php

use function Livewire\Volt\{state};

//

?>

<section class="skewed-bottom-right">
    <div class="bg-gray-900 pt-12 lg:pt-20 pb-20 radius-for-skewed">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">
                    <div class="w-full text-center lg:text-left">
                        <div class="max-w-md mx-auto lg:mx-0">
                            <h2 class="mb-3 text-4xl lg:text-5xl text-white font-bold">
                                <span>Websites don't have to be</span>
                                <span class="text-orange-400">rocket science</span>
                            </h2>
                        </div>
                        <div class="max-w-sm mx-auto lg:mx-0">
                            <p class="mb-6 text-gray-400 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nisl sodales egestas lobortis.</p>
                            <div>
                                <a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-orange-700 hover:bg-orange-800 text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200" href="#">
                                    Get Started
                                </a>
                                <a class="inline-block w-full lg:w-auto py-2 px-6 leading-loose text-white font-semibold bg-gray-900 border-2 border-gray-700 hover:border-gray-600 rounded-l-xl rounded-t-xl transition duration-200" href="#">
                                    How it works
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4 flex items-center justify-center">
                    <div class="relative" style="z-index: 0;">
                        <img class="h-128 w-full max-w-lg object-cover rounded-3xl md:rounded-br-none" src="https://images.unsplash.com/photo-1462826303086-329426d1aef5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" alt="">
                        <img class="hidden md:block absolute fill-current text-orange-600" style="top:-2rem; right: 3rem; z-index: -1;" src="{{ asset('images/elements/green-dark-up.svg') }}" alt="">
                        <img class="hidden md:block absolute" style="bottom:-2rem; right: -2rem; z-index: -1;" src="{{ asset('images/elements/wing-green-down.svg') }}" alt="">
                        <img class="hidden md:block absolute" style="top:3rem; right: -3rem; z-index: -1;" src="{{ asset('images/elements/bullets-dark-right.svg') }}" alt="">
                        <img class="hidden md:block absolute" style="bottom:2.5rem; left: -4.5rem; z-index: -1;" src="{{ asset('images/elements/bullets-dark-left.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mr-for-radius">
        <svg class="h-12 md:h-16 lg:h-26 w-full text-gray-900" viewbox="0 0 10 10" preserveaspectratio="none">
            <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
        </svg>
    </div>
{{--    <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">--}}
{{--        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>--}}
{{--        <nav class="relative flex flex-col py-6 px-6 h-full w-full bg-white border-r overflow-y-auto">--}}
{{--            <div class="flex items-center mb-8">--}}
{{--                <a class="mr-auto text-3xl font-bold leading-none" href="#">--}}
{{--                    <img class="h-10" src="atis-assets/logo/atis/atis-mono-black.svg" alt="" width="auto">--}}
{{--                </a>--}}
{{--                <button class="navbar-close">--}}
{{--                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <ul>--}}
{{--                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Start</a></li>--}}
{{--                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">About Us</a></li>--}}
{{--                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Services</a></li>--}}
{{--                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Platform</a></li>--}}
{{--                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Testimonials</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="mt-auto">--}}
{{--                <div class="pt-6"><a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-l-xl rounded-t-xl" href="#">Sign In</a><a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-600 hover:bg-green-700 rounded-l-xl rounded-t-xl" href="#">Sign Up</a></div>--}}
{{--                <p class="my-4 text-xs text-center text-gray-400">--}}
{{--                    <span>© 2020 All rights reserved.</span>--}}
{{--                </p>--}}
{{--                <div class="text-center">--}}
{{--                    <a class="inline-block px-1" href="#">--}}
{{--                        <img src="atis-assets/social/facebook.svg" alt="">--}}
{{--                    </a>--}}
{{--                    <a class="inline-block px-1" href="#">--}}
{{--                        <img src="atis-assets/social/twitter.svg" alt="">--}}
{{--                    </a>--}}
{{--                    <a class="inline-block px-1" href="#">--}}
{{--                        <img src="atis-assets/social/instagram.svg" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}
</section>
