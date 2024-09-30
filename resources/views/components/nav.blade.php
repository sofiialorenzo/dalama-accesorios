<div class="w-full">
<x-top-nav></x-top-nav>
<nav class="bg-white w-full z-20 top-0 start-0">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="#" class="flex items-center space-x-3">
            <img src="{{ asset('img/dalama-logo.png') }}" alt="Dalama Logo" class="h-12">
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li class="hover:bg-red-800 hover:text-white hover:rounded px-2.5 py-1">
                    <x-nav-link route="home">Inicio</x-nav-link>
                </li>
                <li class="hover:bg-red-800 hover:text-white hover:rounded px-2.5 py-1">
                    <x-nav-link route="products.all-products">Productos</x-nav-link>
                </li>
                <li class="hover:bg-red-800 hover:text-white hover:rounded px-2.5 py-1">
                    <x-nav-link route="blog">Blog</x-nav-link>
                </li>
                <li class="hover:bg-red-800 hover:text-white hover:rounded px-2.5 py-1">
                    <x-nav-link route="contact">Contacto</x-nav-link>
                </li>
                @guest
                    <li class="hover:bg-red-800 hover:text-white hover:rounded px-2.5 py-1">
                        <x-nav-link route="auth.login.form" > Inicio de sesion </x-nav-link>
                    </li>
                    @else
                    <li class="hover:bg-red-800 hover:text-white hover:rounded px-2.5 py-1">
                        <form action="{{ route('auth.logout.process') }}" method="POST">
                            @csrf
                            <button class="nav-link" > {{ auth()->user()->email }} (Cerrar Sesion) </button>
                        </form>
                    </li>
                    @endguest
            </ul>

        </div>

    </div>
</nav>
</div>