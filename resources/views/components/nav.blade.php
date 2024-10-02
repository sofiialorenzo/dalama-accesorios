<div class="w-full">
<x-top-nav></x-top-nav>
<nav class="bg-white w-full z-20 top-0 start-0">
    <div class="flex flex-col justify-between items-center mx-auto max-w-screen-xl p-4 md:flex-row">
        <a href="#" class="flex items-center space-x-3">
            <img src="{{ asset('img/dalama-logo.png') }}" alt="Dalama Logo" class="h-12">
        </a>
        <ul class="flex flex-row flex-wrap items-center justify-center font-medium gap-2 mt-0 rtl:space-x-reverse text-sm">
            <li class="hover:bg-red-800 hover:text-white active:bg-red-600 active:text-gray-100 bg-red-800 text-white rounded px-2.5 py-1 md:bg-transparent md:text-black">
                <x-nav-link route="home">Inicio</x-nav-link>
            </li>
            <li class="hover:bg-red-800 hover:text-white active:bg-red-600 active:text-gray-100 bg-red-800 text-white rounded px-2.5 py-1 md:bg-transparent md:text-black">
                <x-nav-link route="products.all-products">Productos</x-nav-link>
            </li>
            <li class="hover:bg-red-800 hover:text-white active:bg-red-600 active:text-gray-100 bg-red-800 text-white rounded px-2.5 py-1 md:bg-transparent md:text-black">
                <x-nav-link route="blog">Blog</x-nav-link>
            </li>
            <li class="hover:bg-red-800 hover:text-white active:bg-red-600 active:text-gray-100 bg-red-800 text-white rounded px-2.5 py-1 md:bg-transparent md:text-black">
                <x-nav-link route="contact">Contacto</x-nav-link>
            </li>
            @guest
                <li class="hover:bg-red-800 hover:text-white active:bg-red-600 active:text-gray-100 bg-red-800 text-white rounded px-2.5 py-1 md:bg-transparent md:text-black">
                    <x-nav-link route="auth.login.form" > Inicio de sesion </x-nav-link>
                </li>
                @else
                <li class="hover:bg-red-800 hover:text-white active:bg-red-600 active:text-gray-100 bg-red-800 text-white rounded px-2.5 py-1 md:bg-transparent md:text-black">
                    <form action="{{ route('auth.logout.process') }}" method="POST" class="mb-0">
                        @csrf
                        <button class="nav-link" > {{ auth()->user()->email }} (Cerrar Sesion) </button>
                    </form>
                </li>
                @endguest
        </ul>
    </div>
</nav>
</div>