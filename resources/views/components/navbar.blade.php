

<div class="flex items-center justify-center bg-black">
    <img class="w-[auto] h-[90px]" src="{{ asset('img/home/logo.png') }}" alt="logo">
</div>

<nav class="bg-gray-200 border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse ">
            <svg xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            <span class="self-center text-sm font-semibold whitespace-nowrap dark:text-white"> 
                Metro manila
            </span>
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
            <div type="button" data-dropdown-toggle="categories" 
            id="category-icon"
            class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer
             hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white transition-transform duration-1000">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 transform transition-transform duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                </svg>
                Category
            </div>
            <button data-collapse-toggle="navbar-burger" 
                    type="button" 
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 transition-transform duration-300" 
                    aria-controls="navbar-burger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5 transform transition-transform duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between gap-10 hidden w-full md:flex md:w-auto md:order-1" id="navbar-burger">
            <a href="#" class="flex gap-2 py-1 px-3 hover:text-gray-500 rounded ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Home
            </a>
            <a href="#" class="flex gap-2 py-1 px-3 hover:text-gray-500 rounded">
                About us
            </a>
            <a href="#" class="flex gap-2 py-1 px-3 hover:text-gray-500 rounded">
                FAQs
            </a>
            <a href="#" class="flex gap-2 py-1 px-3 hover:text-gray-500 rounded">
                Register
            </a>
            <a href="#" class="flex gap-2 py-1 px-3 hover:text-gray-500 rounded">
                Login
            </a>
        </div>
    </div>
    <!-- Dropdown -->
    <div class="z-50 hidden my-4 text-base list-none text-white divide-y rounded-lg shadow dark:bg-gray-700" id="categories">
        <div class="grid grid-cols-4">
            <div class="p-6 flex items-center justify-center bg-black hover:bg-gray-200 hover:text-black transition duration-1000">
                <svg fill="#ffffff" class="hover:text-black" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M65.9,21.4c0.2,0.2,0.4,0.4,0.6,0.5c9.6,9.7,9.4,39.8,9.4,41.1c0,0.5-0.5,1-1,1h0c-0.6,0-1-0.5-1-1c0-0.3,0.2-30.6-8.8-39.6 c-1.4-1.4-2.9-2.2-4.6-2.4c-0.3,0-0.5,0-0.8,0c-0.3,0-0.6,0-0.9,0C38.6,21.8,37,50.4,37,50.7c0,0.5-0.5,1-1,1c0,0,0,0,0,0 c-0.6,0-1-0.5-1-1c0-0.3,1.1-20.2,13.1-28.3c-15.7,4-25.7,16.4-26.9,34.8L2.4,75.9c-1.5,1.5-0.2,3.9,1.8,3.6c2.3-0.3,5-1.6,7.9-1.6 c13.9,0,14.4,8.2,30.6,8.2c11.8,0,24.8-12.7,30.9-19.5c17.7-1.5,24.7-5.6,24.7-5.6C98.2,38.6,84.2,24.1,65.9,21.4z M67.9,67 c-6.3,0-13.4-3.3-20.2-6.5c-5.7-2.7-11.1-5.2-15.1-5.2c-5.5,0-7.4,1.1-7.4,1.1c-0.5,0.3-1.1,0.2-1.4-0.3c-0.3-0.5-0.2-1.1,0.3-1.4 c0.2-0.2,2.4-1.5,8.5-1.5c4.4,0,10,2.6,16,5.4c6.6,3.1,13.5,6.3,19.3,6.3c0.6,0,1,0.4,1,1S68.5,67,67.9,67z M63,17 c-0.1-1.8-1.5-3.2-3.3-3.2c-1.8,0-3.2,1.4-3.3,3.1c1.1-0.1,2.2-0.1,3.3-0.1C60.8,16.8,61.9,16.9,63,17z"></path> </g></svg>
                <p class="font-medium px-3">Caps</p>
            </div>
            <div class="p-6 flex items-center justify-center bg-black hover:bg-gray-200 hover:text-black transition duration-1000">
                <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 295.526 295.526" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M147.763,44.074c12.801,0,23.858-8.162,27.83-20.169c-7.578,2.086-17.237,3.345-27.83,3.345 c-10.592,0-20.251-1.259-27.828-3.345C123.905,35.911,134.961,44.074,147.763,44.074z"></path> <path d="M295.158,58.839c-0.608-1.706-1.873-3.109-3.521-3.873l-56.343-26.01c-11.985-4.06-24.195-7.267-36.524-9.611 c-0.434-0.085-0.866-0.126-1.292-0.126c-3.052,0-5.785,2.107-6.465,5.197c-4.502,19.82-22.047,34.659-43.251,34.659 c-21.203,0-38.749-14.838-43.25-34.659c-0.688-3.09-3.416-5.197-6.466-5.197c-0.426,0-0.858,0.041-1.292,0.126 c-12.328,2.344-24.538,5.551-36.542,9.611L3.889,54.965c-1.658,0.764-2.932,2.167-3.511,3.873 c-0.599,1.726-0.491,3.589,0.353,5.217l24.46,48.272c1.145,2.291,3.474,3.666,5.938,3.666c0.636,0,1.281-0.092,1.917-0.283 l27.167-8.052v161.97c0,3.678,3.001,6.678,6.689,6.678h161.723c3.678,0,6.67-3.001,6.67-6.678V107.66l27.186,8.052 c0.636,0.191,1.28,0.283,1.915,0.283c2.459,0,4.779-1.375,5.94-3.666l24.469-48.272C295.629,62.428,295.747,60.565,295.158,58.839z "></path> </g> </g></svg>
                <p class="font-medium px-3">Shirts</p>
            </div>
            <div class="p-6 flex items-center justify-center bg-black hover:bg-gray-200 hover:text-black transition duration-1000">
                Unisex
            </div>
            <div class="p-6 flex items-center justify-center bg-black hover:bg-gray-200 hover:text-black transition duration-1000">
                All
            </div>
        </div>
    </div>
</nav>
