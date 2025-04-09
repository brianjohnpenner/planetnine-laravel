<?php

use function Livewire\Volt\{state};

//

?>

<section class="relative bg-gray-900 z-0 overflow-hidden -mt-10">
    <div class="relative pt-12 lg:pt-20 pb-20 z-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0 flex items-center">
                    <div class="w-full text-center lg:text-left">
                        <div class="mx-auto lg:mx-0 max-w-lg">
                            <h2 class="mb-3 text-4xl lg:text-5xl text-white font-bold">
                                <span>Websites don't have to be</span>
                                <span class="text-orange-400">rocket science</span>
                            </h2>
                        </div>
                        <div class="mx-auto lg:mx-0 max-w-lg">
                            <p class="mb-6 text-gray-400 leading-loose">We understand that navigating the world of technology can feel complex and overwhelming. But with us on your team, it doesn't have to be. We've made our mission all about simplifying your tech journey. Whether that's about keeping your computers running smoothly, building a standout website, or developing a bespoke web application - we've got you covered. With Planet Nine Technology, all your tech needs are handled seamlessly, making it feel less like rocket science and more like a walk in the park.</p>
                            <div><a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-green-600 hover:bg-green-700 text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200 bg-yellow-500" href="#">Contact Us</a><a class="inline-block w-full lg:w-auto py-2 px-6 leading-loose text-white font-semibold bg-gray-900 border-2 border-gray-700 hover:border-gray-600 rounded-l-xl rounded-t-xl transition duration-200" href="#">How it works</a></div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <div class="flex flex-wrap lg:mb-4 lg:ml-6">
                        <img class="w-full md:w-1/2 lg:w-1/3 h-64 p-2 object-cover rounded-4xl lg:rounded-br-none" src="https://images.unsplash.com/photo-1557804483-ef3ae78eca57?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=941&q=80" alt="">
                        <img class="w-full md:w-1/2 lg:w-2/3 h-64 p-2 object-cover rounded-4xl lg:rounded-bl-none" src="https://images.unsplash.com/photo-1559136560-16ad036d85d3?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" alt="">
                    </div>
                    <div class="flex flex-wrap lg:mb-4 lg:mr-6">
                        <img class="w-full md:w-1/2 lg:w-2/3 h-64 p-2 object-cover rounded-4xl lg:rounded-br-none" src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80" alt="">
                        <img class="w-full md:w-1/2 lg:w-1/3 h-64 p-2 object-cover rounded-4xl lg:rounded-bl-none" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1190&q=80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="hidden lg:block absolute inset-0 w-full z-10" src="{{ asset('images/lines.svg') }}" alt="">
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
                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Start</a></li>
                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">About Us</a></li>
                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Services</a></li>
                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Platform</a></li>
                    <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded" href="#">Testimonials</a></li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6"><a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-l-xl rounded-t-xl" href="#">Sign In</a><a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-600 hover:bg-green-700 rounded-l-xl rounded-t-xl" href="#">Sign Up</a></div>
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
